<?php
// Classe parente
class Vehicule {
    protected $marque;
    protected $modele;
    protected $annee;
    
    public function __construct($marque,$modele,$annee) {
      $this->marque=$marque;
      $this->modele=$modele;
      $this->annee=$annee;
    }
    
    public function getInfos() {
        echo "Marque : {$this->marque}  ,  Modele : {$this->modele}  ,    Année : {$this->annee}  ,";
    }
    
    public function demarrer() {
        return "Le véhicule démarre.";
    }
}

// Classe enfant qui hérite de Vehicule
class Voiture extends Vehicule {
    private $nombrePortes;
    private $typeCarburant;
    
    public function __construct($marque,$modele,$annee,$nombrePortes,$typeCarburant) {
        // Appel du constructeur parent
        parent::__construct($marque, $modele, $annee);
        
        // Initialisation des propriétés spécifiques
        $this->nombreportes = $nombrePortes;
        $this->typecarburant = $typeCarburant;
    }
    
    // Surcharge de la méthode getInfos()
    public function getInfos() {
      parent::getInfos();
      echo "  Nombre de portes :  {$this->nombreportes} , Type de carburant :  {$this->typecarburant} ";
    }
    
    // Méthode spécifique
    public function klaxonner() {
        return  "Klaxonne !"; 
    }
}

// Classe enfant qui hérite de Vehicule
class Moto extends Vehicule {
    private $cylindree;
    
    public function __construct($marque, $modele, $annee, $cylindree) {
        parent::__construct($marque, $modele, $annee);
        $this->cylindree = $cylindree;
    }

    public function getInfos() {
        parent::getInfos();
        echo "Cylindrée : {$this->cylindree} <br>";
    }

    public function klaxonner() {
        return "Klaxon de moto !";
    }
    
  
}

// Utilisation des classes
$voiture = new Voiture("Renault", "Clio", 2020, 5, "Essence");
$moto = new Moto("YHA", "777", 2021, "Essence");

$voiture->getInfos();


echo "<br>";
 echo $voiture->klaxonner();

echo "<br>";
echo $moto->klaxonner();

