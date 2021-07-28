<?php

class usuario  {
    private $Id;
    private $Usuario;
    private $Correo;
    private $Contraseña;
    
    public function __construct($Id, $Usuario, $Correo, $Contraseña) {
     $this-> Id = $Id;
     $this-> Usuario = $Usuario;
     $this-> Correo = $Correo;
     $this-> Contraseña = $Contraseña;      
    }
    public function getId() {
        return $this-> Id;
    }
    public function getUsuario() {
        return $this-> Usuario;
    }
    public function getCorreo() {
        return $this-> Correo;
    }
    public function getContraseña() {
        return $this-> Contraseña;
    }
    public function setUsuario($Usuario) {
        return $this-> Usuario = $Usuario;
    }
    public function setCorreo($Correo) {
        return $this-> Correo = $Correo;
    }
    public function setContraseña($Contraseña) {
        return $this-> Contraseña = $Contraseña;
    }

}
