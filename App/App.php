<?php

namespace App;

class App
{

    public function __construct()
    {
        /*
         * Constantes do sistema
         */
        define('APP_HOST'       , $_SERVER['HTTP_HOST']);
        define('PATH'           , realpath('./'));
        define('TITLE'          , "Calculator App");
    }

    public function run()
    {
				require_once PATH . '/App/Views/' . "index" . '.php';
    }
}
