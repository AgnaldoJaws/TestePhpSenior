<?php

namespace App\Controllers;

use App\Di\Container;

/**
 * Class Index - Responsável pelo Login
 * @package App\Controllers
 */
class Index extends Action
{
    /**
     * @var string
     */
    protected $model = "usuarios";

    /**
     * Método / Action de Login
     */
    public function index()
    {
        $this->render("index");
    }

    
}
