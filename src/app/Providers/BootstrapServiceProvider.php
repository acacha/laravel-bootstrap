<?php

namespace Acacha\LaravelBootstrap\Providers;

use Illuminate\Support\ServiceProvider;
use Symfony\Component\Finder\Finder;

/**
 * Class BootstrapServiceProvider
 *
 * @package Acacha\LaravelBootstrap\Providers
 */
class BootstrapServiceProvider extends ServiceProvider
{

    /**
     * The main bootstrap file. The first file readed in config('bootstrap.directory')
     *
     */
    protected $file;

    /**
     * The bootstrap directory
     *
     */
    protected $directory;

    /**
     * Register Service provider
     *
     */
    public function register()
    {
        $this->directory = config('bootstrap.directory',app_path('bootstrap'));
        $this->file = config('bootstrap.file','bootstrap.php');
        if ( ! is_dir($this->directory))
        {
            return;
        }
        $files = $this->getAllPhpFiles();
        foreach ($files as $file)
        {
            require $file;
        }
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishConfigFile();
    }

    /**
     * get all PHP files in boostrap directory
     *
     * @return Finder
     */
    protected function getAllPhpFiles()
    {
        $files = Finder::create()->files()->name('/^.+\.php$/')->in($this->directory);
        $files->sort(function ($a)
        {
            return $a->getFilename() !== $this->file;
        });
        return $files;
    }

    /**
     * Publish config file
     */
    protected function publishConfigFile()
    {
        $this->publishes([
            dirname(__FILE__) . '/../../config/bootstrap.php' => config_path('bootstrap.php')
        ]);
    }

}