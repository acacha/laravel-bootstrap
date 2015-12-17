<?php

return [

    /*
    |--------------------------------------------------------------------------
    | The boostrap directory
    |--------------------------------------------------------------------------
    |
    | The folder from which BootstrapServiceProvider will execute/bootstrap/require
    | all files with .php extension
    |
    */

    'directory' => env('BOOTSTRAP_DIRECTORY', app_path('bootstrap')),


    /*
   |--------------------------------------------------------------------------
   | The main file in bootstrap directory
   |--------------------------------------------------------------------------
   |
   | This file will be the first to be executed/required. Other files will be
   | executed in alphabetical order
   |
   */

    'file' => env('BOOTSTRAP_MAIN_FILE', 'bootstrap.php')

];