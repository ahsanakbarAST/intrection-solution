# Interaction Solution

This project is a solution for managing interactions on websites. It provides APIs for interaction management, user registration, authentication, and data retrieval.

## Technologies Used

- Laravel: [Version 10.37.3](https://laravel.com/) - PHP framework for building the backend.
- MySQL: (https://www.mysql.com/) - Database system used for storing data.
- Heroku: [Link to Heroku](https://www.heroku.com/) - Deployment platform.

## Installation

To run this project locally, follow these steps:

1. Clone the repository:
   ```bash
   git clone https://github.com/ahsanakbarAST/intrection-solution.git
   cd interaction-solution
2. Install dependencies:
    composer install
3. Set up the environment variables:
   Copy the .env.example file to .env.
   Configure your database connection in the .env file.
   Generate a new application key: php artisan key:generate.
4. Run migrations:
    php artisan migrate
5. Start the development server:
    php artisan serve


## API Endpoints    
###################################################################
## Authentication
POST
http://127.0.0.1:8000/api/auth/register
Query Params
name : carlos
email : carlosbrathwaite01@gmail.com
password : 12345678

POST
http://127.0.0.1:8000/api/auth/login
Query Params
email : carlosbrathwaite.rad@gmail.com
password : 12345678

## Interactions
POST
http://127.0.0.1:8000/api/interactions
Request Headers
Authorization : Bearer 7|Co6NZjAqbQS2vUJKvWOOkejd2fYlY5SOCFs6ZhDF6d3456bf
Query Params
label : Subscribe Button
 type : button

GET
http://127.0.0.1:8000/api/interactions
Request Headers
Authorization : Bearer 7|Co6NZjAqbQS2vUJKvWOOkejd2fYlY5SOCFs6ZhDF6d3456bf

PUT
http://127.0.0.1:8000/api/interactions/1
Request Headers
Authorization : Bearer 7|Co6NZjAqbQS2vUJKvWOOkejd2fYlY5SOCFs6ZhDF6d3456bf
Query Params
type : button
label : login button

Delete
http://127.0.0.1:8000/api/interactions/2
Request Headers
Authorization : Bearer 7|Co6NZjAqbQS2vUJKvWOOkejd2fYlY5SOCFs6ZhDF6d3456bf