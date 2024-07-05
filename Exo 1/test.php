<?php
echo"Test"
require('ClasseVoiture.php');

$voiture1 = new Voiture("Toyota", 20, "ABC123");
$voiture2 = new Voiture("Honda", 0, "XYZ789"); 
$voiture3 = new Voiture("Ford", 10, "DEF456");

echo $voiture1->getMarque();
$voitures = array($voiture1, $voiture2, $voiture3);

// Parcourir les voitures
foreach ($voitures as $voiture) {
    echo "Marque de la voiture : " . $voiture->getMarque() . "<br>";
    echo "Quantité de carburant : " . $voiture->getCarburant() . " litres<br>";
    echo "Numéro de la voiture : " . $voiture->getNumero() . "<br>";
    $voiture->estVide();
    $voiture->demarer();
    echo "<br>";
}
?>