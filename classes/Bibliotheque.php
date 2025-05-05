<?php 

class Bibliotheque {
    private $pdo;
    private $livres = [];
    private $host = 'localhost';
    private $dbname = 'bibliotheque';
    private $username = 'root';
    private $password ='';
    private $charset ='utf8mb4';
   
    
    public function __construct($livres=[]) {
        $this->livres=$livres;
       
    
        
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false
];

        // Connexion à la base de données
        try {
            $this->pdo = new PDO($dsn, $this->username, $this->password, $options);
            echo "Connexion à la base de données réussie.<br>";
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données: " . $e->getMessage());
        }
    }

  
    public function ajouterLivre($livre) {
        // Exemple simple, il faudrait adapter selon la structure de votre objet $livre
        $auteur = $livre['auteur'] ?? 'Inconnu';
        $titre = $livre['titre'] ?? 'Sans titre';
        $disponible = $livre['disponible'] ?? 1;
     // Déterminer le type de livre
       
 //Préparer l'insertion dans la base de données
 $sql = "INSERT INTO livres (auteur, titre, disponible) VALUES (?, ?, ?)";
 $stmt = $this->pdo->prepare($sql);
 $stmt->execute([$auteur, $titre, $disponible]);
}
    


public function emprunterLivre($id) {
    foreach ($this->livres as &$livre) {
        if ($livre['id'] == $id && $livre['disponible']) {
            $livre['disponible'] = 0;
            $stmt = $this->pdo->prepare("UPDATE livres SET disponible = 0 WHERE id = ?");
            $stmt->execute([$id]);
            echo "Livre emprunté : " . $livre['titre'] . "<br>";
            return;
        }
    }
    echo "Livre indisponible ou introuvable.<br>";
}

public function retournerLivre($id) {
    foreach ($this->livres as &$livre) {
        if ($livre['id'] == $id && !$livre['disponible']) {
            $livre['disponible'] = 1;
            $stmt = $this->pdo->prepare("UPDATE livres SET disponible = 1 WHERE id = ?");
            $stmt->execute([$id]);
            echo "Livre retourné : " . $livre['titre'] . "<br>";
            return;
        }
    }
    echo "Livre déjà disponible ou introuvable.<br>";
}

public function getLivresDisponibles() {
    $livresDisponibles = [];
    foreach ($this->livres as $livre) {
        if ($livre['disponible']) {
            $livresDisponibles[] = $livre;
        }
    }
    return $livresDisponibles;
}
        
        //Utiliser le foreach
    
  
        public function getLivresParAuteur($auteur) {
            $livresAuteur = [];
            foreach ($this->livres as $livre) {
                if (strcasecmp($livre['auteur'], $auteur) == 0) {
                    $livresAuteur[] = $livre;
                }
            }
            return $livresAuteur;
        }
   // Utiliser le foreach

   public function chargerLivres() {
    $sql = "SELECT * FROM livres";
    $stmt = $this->pdo->query($sql);
    $rows = $stmt->fetchAll();
        
      // Utiliser le foreach
       //     Créer l'objet correspondant selon le type
        //   Utiliser le switch case
        
        foreach ($rows as $row) {
            switch ($row['type']) {
                case 'roman':
                case 'bd':
                case 'essai':
                default:
                    $this->livres[] = [
                        'id' => $row['id'],
                        'titre' => $row['titre'],
                        'auteur' => $row['auteur'],
                        'type' => $row['type'],
                        'disponible' => $row['disponible']
                    ];
                    break;
            }
        }

        echo "Chargement de " . count($this->livres) . " livres terminé.<br>";
    }
}
      

