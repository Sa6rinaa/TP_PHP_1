<?php
class Livre {
    protected $id;
    protected $titre;
    protected $auteur;
    protected $anneePublication;
    protected $disponible;

public function __construct($id,$titre,$auteur,$anneePublication, $disponible){
    $this->id=$id;
    $this->titre=$titre;
    $this->auteur=$auteur;
    $this->anneepublication=$anneePublication;
    $this->disponible=$disponible;
}

    // Getters
    public function getId() {
        return $this->id;
    }
    public function getTitre() {
        return $this->titre;
    }
    public function getAuteur() {
            return $this->auteur;
        }
        public function getAnneePublication() {
            return $this->anneepublication;
        }
        public function getDisponible() {
            return $this->disponible;
        }
    // Setters
    public function setId($id) {
        $this->id = $id;
    }
    public function setTitre($titre) {
        $this->titre = $titre;
    }
    public function setAuteur($auteur) {
        $this->auteur = $auteur;
    }
    public function setAnneePublication($anneePublication) {
        $this->anneepublication = $anneePublication;
    }
    public function setDisponible($disponible) {
        $this->disponible = $disponible;
    }
    // Méthodes
    public function getInfos() {
    echo " Id : {$this->id} , Titre : {$this->titre} , Auteur : {$this->auteur} , Année de publication : {$this->anneepublication} , Disponible : {$this->disponible} <br>";
    }
    
    public function emprunter() {
        return "C'est emprunter !";
    }
    
    public function retourner() {
        return "A retourner";
}

    }
 $livre = new Livre(45, "Pasdetitre", "pas d'auteur", 1987, "Non");

 $livre->getInfos();
 echo $livre->retourner();
 
