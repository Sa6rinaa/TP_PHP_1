<?php
// Définition d'une classe Personne
class Personne {
    // Propriétés (attributs)
    private $nom;
    private $prenom;
    private $age;
    
    public function __construct(string $nom , string $prenom ,int $age){
      $this->nom=$nom;
      $this->prenom=$prenom;
      $this->age=$age;
  }

    
    // Getters (accesseurs)
    
public function getNom() {
  return $this->nom;
}
public function getPrenom() {
  return $this->prenom;
}

public function getAge() {
  return $this->age;
}

    // Setters (mutateurs)

    public function setNom($nom){
      $this->nom= $nom;
   }
    public function setPrenom($prenom){
      $this->prenom= $prenom;
   }
   public function setAge($age){
    $this->age= $age;
 }

    // Méthodes

    // public function sePresenter()
    public function sePresenter(){
      echo "Nom : {$this->nom},  Prenom: {$this->prenom}, Age: {$this->age}"; 
    }
    
    // public function estMajeur()

    public function estMajeur() {
      return $this-> age>= 18;
  }
}
// Utilisation de la classe
$personne1 = new Personne("Sab", "Prt", 19);

$personne1->sePresenter();

// Modification des propriétés

$personne1->setNom("sabrina");
$personne1->setAge(17);
$personne1->sePresenter();