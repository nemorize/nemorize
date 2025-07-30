// noinspection ExceptionCaughtLocallyJS

const headers = {
	'content-type': 'text/css',
	'cache-control': 'no-store',
}

export default {
	async fetch(request) {
		try {
			const referer = request.headers.get('referer') ?? ''
			const raw = ((referer.split('?')[1] ?? '').split('q=')[1] ?? '')
				.split('&')[0]
			const q = decodeURI(raw)
				.replace(/[^a-zA-Z0-9ㄱ-ㅎ가-힣]/g, '')
				.trim()
				.toLowerCase()
			if (!q) {
				return new Response('', { headers })
			}
			return new Response(
				'.blog__search label:before { content: "' + q + '"; }'
				+ '[data-search-keywords] { display: none; }'
				+ '[data-search-keywords*="' + q +  '"] { display: list-item !important; }'
				+ '.blog__section:not(.blog__section:has([data-search-keywords*="' + q +  '"])) { display: none; }',
				{ headers }
			)
		} catch (e) {
			return new Response(
				`/** Error: ${e.message} **/`,
				{ status: 400, headers }
			)
		}
	},
}
