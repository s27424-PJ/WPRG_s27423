<?php
$visitThreshold = 5;
$visitInterval = 1000;
$currentTime = time();

if (isset($_COOKIE['last_visit'])) {
    $lastVisit = $_COOKIE['last_visit'];
} else {
    $lastVisit = 0;
}

if (isset($_COOKIE['visit_count'])) {
    $visitCount = $_COOKIE['visit_count'];
} else {
    $visitCount = 0;
}

if ($currentTime - $lastVisit >= $visitInterval) {
    $visitCount++;
    setcookie('last_visit', $currentTime, $currentTime + 3600 * 24 * 30);
    setcookie('visit_count', $visitCount, $currentTime + 3600 * 24 * 30);
}
?>
<!DOCTYPE html>
<html>

<body>
    <p>Odwiedziłeś naszą stronę <?php echo $visitCount; ?> razy.</p>
    <?php
    if ($visitCount >= $visitThreshold) {
        echo "<p>Dziękujemy za regularne odwiedzanie naszej strony</p>";
    }
    ?>
</body>
</html>
