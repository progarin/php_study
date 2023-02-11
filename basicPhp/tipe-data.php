<?php
echo "Tipe Data Integer : ";
var_dump(1_000_000);

echo "Tipe Data Boolean Benar : ";
var_dump(true);

echo "Tipe Data Boolean Salah : ";
var_dump(false);

echo "Tipe Data String : ";
var_dump("Garin Ravindra\n");


// 4 Cara Membuat Tipe Data String

// single quote
echo 'Saya Adalah Garin';
echo "\n";
// Double quote
echo "Saya Adalah Farhan\n\n";

// Heredoc
echo <<<PHP
php:Hypertext Preprocessor atau hanya PHP saja, adalah bahasa skrip dengan 
fungsi umum yang
terutama digunakan untuk pengembangan web. 
Bahasa ensi PHP sekarang diproduksi oleh The PHP Group.\n\n
PHP;

// nowdoc
echo <<<'PHP'
php:Hypertext Preprocessor atau hanya PHP saja, adalah bahasa
skrip dengan fungsi umum yang terutama digunakan untuk pengembangan web. 
Bahasa ini awalnya dibuat oleh seorangThe PHP Group.
PHP;
