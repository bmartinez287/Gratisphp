<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 1;

$car = $db->query('select * from cars where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

// authorize($note['user_id'] === $currentUserId);
if (!in_array($car['id'], $_SESSION['car']))
{
    array_push($_SESSION['car'],$car['id'] );
    // $_SESSION['car']['id']= $car['id']; 
}

dd(sizeof($_SESSION['car']));
// $_SESSION['car'] = [
//     'id' => $car['id']
// ];

view("cars/show.view.php", [
    'heading' => 'Car',
    'car' => $car
]);
