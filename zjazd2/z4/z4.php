<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <form method="post" action="">
        Enter a positive integer: <input type="text" name="number">
        <input type="submit" name="submit" value="Check">
    </form>

    <?php
    function isPrime($num, &$it)
    {
        if ($num <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($num); $i++) {
            $it++; 
            if ($num % $i === 0) {
                return false;
            }
        }
        return true;
    }

    $number = isset($_POST["number"]) ? $_POST["number"] : null;
    if (!is_numeric($number) || intval($number) != $number || $number <= 0) {
        echo "<p>The entered value is not a positive integer.</p>";
    } else {
        $it = 0; 
        if (isPrime($number, $it)) {
            echo "<p>The number $number is a prime number.</p>";
        } else {
            echo "<p>The number $number is not a prime number.</p>";
        }
        echo "<p>Number of iterations: $it</p>"; 
    }
    ?>

</body>
</html>
