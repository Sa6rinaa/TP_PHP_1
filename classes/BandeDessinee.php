<?php

class BandeDessinee extends Livre {
    private $dessinateur;
    private $serie;
    private $tome;
    
public function __construct ($dessinateur,$serie, $tome) {
    parent::__construct($id,$titre,$auteur,$anneePublication, $disponible);
    $this->dessinateur=$dessinateur;
    $this->serie=$serie;
    $this->tome=$tome;
}  
    // Getters
    public function getDessinateur(){
    return $this->dessinateur;}

    public function getSerie(){
        return $this->serie;}

     public function getTome(){
         return $this->tome;
        }
   
        // Setters
    public function setDessinateur($dessinateur){
        $this->dessinateur=$dessinateur;
    }
    public function setSerie($serie){
        $this->serie=$serie;
    }
    public function setTome($tome){
        $this->tome=$tome;
    }
    
    // Méthodes
    public function estDansLaMemeSerieQue($autreBD){
        echo "c'est dans la même série avec";
    }
}

