<?php
require_once 'Faker-master/src/autoload.php';

$faker = Faker\Factory::create();

echo $faker->name;
echo"<br>";
echo $faker->address;
echo"<br>";
?>