```toml
name = 'user'
method = 'GET'
url = 'http://127.0.0.1:8000/api/v1/auth/me'
sortWeight = 2000000
id = '4447ee73-06fd-4f64-8d49-4ef404accf07'

[auth.bearer]
token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL3YxL2F1dGgvcmVmcmVzaCIsImlhdCI6MTc1MDM2MTg1NywiZXhwIjoxNzUwMzY1NDY3LCJuYmYiOjE3NTAzNjE4NjcsImp0aSI6IlZKZDlHYjhnbjkySVR2aWYiLCJzdWIiOiIyIiwicHJ2IjoiMjNiZDVjODk0OWY2MDBhZGIzOWU3MDFjNDAwODcyZGI3YTU5NzZmNyJ9.Ep7C2FgNEzfhb5hrbfXt2HFRgNiTWXXGjfTlX8puKKk'

[body]
type = 'JSON'
raw = '''
{
  "email": "muhmmedabdelkhalik@gmail.com",
  "password": "12345"
  
}'''
```
