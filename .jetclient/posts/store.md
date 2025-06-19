```toml
name = 'store'
method = 'POST'
url = 'http://127.0.0.1:8000/api/posts'
sortWeight = 1000000
id = '6d40c4b8-1420-409d-b387-2a928b35c406'

[body]
type = 'JSON'
raw = '''
{
  'title': 'Store Request Body',
  'body': 'body',
  'author': 'author',
  'published': true
}'''
```
