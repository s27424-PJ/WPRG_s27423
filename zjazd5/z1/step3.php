<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['persons'] = $_POST['persons'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Podsumowanie</title>
</head>
<body>
    <h1>Podsumowanie wszystkich zebranych danych</h1>
    <h2>Dane ogólne</h2>
    <p><strong>Numer karty:</strong> <?php echo htmlspecialchars($_SESSION['card_number']); ?></p>
    <p><strong>Imię i nazwisko zamawiającego:</strong> <?php echo htmlspecialchars($_SESSION['customer_name']); ?></p>
    <p><strong>Ilość osób:</strong> <?php echo htmlspecialchars($_SESSION['number_of_people']); ?></p>

    <h2>Dane osób</h2>
    <?php foreach ($_SESSION['persons'] as $index => $person): ?>
        <h3>Osoba <?php echo $index; ?></h3>
        <p><strong>Imię:</strong> <?php echo htmlspecialchars($person['name']); ?></p>
        <p><strong>Wiek:</strong> <?php echo htmlspecialchars($person['age']); ?></p>
    <?php endforeach; ?>
</body>
</html>
