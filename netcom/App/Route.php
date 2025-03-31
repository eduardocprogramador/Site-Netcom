<?php
namespace App;
use MF\Init\Bootstrap;
use App\Connection;

class Route extends Bootstrap{

    protected function initRoutes(){
        $routes['home']=array(
            'route' => '/',
            'controller' => 'indexController',
            'action' => 'index'
        );
        $routes['mensagem']=array(
            'route' => '/mensagem',
            'controller' => 'indexController',
            'action' => 'mensagem'
        );
        $routes['contato']=array(
            'route' => '/contato',
            'controller' => 'indexController',
            'action' => 'contato'
        );
        $routes['sobre_nos']=array(
            'route' => '/sobre_nos',
            'controller' => 'indexController',
            'action' => 'sobre_nos'
        );
        $routes['enviar_msg']=array(
            'route' => '/enviar_msg',
            'controller' => 'indexController',
            'action' => 'enviar_msg'
        );
        $routes['inscricao']=array(
            'route' => '/inscricao',
            'controller' => 'indexController',
            'action' => 'inscricao'
        );
        $routes['inscrever']=array(
            'route' => '/inscrever',
            'controller' => 'indexController',
            'action' => 'inscrever'
        );
        $routes['programacao']=array(
            'route' => '/programacao',
            'controller' => 'indexController',
            'action' => 'programacao'
        );
        $routes['programacao_nr']=array(
            'route' => '/programacao_nr',
            'controller' => 'indexController',
            'action' => 'programacao_nr'
        );
        $routes['programacao_parauapebas']=array(
            'route' => '/programacao_parauapebas',
            'controller' => 'indexController',
            'action' => 'programacao_parauapebas'
        );
        $routes['curso']=array(
            'route' => '/curso',
            'controller' => 'indexController',
            'action' => 'curso'
        );
        $routes['nr']=array(
            'route' => '/nr',
            'controller' => 'indexController',
            'action' => 'nr'
        );
        $this->setRoutes($routes);
    }

}
?>