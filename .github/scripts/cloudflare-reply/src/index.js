// noinspection JSUnresolvedReference,JSUnusedGlobalSymbols,JSUnusedLocalSymbols

import jwt from '@tsndr/cloudflare-worker-jwt'
import { parse } from 'cookie'

import badRequestHtml from './bad-request.html'
import authFailedHtml from './auth-failed.html'
import rateLimitHtml from './rate-limit.html'
import noContentHtml from './no-content.html'
import badFormHtml from './bad-form.html'
import unAuthFormHtml from './unauth-form.html'
import authFormHtml from './auth-form.html'
import serverErrorHtml from './server-error.html'

export default {
	async fetch(request, env, ctx) {
		const { pathname, searchParams } = new URL(request.url)

		if (request.method === 'GET' && pathname === '/auth') {
			const path = searchParams.get('path')
			if (!path) {
				return new Response(String(badRequestHtml), {
					status: 400,
					headers: {
						'content-type': 'text/html; charset=utf-8',
					}
				})
			}
			return Response.redirect(
				`https://github.com/login/oauth/authorize?client_id=${env.GITHUB_CLIENT_ID}&state=${path}`,
				302
			)
		}
		if (request.method === 'GET' && pathname === '/callback') {
			const code = searchParams.get('code')
			const path = searchParams.get('state')
			if (!code || !path) {
				return new Response(String(badRequestHtml), {
					status: 400,
					headers: {
						'content-type': 'text/html; charset=utf-8',
					}
				})
			}

			try {
				const response0 = await fetch('https://github.com/login/oauth/access_token', {
					method: 'POST',
					headers: {
						'content-type': 'application/json',
						'accept': 'application/json',
					},
					body: JSON.stringify({
						client_id: env.GITHUB_CLIENT_ID,
						client_secret: env.GITHUB_CLIENT_SECRET,
						code,
					})
				})
				const output0 = await response0.json()
				if (output0.error) {
					return new Response(String(authFailedHtml), {
						status: 400,
						headers: {
							'content-type': 'text/html; charset=utf-8',
						}
					})
				}

				const response1 = await fetch('https://api.github.com/user', {
					method: 'GET',
					headers: {
						'user-agent': 'nemorize-reply-app',
						'authorization': `Bearer ${output0.access_token}`,
					},
				})
				const output1 = await response1.json()
				if (output1.error) {
					return new Response(String(authFailedHtml), {
						status: 400,
						headers: {
							'content-type': 'text/html; charset=utf-8',
						}
					})
				}

				const token = await jwt.sign({
					iss: env.BLOG_HOST,
					sub: output1.login,
				}, env.JWT_SECRET_KEY)
				return new Response('', {
					status: 302,
					headers: {
						'location': `https://${env.BLOG_HOST}${path}`,
						'set-cookie': `auth-token=${token}; HttpOnly; SameSite=Lax; Secure`
					}
				})
			} catch (e) {
				console.error(e)
				return new Response(String(serverErrorHtml), {
					status: 500,
					headers: {
						'content-type': 'text/html; charset=utf-8',
					}
				})
			}
		}
		if (request.method === 'GET' && pathname === '/') {
			const path = searchParams.get('path')
			if (!path) {
				return new Response(String(badFormHtml), {
					status: 400,
					headers: {
						'content-type': 'text/html; charset=utf-8',
					}
				})
			}
			const cookie = parse(request.headers.get('cookie') || '')
			if (cookie['auth-token']) {
				const verified = await jwt.verify(cookie['auth-token'], env.JWT_SECRET_KEY)
				if (verified && verified.payload.iss === env.BLOG_HOST && verified.payload.sub) {
					return new Response(
						String(authFormHtml)
							.replaceAll('{{ path }}', path)
							.replaceAll('{{ username }}', verified.payload.sub),
						{
							status: 200,
							headers: {
								'content-type': 'text/html; charset=utf-8',
							}
						}
					)
				}
			}
			return new Response(
				String(unAuthFormHtml)
					.replaceAll('{{ path }}', path),
				{
					status: 403,
					headers: {
						'content-type': 'text/html; charset=utf-8',
					}
				}
			)
		}
		if (request.method === 'POST' && pathname === '/submit') {
			const { success } = await env.RATE_LIMIT.limit({ key: '' })
			if (!success) {
				return new Response(String(rateLimitHtml), {
					status: 429,
					headers: {
						'content-type': 'text/html; charset=utf-8',
					}
				})
			}

			const body = await request.formData()
			const path = body.get('path')
			if (!path || path.includes('.')) {
				return new Response(String(badRequestHtml), {
					status: 400,
					headers: {
						'content-type': 'text/html; charset=utf-8',
					}
				})
			}
			const content = body.get('content')?.trim()?.substring(0, 2000) || ''
			if (!content) {
				return new Response(String(noContentHtml), {
					status: 400,
					headers: {
						'content-type': 'text/html; charset=utf-8',
					}
				})
			}
			const cookie = parse(request.headers.get('cookie') || '')
			if (cookie['auth-token']) {
				const verified = await jwt.verify(cookie['auth-token'], env.JWT_SECRET_KEY)
				if (verified && verified.payload.iss === env.BLOG_HOST && verified.payload.sub) {
					try {
						const response = await fetch(`https://api.github.com/repos/${env.GITHUB_WORKFLOW_REPO}/actions/workflows/${env.GITHUB_WORKFLOW_ID}/dispatches`, {
							method: 'POST',
							headers: {
								'user-agent': 'nemorize-reply-app',
								'accept': 'application/vnd.github+json',
								'authorization': `Bearer ${env.GITHUB_WORKFLOW_TOKEN}`,
								'x-github-api-version': '2022-11-28'
							},
							body: JSON.stringify({
								ref: 'main',
								inputs: {
									path,
									content,
									username: verified.payload.sub,
								},
							}),
						})
						const output = await response.json()
						if (output.error) {
							console.error(output)
							return new Response(String(serverErrorHtml), {
								status: 500,
								headers: {
									'content-type': 'text/html; charset=utf-8',
								}
							})
						}
						return Response.redirect(`https://${env.BLOG_HOST}${path}`, 302)
					} catch (e) {
						console.error(e)
						return new Response(String(serverErrorHtml), {
							status: 500,
							headers: {
								'content-type': 'text/html; charset=utf-8',
							}
						})
					}
				}
			}
			return new Response(String(badRequestHtml), {
				status: 400,
				headers: {
					'content-type': 'text/html; charset=utf-8',
				}
			})
		}
	},
};
