<?php
$filePath = 'licznik.txt';

if (!file_exists($filePath)) {
    file_put_contents($filePath, '1');
}

$currentCount = intval(file_get_contents($filePath));
echo "Liczba odwiedzin witryny: $currentCount";
$currentCount++;
file_put_contents($filePath, $currentCount);

?>
