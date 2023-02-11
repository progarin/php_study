<?php

require_once "data/namespaceClass.php";

$name1 = new \Data\One\Name();
$name2 = new \Data\Two\Name();

echo \Data\Three\yourName("Lila Amalia");
echo \Data\Three\APPLICATION;
