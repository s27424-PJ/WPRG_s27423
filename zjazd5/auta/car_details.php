<?php
$mysqli = new mysqli("localhost", "root", "", "samochody");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$id = $_GET['id'];
$result = $mysqli->query("SELECT * FROM samochody WHERE id = $id");
$car = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Szczegóły Samochodu</title>
</head>
<body>
    <table>
        <tr>
            <td><a href="index.php">Strona główna</a></td>
            <td><a href="all_cars.php">Wszystkie samochody</a></td>
            <td><a href="add_car.php">Dodaj samochód</a></td>
        </tr>
    </table>

    <h1>Szczegóły samochodu</h1>
    <p><strong>ID:</strong> <?php echo $car['id']; ?></p>
    <p><strong>Marka:</strong> <?php echo $car['marka']; ?></p>
    <p><strong>Model:</strong> <?php echo $car['model']; ?></p>
    <p><strong>Cena:</strong> <?php echo $car['cena']; ?></p>
    <p><strong>Rok:</strong> <?php echo $car['rok']; ?></p>
    <p><strong>Opis:</strong> <?php echo $car['opis']; ?></p>

    <a href="index.php">Powrót do strony głównej</a>
</body>
</html>

<?php
$mysqli->close();
?>
