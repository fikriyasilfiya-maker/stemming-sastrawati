<?php
require_once __DIR__ . '/../vendor/autoload.php';

$stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
$stemmer = $stemmerFactory->createStemmer();

$kalimat = 'Perekonomian Indonesia sedang pesat berkembang';
echo $stemmer->stem($kalimat) . "\n";
// ekonomi indonesia sedang pesat kembang

echo $stemmer->stem('Mereka meniru-nirukan gaya penyanyi itu') . "\n";
// mereka tiru gaya nyanyi itu
