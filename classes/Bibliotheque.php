<?php 

class Bibliotheque {
    private $pdo;
    private $livres = [];
    
    public function __construct($configFile,$pdo,$livres) {
        // Charger la configuration de la base de données
        $config = require $configFile;
       
        // Connexion à la base de données
        try {
            echo "Connexion à la base de données réussie.<br>";
        } catch (PDOException $e) {
        }
    }
    public function ajouterLivre($livre) {
        
        // Déterminer le type de livre
        
        // Préparer l'insertion dans la base de données
    
    public function emprunterLivre($id) {
Utiliser le foreach
            }
        }
    }
    
    public function retournerLivre($id) {
               
                // Mettre à jour la base de données
            }
        }
    }
public function getLivresDisponibles() {
        $livresDisponibles;
        
        //Utiliser le foreach
    }
    
    public function getLivresParAuteur($auteur) {
        $livresAuteur;
    //Utiliser le foreach
    }
    
    public function chargerLivres() {
        $sql = "SELECT * FROM livres";
        
       //Utiliser le foreach
            // Créer l'objet correspondant selon le type
          //  Utiliser le switch case
        }
        
        echo "Chargement de " . count($this->livres) . " livres terminé.<br>";
    }
}
?>
