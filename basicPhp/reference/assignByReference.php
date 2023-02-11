<?php
// ANALOGI NYA DIA ITU SEPERTI 2 VARIABLE DENGAN VALUE YANG SAMA DAN KETIKA KITA RUBAH VALUE NYA MAKA 2 VALUE VARIBLE INI SAMA
$name = "Garin Ravindra";
$finalName = &$name;

$finalName = "Farhan kebab";

echo $finalName;
