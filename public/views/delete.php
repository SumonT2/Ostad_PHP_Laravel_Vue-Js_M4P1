<?php
require_once '../../app/Classes/VehicleManager.php';
$manager = new VehicleManager('', '', 0, '');
$id = $_GET['id'];
$manager->deleteVehicle($id);
header('Location: ../index.php');
exit;
