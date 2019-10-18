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
        url: <a href="http://localhost:8000/api/companies" target="_blank">http://localhost:8000/api/companies</a>

        <p><strong>GET|HEAD</strong> | / | welcome page</p>
        <p><strong>GET|HEAD</strong> | <strong>api/companies</strong> | returns list of all companies, by default it returns 10 of them</p>
        <p><strong>GET|HEAD</strong> | <strong>api/companies?page=2</strong> | to returns 10 results starting at page 2</p>
        <p><strong>POST</strong> | <strong>api/companies</strong> | add new company, <strong>see Companies API.postman_collection.json file</strong></p>
        <p><strong>GET|HEAD</strong>  | <strong>api/companies/{company}</strong> | returns a single company</p>
        <p><strong>PUT|PATCH</strong> | <strong>api/companies/{company}</strong> | update a company</p>
        <p><strong>DELETE</strong>    | <strong>api/companies/{company}</strong> | delete a company</p>
        <p><strong>GET|HEAD</strong>  | <strong>api/{fallbackPlaceholder}</strong> | all fallback calls comes  here.</p>
    </p>
    </body>
</html>
