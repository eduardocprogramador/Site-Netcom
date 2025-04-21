<?php
namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;

class IndexController extends Action{
    
    public function index(){
        $this->render('index');
    }
    public function contato(){
        $this->render('contato');
    }
    public function mensagem(){
        $this->render('mensagem');
    }
    public function sobre_nos(){
        $this->render('sobre_nos');
    }
    public function inscricao(){
        $this->render('inscricao');
    }
    public function programacao(){
        $this->render('programacao');
    }
    public function programacao_nr(){
        $this->render('programacao_nr');
    }
    public function programacao_parauapebas(){
        $this->render('programacao_pa');
    }
    public function curso(){
        $this->render('curso');
    }
    public function nr(){
        $this->render('nr');
    }
    public function estrutura(){
        $this->render('estrutura');
    }
    public function galeria_fotos(){
        $this->render('galeria');
    }
    public function localizacao(){
        $this->render('localizacao');
    }
    public function enviar_msg(){
        ob_start();
        require 'processa_envio_msg.php';
        header('Location: /mensagem?mensagem_enviada=1');
        exit();
    }
    public function inscrever(){
        ob_start();
        require 'processa_envio.php';
        header('Location: /inscricao?mensagem_enviada=1');
        exit();
    }
    
}
?>