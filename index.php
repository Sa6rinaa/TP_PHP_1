<?php

require_once 'classes/Bibliotheque.php';


$biblio = new Bibliotheque();


$biblio->chargerLivres();


$livre1 = ['titre' => '12', 'auteur' => 'Victor Hugo', 'type' => 'roman', 'disponible' => 1];
$livre2 = ['titre' => '13', 'auteur' => 'Goscinny', 'type' => 'bd', 'disponible' => 1];
$livre3 = ['titre' => '14', 'auteur' => 'Goscinny', 'type' => 'bd', 'disponible' => 1];

$biblio->ajouterLivre($livre1);
$biblio->ajouterLivre($livre2);
$biblio->ajouterLivre($livre3);

$biblio->chargerLivres();


echo "<h2>Liste des livres :</h2>";
foreach ($biblio->getLivresDisponibles() as $livre) {
    echo "Titre : {$livre['titre']}, Auteur : {$livre['auteur']}, Type : {$livre['type']}, Disponible : " . ($livre['disponible'] ? 'Oui' : 'Non') . "<br>";
}


if ($livre2['auteur'] === $livre3['auteur']) {
    echo "<br>Les BD sont de la même série (auteur : {$livre2['auteur']})<br>";
}


echo "<br>--- Emprunt du livre avec ID 1 ---<br>";
$biblio->emprunterLivre(1);

echo "<br>--- Retour du livre avec ID 1 ---<br>";
$biblio->retournerLivre(1);


echo "<h2>Livres disponibles :</h2>";
$livresDispo = $biblio->getLivresDisponibles();
if (count($livresDispo) === 0) {
    echo "Aucun livre disponible pour le moment.<br>";
} else {
    foreach ($livresDispo as $livre) {
        echo "📘 {$livre['titre']} par {$livre['auteur']}<br>";
    }
}
?>
