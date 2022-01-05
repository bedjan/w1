<?php
$filename = 'obsah.php';

if (file_exists($filename)) {
copy("https://raw.githubusercontent.com/bedjan/w1/main/obsah.php", "obsah.php");
include('obsah.php');
} else {
copy("https://raw.githubusercontent.com/bedjan/w1/main/obsah.php", "obsah.php");
include('obsah.php');
}

$homepage = file_get_contents('http://cizinou.sweb.cz/mdwiki.html#index.md');
echo $homepage;
?>
