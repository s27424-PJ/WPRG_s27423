<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dane ogólne</title>
</head>
<body>
    <h1>Podaj dane ogólne</h1>
    <form action="step2.php" method="post">
        <label for="card_number">Numer karty:</label>
        <input type="text" id="card_number" name="card_number" required><br>

        <label for="customer_name">Imię i nazwisko zamawiającego:</label>
        <input type="text" id="customer_name" name="customer_name" required><br>

        <label for="number_of_people">Ilość osób:</label>
        <input type="number" id="number_of_people" name="number_of_people" required><br>

        <input type="submit" value="Dalej">
    </form>
</body>
</html>
