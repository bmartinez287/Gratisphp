<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);


$car = $db->query('select * from cars where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

if (!isset($_SESSION['car'])) {
    $_SESSION['car'] = [
        'id' => $car['id']
    ];
} else {
    if (!in_array($car['id'], $_SESSION['car'])) {
        array_push($_SESSION['car'], $car['id']);
    }
}

view("cars/show.view.php", [
    'heading' => 'Car',
    'car' => $car
]);
