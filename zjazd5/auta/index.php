<?php
$mysqli = new mysqli("localhost", "root", "", "samochody");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$result = $mysqli->query("SELECT * FROM samochody ORDER BY cena ASC LIMIT 5");

?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <table>
        <tr>
            <td><a href="index.php">Strona główna</a></td>
            <td><a href="all_cars.php">Wszystkie samochody</a></td>
            <td><a href="add_car.php">Dodaj samochód</a></td>
        </tr>
    </table>

    <h1>Pięć samochodów z najniższą ceną</h1>
    <table >
        <tr>
            <th>ID</th>
            <th>Marka</th>
            <th>Model</th>
            <th>Cena</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><a href="car_details.php?id=<?php echo $row['id']; ?>"><?php echo $row['id']; ?></a></td>
            <td><?php echo $row['marka']; ?></td>
            <td><?php echo $row['model']; ?></td>
            <td><?php echo $row['cena']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

<?php
$mysqli->close();
?>
