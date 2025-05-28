<?php
require_once '../../app/Classes/VehicleManager.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $manager = new VehicleManager($_POST['name'], $_POST['type'], $_POST['price'], $_POST['image']);
    $manager->addVehicle($manager->getDetails());
    header('Location: ../index.php');
    exit;
}
?>

<form method="post">
    <input name="name" placeholder="Vehicle Name" required><br>
    <input name="type" placeholder="Type" required><br>
    <input name="price" type="number" placeholder="Price" required><br>
    <input name="image" placeholder="Image Filename"><br>
    <button type="submit">Add Vehicle</button>
</form>
