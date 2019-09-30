<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;
use Source\Models\Address;

$user = new User();
$user->first_name = "Basilio";
$user->last_name = "Mariano";
$user->genre = "M";
$user->save();

////$addr = new Address();
//$addr->add($user, "Nome da rua", "1230");
//$addr->save();

var_dump($user);
