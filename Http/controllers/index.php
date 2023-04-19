<?php

// view("index.view.php", [
//     'heading' => 'Home',
// ]);

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$cars = $db->query('select * from cars')->get();

view("cars/index.view.php", [
    'heading' => 'Cars',
    'cars' => $cars
]);