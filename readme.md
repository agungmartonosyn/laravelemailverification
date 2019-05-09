<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Demo 
[Demo](https://laravelemailverification.herokuapp.com/) or click https://laravelemailverification.herokuapp.com/

## Thanks

* [Heroku](https://www.heroku.com)
* [Laravel](https://www.laravel.com)
* [Datatables](https://www.datatables.net)
* [Gmail](https://www.gmail.com)


## Laravel Email Verifiaction Build

* [Laravel 5.8](https://laravel.com/docs/5.8)
* [Datatables](https://www.datatables.net)

## Installation

- Clone the repository with `git clone`
- Copy `.env.example` file to `.env` and edit database credentials there
- Run `composer install`
- Run `php artisan key:generate`
- Run `php artisan migrate`
- Setting `MAIL_DRIVER=smtp`
- Setting `MAIL_HOST=smtp.gmail.com`
- Setting `MAIL_PORT=587`
- Setting `MAIL_USERNAME=youremail`
- Setting `MAIL_PASSWORD=yourpassword`
- Setting `MAIL_ENCRYPTION=tls`
- Setting `Config->mail.php`
