<?php
$uang = 1_000_000;
$uangKamu = 10_000_000;

// PAKAI KURAWAL
switch ($uang) {
    case 100_000_000:
        echo "Anda Adalah Crazy Rich";
        break;
    case 10_000_000:
        echo "Anda Orang Kaya Biasa";
        break;
    case 1_000_000:
        echo "Anda Orang Menengah Kebawah";
        break;
    case 500_000:
        echo "Kasiaaaaaan......";
        break;
    default:
        echo "KERJA WOI";
        break;
}

echo "\n";

// PAKAI ENDSWITCH
switch ($uangKamu):
    case 100_000_000:
        echo "Anda Adalah Crazy Rich";
        break;
    case 10_000_000:
        echo "Anda Orang Kaya Biasa";
        break;
    case 1_000_000:
        echo "Anda Orang Menengah Kebawah";
        break;
    case 500_000:
        echo "Kasiaaaaaan......";
        break;
    default:
        echo "KERJA WOI";
        break;
endswitch;
