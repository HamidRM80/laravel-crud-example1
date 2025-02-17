# laravel-crud-example

This project provides an example of Post CRUD operations in Laravel. It includes basic functionality for creating, reading, updating, and deleting posts.

## Installation

1. first clone project via:

```bash
git clone https://github.com/HamidRM80/laravel-crud-example1.git
```
2. in directory of project run these commands:

```bash
comoposer install
copy .env.example .env
php artisan key:generate
```
3. in your .env file change database info to this:
```php
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=sail
DB_PASSWORD=password
```
4. Optionally, publish the configuration file if you want to change any defaults:
```bash
php artisan vendor:publish --provider="Hamidreza\LaravelCrudExample\PostServiceProvider"
```
if you run above code, config and views and migrations will be published

5. then add below code to bootstrap/providers.php:
```php
return [
    App\Providers\AppServiceProvider::class,
    Hamidreza\LaravelCrudExample\PostServiceProvider::class,
];
```

6. add below code to app/providers/AppServiceProvider.php file in boot function and import it's Schema class from Facades:
```php
public function boot(): void
    {
        Schema::defaultStringLength(191);
    }
```
7. run your project by docker in project directory:
```bash
./vendor/bin/sail up
```

8. run below commands for create migrations:
```bash
./vendor/bin/sail artisan migrate
```

9. connect to your mysql database

10. you can use project by this url: post/index
