# Interaction Solution

This project is a solution for managing interactions on websites. It provides APIs for interaction management, user registration, authentication, and data retrieval.

## Technologies Used

- Laravel: [Version X.X](https://laravel.com/) - PHP framework for building the backend.
- MySQL: [Version X.X](https://www.mysql.com/) - Database system used for storing data.
- Heroku: [Link to Heroku](https://www.heroku.com/) - Deployment platform.

## Installation

To run this project locally, follow these steps:

1. Clone the repository:
   ```bash
   git clone <repository-url>
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
## Authentication
    POST /api/auth/register: Register a new user.
    POST /api/auth/login: Login and get an authentication token.

## Interactions

    POST /api/interactions: Create a new interaction.
    GET /api/interactions/{id}: Get details of a specific interaction.
    PUT /api/interactions/{id}: Update an existing interaction.
    DELETE /api/interactions/{id}: Delete an interaction.