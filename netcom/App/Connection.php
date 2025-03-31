<?php
namespace App;

class Connection{
    public static function getDb(){
        try{
            $conn = new \PDO(
                "mysql:host=localhost;dbname=mysite19_site;charset=utf8",
                "mysite19_eduardo",
                "2muy2kpxkv"
            );
            return $conn;
        }catch(\PDOException $e){

        }
    }
}
?>