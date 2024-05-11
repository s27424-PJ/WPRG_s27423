<!DOCTYPE html>
<html>
<head>
</head>
<body>
<ul>
    <?php
    $filePath = 'adresy.txt';
    if (file_exists($filePath)) {
        $file = fopen($filePath, 'r');

    
        while (($line = fgets($file)) !== false) {
    
            $parts = explode(';', $line);

    
            if (count($parts) === 2) {
            
                $url = trim($parts[0]);
                $description = trim($parts[1]);


                echo "<li><a href='$url'>$description</a></li>";
            }
        }

      
        fclose($file);
    } else {
        echo "Plik z danymi nie istnieje.";
    }
    ?>
</ul>

</body>
</html>
