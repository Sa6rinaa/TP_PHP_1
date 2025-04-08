<?php
$fruits = ["pomme", "banane", "orange", "fraise", "kiwi"];

foreach ($fruits as $fruit) {
  echo "$fruit <br>";}

  $personne = [
    "nom" => "Dupont",
    "prenom" => "Jean",
    "age" => 30,
    "ville" => "Paris"
  ];

  foreach ($personne as $personnes) {
    echo "$personnes <br>";}

$etudiants = [
    ["nom" => "Martin", "note" => 15],
    ["nom" => "Durand", "note" => 12],
    ["nom" => "Petit", "note" => 18]
];

foreach ($etudiants as $etudiant) {
  echo  ("$etudiant[note] <br> "." $etudiant[nom]<br>");}
 ?>



