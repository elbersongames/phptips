<?php

use Source\Support\Email;

require __DIR__ . "/vendor/autoload.php";

$email = new Email();
//$email->add(
//    "Ola Mundo, esse é meu Segundo E-mail",
//    "<h1>Estou apenas testando!</h1>Espero que tenha dado certo!",
//    "title",
//    "email"
////)->send();
//)->attach("files/w.png", "Luiza Meu BB")->send();

if (!$email->error()) {
    var_dump(true);
} else {
    echo $email->error()->getMessage();
}
