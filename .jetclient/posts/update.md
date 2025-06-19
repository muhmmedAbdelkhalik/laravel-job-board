```toml
name = 'update'
method = 'PATCH'
url = 'http://127.0.0.1:8000/api/posts/01978380-ed18-7021-b87e-55f882a13d4f'
sortWeight = 5000000
id = '8ffeccab-46ea-4a53-a3f4-ef33fcf6b3aa'

[body]
type = 'JSON'
raw = '''
{
  'title': 'Store Request Body2',
  'body': 'Lorem ipsum',
  'author': 'Mohamed',
  'published': true
}'''
```
