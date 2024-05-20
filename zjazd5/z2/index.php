<?php
$visitThreshold = 5;

if (isset($_COOKIE['visit_count'])) {
    $visitCount = $_COOKIE['visit_count'];
    $visitCount++;
} else {
    $visitCount = 1;
}

setcookie('visit_count', $visitCount, time() + 3600 * 24 * 30);

?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php
    echo "<p>Odwiedzenia $visitCount razy.</p>";
    if ($visitCount >= $visitThreshold) {
        echo "<p>Dziękujemy za regularne odwiedzanie naszej strony</p>";
    }
    ?>
</body>
</html>
