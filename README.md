# Project Setup Guide

This guide will help you set up the Laravel backend and React frontend for the project. Follow the steps below to get your development environment up and running.

## Prerequisites

Ensure you have the following installed on your machine:

- PHP >= 7.3
- Composer
- Node.js >= 12.x
- npm or yarn
- MySQL or any other supported database

## Backend (Laravel)

1. **Clone the Backend Repository**

    ```sh
    git clone https://github.com/Ratified/Creating-APIs-with-Laravel-Consuming-With-React-JS.git backend
    cd backend
    ```

2. **Install Dependencies**

    ```sh
    composer install
    ```

3. **Environment Configuration**

    Copy the `.env.example` to `.env` and update the necessary environment variables.

    ```sh
    cp .env.example .env
    ```

    Update the `.env` file to match your database configuration:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=apitesting
    DB_USERNAME=root
    DB_PASSWORD=
    ```

4. **Generate Application Key**

    ```sh
    php artisan key:generate
    ```

5. **Run Migrations and Seed Database**

    ```sh
    php artisan migrate --seed
    ```

6. **Start the Development Server**

    ```sh
    php artisan serve
    ```

    The Laravel backend should now be running at `http://127.0.0.1:8000`.

## Frontend (React)

1. **Clone the Frontend Repository**

    ```sh
    git clone https://github.com/Ratified/Creating-APIs-with-Laravel-Consuming-With-React-JS.git frontend
    cd frontend
    ```

2. **Install Dependencies**

    If you are using npm:

    ```sh
    npm install
    ```

    If you are using yarn:

    ```sh
    yarn install
    ```

3. **Start the Development Server**

    If you are using npm:

    ```sh
    npm start
    ```

    If you are using yarn:

    ```sh
    yarn start
    ```

    The React frontend should now be running at `http://localhost:3000`.

## Accessing the Application

- **Backend**: `http://127.0.0.1:8000`
- **Frontend**: `http://localhost:3000`

Ensure both servers are running simultaneously. The frontend will make API requests to the backend to fetch and display data.

## Seeding the Database

If you need to reseed the database at any point, you can run the following command from the `backend` directory:

```sh
php artisan migrate:fresh --seed
