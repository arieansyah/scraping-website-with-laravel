# How To Use
Here [DEMO](http://febelio.herokuapp.com/)
Paste this URL in form 
```sh
https://fabelio.com/cp/ruang-makan/meja-makan/2-seater-meja-makan.html
```

# How To Install
- Make sure you have installed a web server (Apache / Nginx), PHP, PostgreSQL or MySQL
- Clone this Repository
- Create database
- Run Commend via terminal or CMD `composer install`
- Make file .env via terminal or CMD `cp env.example .env`
- Update Configuration database in file `.env`
- Run `php artisan key:generate`
- Run `php artisan config:cache`
- Run `php artisan migrate`
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
