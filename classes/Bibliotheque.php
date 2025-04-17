<?php 

class Bibliotheque {
    private $pdo;
    private $livres = [];
    
    public function __construct($configFile,$pdo,$livres) {
        // Charger la configuration de la base de données
        $config = require $configFile;
    
        
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false
];

        // Connexion à la base de données
        try {
            $pdo = new PDO($dsn,$options);      
            echo "Connexion à la base de données réussie.<br>";

        } 
        catch (PDOException $e) {
            die("Erreur de connexion à la base de données: " . $e->getMessage());
        }
    }
    public function ajouterLivre($livre) {
        $type = getType($livre);}
          // Déterminer le type de livre
        

 // Préparer l'insertion dans la base de données
        // $sql = "INSERT INTO livres (titre, auteur, disponible ) VALUES (?, ?, ?)";
        // $stmt = $pdo->prepare($sql);
        // $stmt->execute(['titre' => $livre->getTitre(),'auteur' => $livre->getAuteur(), 'disponible' => $livre->disponible() ? 1 : 0,]);
        
//     public function emprunterLivre($id) {
// Utiliser le foreach
//             }
//         }
//     }

//     public function retournerLivre($id) {
               
                // Mettre à jour la base de données
//             }
//         }
//     }
// public function getLivresDisponibles() {
//         $livresDisponibles;
        
//         //Utiliser le foreach
//     }
    
    // public function getLivresParAuteur($auteur) {
    //     $livresAuteur;
    //Utiliser le foreach
    }
    
    // public function chargerLivres() {
    //     $sql = "SELECT * FROM livres";
        
       //Utiliser le foreach
            // Créer l'objet correspondant selon le type
          //  Utiliser le switch case
//         }
        
//         echo "Chargement de " . count($this->livres) . " livres terminé.<br>";
//     }
// }
// 
