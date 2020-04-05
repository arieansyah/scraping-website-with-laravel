# How To Use
Here [DEMO](http://febelio.herokuapp.com/)
Paste this URL in form 
```sh
https://fabelio.com/cp/ruang-makan/meja-makan/2-seater-meja-makan.html
```

# How To Install
- Make sure you have installed a web server (Apache / Nginx), PHP, PostgreSQL or MySQL, php7.4-sqlite
- Clone this Repository
- Create database
- Run Commend via terminal or CMD `composer install`
- Make file .env via terminal or CMD `cp env.example .env`
- Update Configuration database in file `.env`
- Created file in `storage` with name `database.sqlite`
- Run `php artisan key:generate`
- Run `php artisan config:cache`
- Run `php artisan migrate`
- Run `php artisan migrate --database=sqlite` for test
- Run `php artisan serve`

Now we can look at our composer.json file, and the library is already installed in there:
```json
// ./composer.json
"require": {
        "php": "^7.2.5",
        "fideloper/proxy": "^4.2",
        "fruitcake/laravel-cors": "^1.0",
        "guzzlehttp/guzzle": "^6.3",
        "kub-at/php-simple-html-dom-parser": "^1.9",
        "laravel/framework": "^7.0",
        "laravel/tinker": "^2.0"
    },
```
You can read the docs of this library in [php-simple-html-dom-parser](https://github.com/Kub-AT/php-simple-html-dom-parser)


# How To Running Testing
You can read the docs of this [Here](https://laravel.com/docs/7.x/database-testing#extending-factories)
Change config database in `config/database.php` like this
```sh
'sqlite' => [
            'driver' => 'sqlite',
            'url' => env('DATABASE_URL'),
            'database' => storage_path('database.sqlite'),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
        ],
```
Make test
```sh
php artisan make:test ProductTest
```
Running test
```sh
php artisan test
//result like this
PASS  Feature\ProductTest
✓ get all product
✓ show product

Tests:  2 passed
Time:   1.14s
```

