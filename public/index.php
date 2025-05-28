<?php
require_once '../app/Classes/VehicleManager.php';

$manager = new VehicleManager('', '', 0, '');
$vehicles = $manager->getVehicles();

echo "Vehicle List:<br><br>";
echo '<a href="views/add.php">Add New Vehicle</a><br><br>';

foreach ($vehicles as $key => $vehicle) {
    $index = $key + 1;
    echo "ID: " . $index . "<br>";
    echo "Name: " . $vehicle['name'] . "<br>";
    echo "Type: " . $vehicle['type'] . "<br>";
    echo "Price: " . $vehicle['price'] . "<br>";
    echo "Image: " . $vehicle['image'] . "<br>";
    echo '<a href="views/edit.php?id=' . $vehicle['id'] . '">Edit</a> | ';
    echo '<a href="views/delete.php?id=' . $vehicle['id'] . '">Delete</a><br>';
    echo "==============================<br>";
}
?>
