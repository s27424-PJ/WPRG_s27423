<!DOCTYPE html>
<html>
<head>
</head>
<body>

<h2>Podaj swoją datę urodzenia</h2>

<form method="GET">
    <label for="birthdate">Data urodzenia:</label>
    <input type="date" id="birthdate" name="birthdate">
    <button type="submit">Wyślij</button>
</form>

<?php

function dayOfWeek($data) {
    $dzien_tyg = date('N', strtotime($data));
    switch ($dzien_tyg) {
        case 1:
            return 'poniedziałek';
        case 2:
            return 'wtorek';
        case 3:
            return 'środa';
        case 4:
            return 'czwartek';
        case 5:
            return 'piątek';
        case 6:
            return 'sobota';
        case 7:
            return 'niedziela';
        default:
            return '';
    }
}

function calculateAge($birthdate) {
    if (strtotime($birthdate)) {
        $age = date('Y') - date('Y', strtotime($birthdate));
        if (date('md', strtotime($birthdate)) > date('md')) {
            $age--;
        }
        return $age;
    } else {
        return -1; 
    }
}

function daysUntilNextBirthday($birthdate) {
    $currentDate = date('Y-m-d');
    $birthdayThisYear = date('Y') . "-" . date('m-d', strtotime($birthdate));

    if ($birthdayThisYear < $currentDate) {
        $birthdayThisYear = date('Y', strtotime('+1 year')) . "-" . date('m-d', strtotime($birthdate));
    }
    $diff = strtotime($birthdayThisYear) - strtotime($currentDate);
    $days = floor($diff / (60 * 60 * 24));
    return $days;
}

if (isset($_GET['birthdate'])) {
    $birthdate = $_GET['birthdate'];
    if (strtotime($birthdate)) {
        echo "<h3>Informacje:</h3>";
        echo "Urodziłeś/aś się w dniu: " . dayOfWeek($birthdate) . "<br>";
        echo "Masz obecnie " . calculateAge($birthdate) . " lat<br>";
        echo "Do Twoich kolejnych urodzin pozostało " . daysUntilNextBirthday($birthdate) . " dni";
    } else {
        echo "<p>Podano niepoprawną datę urodzenia.</p>";
    }
}
?>

</body>
</html>
