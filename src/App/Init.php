<?php

namespace App;

use App\Init\Bootstrap;

/**
 * Class Init
 * @package App
 */
class Init extends Bootstrap
{

    /**
     * Método para setar rotas, baseadas em controlers e actions
     */
    protected function initRoutes()
    {
      $ar['home'] = ['route' => '/', 'controller' => 'index', 'action' => 'index'];

       



        $this->setRoutes($ar);
    }



}
