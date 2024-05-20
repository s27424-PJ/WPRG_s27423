<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['card_number'] = $_POST['card_number'];
    $_SESSION['customer_name'] = $_POST['customer_name'];
    $_SESSION['number_of_people'] = $_POST['number_of_people'];
}
$number_of_people = $_SESSION['number_of_people'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dane osób</title>
</head>
<body>
    <h1>Podaj dane osób</h1>
    <form action="step3.php" method="post">
        <?php for ($i = 1; $i <= $number_of_people; $i++): ?>
            <h2>Osoba <?php echo $i; ?></h2>
            <label for="person_<?php echo $i; ?>_name">Imię:</label>
            <input type="text" id="person_<?php echo $i; ?>_name" name="persons[<?php echo $i; ?>][name]" required><br>

            <label for="person_<?php echo $i; ?>_age">Wiek:</label>
            <input type="number" id="person_<?php echo $i; ?>_age" name="persons[<?php echo $i; ?>][age]" required><br>
        <?php endfor; ?>
        <input type="submit" value="Zapisz i dalej">
    </form>
</body>
</html>
