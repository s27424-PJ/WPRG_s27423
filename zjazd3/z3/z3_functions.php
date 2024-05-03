<?php
function readDirectory($path, $directory) {
    $fullPath = $path . '/' . $directory;
    
    if(is_dir($fullPath)) {
        $elements = scandir($fullPath);
        foreach($elements as $element) {
            if($element != '.' && $element != '..') {
                echo $element . "<br>";
            }
        }
    } else {
        echo "Katalog nie istnieje.";
    }
}

function deleteDirectory($path, $directory) {
    $fullPath = $path . '/' . $directory;
    
    if(is_dir($fullPath)) {
        if(count(scandir($fullPath)) == 2) {
            rmdir($fullPath);
            echo "Katalog został usunięty.";
        } else {
            echo "Katalog nie jest pusty.";
        }
    } else {
        echo "Katalog nie istnieje.";
    }
}


function createDirectory($path, $directory) {
    $fullPath = $path . '/' . $directory;
    
    if(!is_dir($fullPath)) {
        mkdir($fullPath);
        echo "Katalog został stworzony.";
    } else {
        echo "Katalog już istnieje.";
    }
}
?>
