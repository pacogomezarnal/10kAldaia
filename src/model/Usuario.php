<?php
namespace Geeks\model;
use Geeks\model\DB as DB;

class Usuario extends DB
{
    private $email;
    private $nombre;
    private $apellidos;
    private $edad;
    private $sexo;
    private $club;
    private $pass;
    private $role;
    private $checkFields=["email","nombre","apellidos","edad","sexo","club"];
    private $checkRegisterFields=["email","nombre","apellidos","edad","sexo","pass1","pass2"];

    public function __construct(){
    }

    public function checkRegisterForm($formData){
        $error= null;
        foreach ($this->checkRegisterFields as $campoCheck) {
            $campoPost=$formData[$campoCheck];
            if(strlen($campoPost)==0){
                $error="Campo $campoCheck esta vacio";
                break;
            }
        }
        var_dump($error);
        return $error;
    }

}