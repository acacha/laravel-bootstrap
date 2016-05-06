# laravel-bootstrap
A Laravel Bootstrap Service Provider

# Installation 

Install Laravel 5 package with:

 $ composer require "acacha/laravel-bootstrap:~0.1.3"
 
Then add BootstrapServiceProvider to providers in config/app.php:

 Acacha\LaravelBootstrap\Providers\BootstrapServiceProvider::class
 
And publish config file (config/bootstrap.php file) with:

 $ php artisan vendor:publish --force --provider="Acacha\LaravelBootstrap\Providers\BootstrapServiceProvider"
 
