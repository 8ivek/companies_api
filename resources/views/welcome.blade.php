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
        <p><strong>/companies</strong>: returns list of all companies, by default it returns 10 of them.</p>
        <p><strong>/companies?page=2</strong>: to returns 10 result starting at page 2</p>
        <p><strong>/companies/{company_id}</strong>: returns single company</p>
    </p>
    </body>
</html>
