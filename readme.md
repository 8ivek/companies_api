## Installation
### Commands:
1. composer install
2. npm install
3. php artisan migrate or php artisan migrate:rollback
4. php artisan db:seed
5. php artisan serve (for local deployment)

### Endpoints:
url: <strong>http://localhost:8000/api/</strong>

* **GET|HEAD** | / | welcome page 
* **GET|HEAD** | **api/companies** | returns list of all companies, by default it returns 10 of them
* **GET|HEAD** | **api/companies?page=2** | to returns 10 results starting at page 2
* **POST** | **api/companies** | add new company, *see Companies API.postman_collection.json file*
* **GET|HEAD**  | **api/companies/{company}** | returns a single company
* **PUT|PATCH** | **api/companies/{company}** | update a company
* **DELETE**    | **api/companies/{company}** | delete a company
* **GET|HEAD**  | **api/{fallbackPlaceholder}** | all fallback calls comes  here.



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
