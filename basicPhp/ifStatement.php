<?php
$nilaiUjian = 100;
$absen = 90;

// PAKAI KURAWAL
if ($nilaiUjian >= 75 && $absen >= 90) {
    echo "Dapat Nilai A" . PHP_EOL;
} else if ($nilaiUjian >= 75 && $absen >= 80) {
    echo "Dapat Nilai B" . PHP_EOL;
} else if ($nilaiUjian >= 75 && $absen >= 70) {
    echo "Dapat Nilai C" . PHP_EOL;
} else if ($nilaiUjian >= 75 && $absen >= 60) {
    echo  "Dapat Nilai D" . PHP_EOL;
} else {
    echo "Dapat Nilai E" . PHP_EOL;
}

// PAKAI COLON - Jika Ada Else IF Maka Gunakan elseif - Wajib Gunakan ENDIF; DIAKHIR STATMENT
if ($nilaiUjian >= 75 && $absen >= 90) :
    echo "Dapat Nilai A" . PHP_EOL;
elseif ($nilaiUjian >= 75 && $absen >= 80) :
    echo "Dapat Nilai B" . PHP_EOL;
elseif ($nilaiUjian >= 75 && $absen >= 70) :
    echo "Dapat Nilai C" . PHP_EOL;
elseif ($nilaiUjian >= 75 && $absen >= 60) :
    echo  "Dapat Nilai D" . PHP_EOL;
else :
    echo "Dapat Nilai E" . PHP_EOL;
endif;



$nilaiGarin = 50;
if ($nilaiGarin <= 80) {
    echo "NILAI KAMU ADALAH B" . PHP_EOL;
} elseif ($nilaiGarin <= 50) {
    echo "NILAI KAMU ADALAH C" . PHP_EOL;
} else {
    echo "NILAI KAMU E" . PHP_EOL;
}
