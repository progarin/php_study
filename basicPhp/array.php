<?php
// $arrayAink = [1, 2, 3, "Garin Ravindra", 5];

// var_dump($arrayAink);

$hobby = ["Main bola", "Volley", "Badminton", "Basket", "Berlari"];

$hobby[1] = "Futsal";

$hobby[] = "Catur";

var_dump($hobby[5]);

unset($hobby[0]);

var_dump($hobby);
