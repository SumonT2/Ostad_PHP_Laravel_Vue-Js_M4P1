<?php
require_once '../../app/Classes/VehicleManager.php';
$manager = new VehicleManager('', '', 0, '');
$vehicles = $manager->getVehicles();
$id = $_GET['id'];
$vehicle = null;
foreach ($vehicles as $v) {
    if ($v['id'] === $id) {
        $vehicle = $v;
        break;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'name' => $_POST['name'],
        'type' => $_POST['type'],
        'price' => $_POST['price'],
        'image' => $_POST['image']
    ];
    $manager->editVehicle($id, $data);
    header('Location: ../index.php');
    exit;
}
?>

<form method="post">
    <input name="name" value="<?= $vehicle['name'] ?>" required><br>
    <input name="type" value="<?= $vehicle['type'] ?>" required><br>
    <input name="price" type="number" value="<?= $vehicle['price'] ?>" required><br>
    <input name="image" value="<?= $vehicle['image'] ?>"><br>
    <button type="submit">Update Vehicle</button>
</form>
