<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome to Company API</title>
    </head>
    <body>
        <h1>Welcome to this api</h1>
    <p>
        <p>You can access this api using: <strong>http://localhost:8000/api/</strong> example: <strong>http://localhost:8000/api/companies</strong></p>
        <h2>Available endpoints</h2>
        <p><strong>/companies</strong>: returns list of all companies, by default it returns 20 of them.</p>
        <p><strong>/companies?limit=20&page=2</strong>: to return 20 result starting at page 2</p>
        <p><strong>/companies/{company_id}</strong>: returns single company information</p>
    </p>
    </body>
</html>
