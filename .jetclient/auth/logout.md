```toml
name = 'logout'
method = 'POST'
url = 'http://127.0.0.1:8000/api/v1/auth/logout'
sortWeight = 3000000
id = '2defc2b5-0c17-4b1b-a085-fdb2ea457aef'

[auth.bearer]
token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL3YxL2F1dGgvbG9naW4iLCJpYXQiOjE3NTAzNjE2NTAsImV4cCI6MTc1MDM2NTI1MCwibmJmIjoxNzUwMzYxNjUwLCJqdGkiOiJJRGFjT3lVbWdjaGRHUWlNIiwic3ViIjoiMiIsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.hmkIRdqqgXsd8p9wicF3jcHYvMSmU9pUE7NVFj6QkKc'

[body]
type = 'JSON'
raw = '''
{
  "email": "muhmmedabdelkhalik@gmail.com",
  "password": "12345"
  
}'''
```
