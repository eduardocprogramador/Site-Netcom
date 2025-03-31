<?php

namespace App\Models;
use MF\Model\Model;

class Inscritos extends Model {
    private $id;
    private $nome;
    private $telefone;
    private $email;
    private $data;
    private $curso;
    
    public function __get($atributo){
        return $this->$atributo;
    }
    public function __set($atributo,$valor){
        $this->$atributo=$valor;
    }
    
    public function salvar(){
        $query='insert into inscritos(nome,telefone,email,data,curso) values(:nome,:telefone,:email,:data,:curso)';
        $stmt=$this->db->prepare($query);
        $stmt->bindValue(':nome',$this->__get('nome'));
        $stmt->bindValue(':telefone',$this->__get('telefone'));
        $stmt->bindValue(':email',$this->__get('email'));
        $stmt->bindValue(':data',$this->__get('data'));
        $stmt->bindValue(':curso',$this->__get('curso'));
        $stmt->execute();
        return $this;
    }
}

?>

