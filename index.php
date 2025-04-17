<?php

$host = "localhost";
$dbname = "tp_test";
$username = "root";
$password = "";
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false
];

try {
    $pdo = new PDO($dsn, $username, $password, $options);
    echo "Connexion à la base de données réussie ! </br></br>";


  
$sql = "INSERT INTO user (email, name, age) VALUES (?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute(["sabrina@gmail.com","Sabrina", 38 ]);
echo "Nouvel utilisateur inséré avec l'ID: " . $pdo->lastInsertId() . "<br><br>";


echo "Utilisateurs de plus de 30 ans:<br>";
$sql = "SELECT * FROM user WHERE age > ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([30]);
foreach ($stmt as $stmts) {
    echo "Nom: " . $stmts["name"] . ", Âge: " . $stmts["age"] . "<br>";
}

$sql = "UPDATE user SET age = 30 WHERE age = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([38]);
echo "Nombre d'utilisateurs mis à jour: " . $stmt->rowCount() . "<br>";

$sql = "DELETE FROM user WHERE age = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([38]);
echo "Nombre d'utilisateurs supprimés: " . $stmt->rowCount() . "<br>";


} catch (PDOException $e) {
    
    echo "Erreur de connexion à la base de données: " . $e->getMessage() . "<br>";
}










