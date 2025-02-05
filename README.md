Edge Laravel Project

Overview

Edge Laravel Project is a web-based task management system built using Laravel and PHP. It allows users to create, manage, and track tasks efficiently.

Features

User authentication (login & sign-up)

Task creation, editing, and deletion

Task status updates (Pending, In Progress, Completed)

User-friendly UI with Bootstrap/Tailwind CSS

Database integration using MySQL

Installation

Prerequisites

PHP (>= 8.0)

Composer

MySQL / MariaDB

Node.js & npm (for frontend assets)

Steps

Clone the repository:

git clone https://github.com/raiyan9238/Edge_Laravel_Project.git
cd Edge_Laravel_Project

Install dependencies:

composer install
npm install && npm run dev

Set up environment variables:

cp .env.example .env
php artisan key:generate

Configure database in .env and run migrations:

php artisan migrate

Start the development server:

php artisan serve

Usage

Visit http://127.0.0.1:8000 in your browser.

Register or log in to manage tasks.

Contributing

Pull requests are welcome. Please open an issue first to discuss any major changes.

License

This project is licensed under the MIT License.
