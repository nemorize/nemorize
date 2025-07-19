import { format } from 'date-fns'
import { TZDate } from '@date-fns/tz'
import { readFile, writeFile } from 'fs/promises'

const insertAfter = '<div id="comments"></div>'
const commentTemplate = `
      <div class="post__comment-item">
        <div class="post__comment-item-header">
          <img src="https://github.com/{{ username }}.png" alt="{{ username }}" width="320" height="320" />
          <span>{{ username }}</span>
          <time>${format(TZDate.tz('Asia/Seoul'), 'yyyy-MM-dd HH:mm')}</time>
        </div>
        <div class="post__comment-item-body">
          {{ content }}
        </div>
      </div>
`

function escape (text) {
  return text
    .replaceAll('&', '&amp;')
    .replaceAll('<', '&lt;')
    .replaceAll('>', '&gt;')
    .replaceAll('"', '&quot;')
    .replaceAll("'", '&#039;')
}

function build (username, content) {
  return commentTemplate
    .replaceAll('{{ username }}', escape(username))
    .replaceAll('{{ content }}', escape(content))
}

const raw = process.env.json
const inputs = JSON.parse(raw)

let content = (await readFile('.' + inputs.path + '/index.html')).toString()
content = content.replace(
  insertAfter,
  insertAfter + build(inputs.username, inputs.content)
)
await writeFile('.' + inputs.path + '/index.html', content)
