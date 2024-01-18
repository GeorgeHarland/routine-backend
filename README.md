# RoutineCheck

## About

The backend for a todo/habit app built with php/laravel and MySQL, with PHPUnit tests
Frontend is here: https://github.com/GeorgeHarland/RTHG-todo-frontend

## Setup

#### Prerequisites
- Install php version 8.0.2 or higher (https://www.php.net/). Windows uses may want to use a web installer like XAMPP.
- Install composer (https://getcomposer.org/)
- Install MySQL (http://mysql.com/)

#### Installation
- Clone the repository using either http `git clone https://github.com/GeorgeHarland/RTHG-todo-backend` or ssh `git clone https://github.com/GeorgeHarland/RTHG-todo-backend`
- Install composer dependencies using `composer install`
- generate app key using `php artisan key:generate`

#### Local database setup
- Set up the database tables with `php artisan migrate`

#### Local server
- Start the server with `php artisan serve`
- Set up the timer schedules with `php artisan schedule:run >> /dev/null 2>&1`
- Follow the frontend setup instructions here to access the site: https://github.com/GeorgeHarland/RTHG-todo-frontend


## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
