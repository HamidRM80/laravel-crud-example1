# laravel-crud-example

This project provides an example of Post CRUD operations in Laravel. It includes basic functionality for creating, reading, updating, and deleting posts.

## Installation

1. first clone project via:

```bash
git clone https://github.com/HamidRM80/laravel-crud-example1.git
```
1. in directory of project run these commands:

```bash
comoposer install
copy .env.example .env
php artisan key:generate
```
2. in your .env file change database info to this:
```php
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=sail
DB_PASSWORD=password
```
3. Optionally, publish the configuration file if you want to change any defaults:
```bash
php artisan vendor:publish --provider="Hamidreza\LaravelCrudExample\PostServiceProvider"
```
if you run above code, config and views and migrations will be published

2. then add below code to bootstrap/providers.php:
```php
return [
    App\Providers\AppServiceProvider::class,
    Hamidreza\LaravelCrudExample\PostServiceProvider::class,
];
```

7. add below code to app/providers/AppServiceProvider.php file in boot function and import it's Schema class from Facades:
```php
public function boot(): void
    {
        Schema::defaultStringLength(191);
    }
```
8. run below commands for create migrations:
```bash
./vendor/bin/sail artisan migrate
```

5. run your project by docker in project directory:
```bash
./vendor/bin/sail up
```
6. connect to your mysql database

9. you can use project by this url: post/index
