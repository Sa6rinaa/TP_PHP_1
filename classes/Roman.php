<?php


class Roman extends Livre {
    private $genre;
    private $nombrePages;

    public function __construct ($genre,$nombrePages ){
    parent::__construct($id,$titre,$auteur,$anneePublication, $disponible);
    $this->genre=$genre;
    $this->nombrepages=$nombrePages;
}
     // Getters
    public function getGenre(){
        return $this->genre;
    }
    public function getNombrePages(){
        return $this->nombrepages;
    }
    // Setters
    public function setGenre($genre) {
        $this->genre = $genre;
    }
    public function setNombrePages($nombrePages) {
        $this->nombrepage = $nombrePages;
    }

    // Méthodes
    public function getInfos() {
        parent::getInfos();
      echo " Genre : {$this->genre} , NombrePages : {$this->nombrepages}";
    }
    
    public function tempsLecture() {
        return "Nombre de temps estimé :";
    }
}
