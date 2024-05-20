<?php
$mysqli = new mysqli("localhost", "root", "", "samochody");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $marka = $_POST['marka'];
    $model = $_POST['model'];
    $cena = $_POST['cena'];
    $rok = $_POST['rok'];
    $opis = $_POST['opis'];

    $stmt = $mysqli->prepare("INSERT INTO samochody (marka, model, cena, rok, opis) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssdis", $marka, $model, $cena, $rok, $opis);

    if ($stmt->execute()) {
        echo "Samochód został dodany pomyślnie.";
    } else {
        echo "Błąd: " . $stmt->error;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dodaj Samochód</title>
</head>
<body>
    <table>
        <tr>
            <td><a href="index.php">Strona główna</a></td>
            <td><a href="all_cars.php">Wszystkie samochody</a></td>
            <td><a href="add_car.php">Dodaj samochód</a></td>
        </tr>
    </table>

    <h1>Dodaj nowy samochód</h1>
    <form action="add_car.php" method="post">
        <label for="marka">Marka:</label>
        <input type="text" id="marka" name="marka" required><br>

        <label for="model">Model:</label>
        <input type="text" id="model" name="model" required><br>

        <label for="cena">Cena:</label>
        <input type="text" id="cena" name="cena" required><br>

        <label for="rok">Rok:</label>
        <input type="text" id="rok" name="rok" required><br>

        <label for="opis">Opis:</label>
        <textarea id="opis" name="opis" required></textarea><br>

        <input type="submit" value="Dodaj">
    </form>
</body>
</html>

<?php
$mysqli->close();
?>
