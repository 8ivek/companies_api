## Installation
### Commands:
1. composer install
2. npm install
3. php artisan migrate or php artisan migrate:rollback
4. php artisan db:seed
5. php artisan serve (for local deployment)

### Endpoints:
url: <strong>http://localhost:8000/api/</strong>
* **/companies:** returns list of all companies, by default it returns 20 of them.
  * **/companies?limit=20&page=2**: to return 20 result starting at page 2
* **/companies/{company_id}**: returns single company information

## Companies table structure:

### Table structure: 

**tbl_companies**

* id
* name
* title
* description
* services
* address
* city
* province
* country
* email
* phone
* keywords

### example: 
* id: 1
* name: ABC Company
* title: Build your company app from the best in the field
* description: We are Toronto based registered company for software development
* services: web application development
* email: abc@gmail.com
* phone: 416-xxx-xxxx
* address: 333 Yonge street
* city: Toronto
* Province: Ontario
* Country: Canada
* Keywords: web, applications
