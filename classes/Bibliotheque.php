<?php 

class Bibliotheque {
    private $pdo;
    private $livres = [];
    private $host = 'localhost';
    private $dbname = 'bibliotheque';
    private $username = 'root';
    private $password ='';
    private $charset ='utf8mb4';
   
    
    public function __construct($livres) {
        $this->livres=$livres;
       
    
        
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false
];

        // Connexion à la base de données
        try {
            $pdo = new PDO($dsn,$options,$password,$username);      
            echo "Connexion à la base de données réussie.<br>";

        } 
        catch (PDOException $e) {
            die("Erreur de connexion à la base de données: " . $e->getMessage());
        }
        
    public function ajouterLivre($livre) {
        $type = getInfos($livre);}
          // Déterminer le type de livre
        }
    }
 //Préparer l'insertion dans la base de données
 $sql = "INSERT INTO livres (auteur, titre, disponible) VALUES (?,?,?)";
 $stmt = $pdo->prepare($sql);
 $stmt->execute(["222","4545", 38 ]);

      



    
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
