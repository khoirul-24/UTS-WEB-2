<?php

$file = fopen("tugas.txt", "a");
fclose($file);

$content = fopen("tugas.txt", "r");
while ($line = fgets($content)){
    echo $line . "<br>";
}
fclose($content);
?>