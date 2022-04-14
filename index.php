<?php  

require_once __DIR__. "/MotorWay.php";
require_once __DIR__. "/PedestrianWay.php";
require_once __DIR__. "/ResidentialWay.php";

require_once __DIR__. "/Skateboard.php";
require_once __DIR__. "/Bike.php";
require_once __DIR__. "/Car.php";
require_once __DIR__. "/Truck.php";

// ///////// Instanciation des différentes routes ///////////////
$motorWay = new MotorWay(4, 130);
$pedestrianWay = new PedestrianWay(1, 10);
$residentialWay = new ResidentialWay(2, 50);

// //////// Instanciation des différents véhicules /////////////
$Skateboard = new Skateboard("blue", 1);
$bike = new Bike("red", 1);
$truck = new Truck(100, "blue", 3, "essence");
$car = new Car("blue", 5, "essence");

// ////////// Ajout des véhicules avec la méthode abstraite pour motorWay ///////////////
$motorWay->addVehicle($car);
$motorWay->addVehicle($truck);
$motorWay->addVehicle($bike);
$motorWay->addVehicle($Skateboard);

// ///////// Affichage des véhicules du tableau currentVehicles /////////////
// var_dump($motorWay->getCurrentVehicles());



// ////////// Ajout des véhicules avec la méthode abstraite pour pedestrianWay ///////////////
$pedestrianWay->addVehicle($car);
$pedestrianWay->addVehicle($truck);
$pedestrianWay->addVehicle($bike);
$pedestrianWay->addVehicle($Skateboard);

// ///////// Affichage des véhicules du tableau currentVehicles /////////////
// var_dump($pedestrianWay->getCurrentVehicles());



// ////////// Ajout des véhicules avec la méthode abstraite pour residentialWay ///////////////
$residentialWay->addVehicle($car);
$residentialWay->addVehicle($truck);
$residentialWay->addVehicle($bike);
$residentialWay->addVehicle($Skateboard);

// ///////// Affichage des véhicules du tableau currentVehicles /////////////
// var_dump($residentialWay->getCurrentVehicles());


// test avec le try/catch l'erreur est capturée
try {
    echo $car->start();
} catch (Exception $e) {
    $car->setParkBrake(false);
}finally{
    echo "Ma voiture roule comme un donut";
}

// test après le try/catch le frein à main est maintenant égal à false
echo $car->start();



