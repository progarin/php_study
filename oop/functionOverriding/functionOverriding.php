<?php
require_once "manager.php";

#Manager Object
$manager = new Manager();

$manager->name = "Garin Ravindra";
$manager->sayGoodMorning("Budi Setiawan");

#VicePresident Object
$vp = new VicePresident();

$vp->name = "Budi Setiawan";
$vp->sayGoodMorning("Garin Ravindra");

// JADI KETIKA SEBUAH CHILD CLASS YANG MEMPUNYAI FUNCTION YANG SAMA LALU KITA MENG-EKSEKUSI NYA MAKA AKAN DITIMPA OLEH CHILD CLASS-NYA SEHINGGA FUNCTION DARI PARENTNYA TIDAK AKAN DI EKSEKUSI

// ==> JADI BOLEH MENDEKLARASI KAN ULANG FUNCTION YANG ADA DI PARENT CLASS-NYA <==