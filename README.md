# laravel-bootstrap
A Laravel Bootstrap Service Provider

# Installation 

Install Laravel 5 package with:

```bash
 $ composer require "acacha/laravel-bootstrap:~0.1"
```
 
Then add BootstrapServiceProvider to providers in config/app.php:

```bash
 Acacha\LaravelBootstrap\Providers\BootstrapServiceProvider::class
```

And publish config file (config/bootstrap.php file) with:

```bash
 $ php artisan vendor:publish --force --provider="Acacha\LaravelBootstrap\Providers\BootstrapServiceProvider"
```
 
