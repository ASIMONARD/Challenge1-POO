<?php

require 'Car.php';
require 'Bicycle.php';

$car = new Car('rouge', 5, 'essence');
$car->setNbWheels(4);
$car->setCurrentSpeed(130);
$car->setEnergyLevel(100);

echo "Ma voiture est de couleur " . $car->getColor() . ", " . $car->getNbWheels() . " roues motrices" . ", " . $car->getNbSeats() . " sièges <br>";
echo "Niveau de carburant : " . $car->getEnergyLevel() . "% du réservoir <br>";
echo $car->start() . "<br>";
echo $car->forward() . "<br>";
echo "Je peux rouler jusqu'à roule à " . " " . $car->getCurrentSpeed() . " km/h sur les autoroutes <br>";
echo "Tant qu'il y a du carbuant dans le réservoir, " . $car->brake() . '<br><br>';

$car2 = new Car('noir', 6, 'diesel');
$car2->setNbWheels(4);
$car2->setCurrentSpeed(130);
$car2->setEnergyLevel(100);

echo "Ma voiture est de couleur " . $car2->getColor() . ", " . $car2->getNbWheels() . " roues motrices" . ", " . $car2->getNbSeats() . " sièges <br>";
echo "Niveau de carburant : " . $car2->getEnergyLevel() . "% du réservoir <br>";
echo $car2->start() . "<br>";
echo $car2->forward() . "<br>";
echo "Je peux rouler jusqu'à roule à " . " " . $car2->getCurrentSpeed() . " km/h sur les autoroutes <br>";
echo "Tant qu'il y a du carbuant dans le réservoir, " . $car2->brake() . '<br><br>';

$bike = new Bicycle();
$bike->setColor('Yellow');
$bike->setCurrentSpeed(20);

{
    echo 'La couleur de mon vélo est : ' . $bike->getColor() . '. Sa vitesse est de ' . ' ' . $bike->getCurrentSpeed() . ' km/h <br>';
    echo $bike->forward() . '<br>';
    echo $bike->brake() . '<br>';
}

?>