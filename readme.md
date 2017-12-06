

## Logging Recent Views & Implementing a View Counter in Laravel

This repository contains code discussed in the blog post here: https://phpbits.in/logging-recent-views-implementing-view-counter-laravel/

## Installation
If you want to run this demo project, follow these steps:

1. Clone this repo.
2. Copy contents of `.env.example` to a `.env` file.
3. Update `DB_DATABASE` , `DB_USERNAME` and `DB_PASSWORD` with your database details.
4. Run `php artisan migrate` to migrate the database.
5. Run `php artisan key:generate` to generate `APP_KEY`.
6. You're all good to go. Run `php artisan serve` and the app should be up and running.