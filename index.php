<?php

$jour = date('l');
 $message = "bonjour";
 
 switch ("") {
   case "lundi":
     echo "Aujourd'hui c'est " . $jour . ": " . $message . "<br><br>";
     break;
   case "mardi":
     echo "Aujourd'hui c'est " . $jour . ": " . $message . "<br><br>";
     break;
   case "mercredi":
     echo "Aujourd'hui c'est " . $jour . ": " . $message . "<br><br>";
     break;
     case "mercredi":
       echo "Aujourd'hui c'est " . $jour . ": " . $message . "<br><br>";
       break;
     default ;
     echo "Aujourd'hui c'est " . $jour . ": " . $message . "<br><br>";
 }
 
 $note=15;
 
 switch (""){
   case $note<=18 :
    echo  "Note: " . $note ."/20 - Appréciation:  Excellent (A+)";
    break;
    case  $note<=16 :
    echo "Note: " . $note ."/20 - Appréciation:  Très bien (A)";
    break;
    case  $note<=14 :
     echo "Note: " . $note . "/20 - Appréciation:  Bien";
    break;
    case  $note<=12 :
     echo "Note: " . $note . "/20 - Appréciation: Assez bien";
     break;
     default ;
     echo "Note: " . $note . "/20 - Appréciation: Passable";
 
 
 }

$age=15;

switch ("") {
  case $age<=18:
    echo "vous êtes grand";
    break;
   case $age<=15:
      echo "vous êtes moyen";
      break;
   case $age<=10:
      echo "vous êtes petit ";
   break;  
}

