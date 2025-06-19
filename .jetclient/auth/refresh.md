```toml
name = 'refresh'
method = 'POST'
url = 'http://127.0.0.1:8000/api/v1/auth/refresh'
sortWeight = 4000000
id = 'fa1dc52d-5e8b-429a-9f49-1c7f22322340'

[auth.bearer]
token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL3YxL2F1dGgvbG9naW4iLCJpYXQiOjE3NTAzNjE4NTcsImV4cCI6MTc1MDM2NTQ1NywibmJmIjoxNzUwMzYxODU3LCJqdGkiOiJvYVdZSGxhOFBkUDQ5T3JrIiwic3ViIjoiMiIsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.bznJ7oteIAIW1o9VPWZ_FvduclEj4QfMbEiPOROq-UY'

[body]
type = 'JSON'
raw = '''
{
  "email": "muhmmedabdelkhalik@gmail.com",
  "password": "12345"
  
}'''
```
