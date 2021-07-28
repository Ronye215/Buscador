<?php

class Libros  {
    private $Titulo;
    private $Autor;
    private $Biblioteca;

    
    public function __construct($Titulo, $Autor, $Biblioteca) {
     $this-> Titulo = $Titulo;
     $this-> Autor = $Autor;
     $this-> Biblioteca = $Biblioteca;   
    }
    public function getTitulo() {
        return $this-> Titulo;
    }
    public function getAutor() {
        return $this-> Autor;
    }
    public function getBiblioteca() {
        return $this-> Biblioteca;
    }

}
