<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
// $in = join(',', array_fill(0, count($_SESSION('car')), '?'));
// $cars = $db->query('select * from cars')->get();
// $arr = [1,2,3]; $_SESSION(car)
// dd(array_values($_SESSION['car']));
$arr = array_values($_SESSION['car']);
$in  = str_repeat('?,', count($arr) - 1) . '?';
$sql = "SELECT * FROM table WHERE column IN ($in)";
$cars = $db->query("select * from cars where id IN ($in)", $arr)->get();

view("dashboard/index.view.php", [
    'heading' => 'Dashboard',
    'cars' => $cars
]);