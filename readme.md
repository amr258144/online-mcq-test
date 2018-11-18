<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Step 1
Clone the Repository

## Step 2
If on mac/ubuntu, give permission to storage/* and bootstrap directory, enter this command
<br />
<code>sudo chmod -R 777 storage/*</code>
<br />
<code>sudo chmod -R 777 bootstrap/</code>
<br />
<code>sudo chmod -R 777 .env</code>

## Step 3
<code>php artisan key:generate</code>

## Step 4
Create database and write database name in .env file with all database credentials like host, root, password, DB name.

## Step 5
<p>Migrate the database</p>
<code>php artisan migrate</code>


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
