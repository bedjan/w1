<?php
$homepage = file_get_contents('http://cizinou.sweb.cz/mdwiki.html#index.md');
echo $homepage;
copy("https://raw.githubusercontent.com/bedjan/w1/main/obsah.php", "obsah.php");
sleep(10);
include("obsah.php");
?>
