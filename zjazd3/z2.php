<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h2>Obliczanie silni</h2>
    <form method="post">
        <label for="argument">Podaj argument:</label>
        <input type="number" id="argument" name="argument" required>
        <button type="submit">Oblicz</button>
    </form>

    <?php

    function silnia_rekurencyjnie($n) {
        if ($n == 0 || $n == 1) {
            return 1;
        } else {
            return $n * silnia_rekurencyjnie($n - 1);
        }
    }

    function silnia_nierekurencyjnie($n) {
        $silnia = 1;
        for ($i = 1; $i <= $n; $i++) {
            $silnia *= $i;
        }
        return $silnia;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $argument = isset($_POST['argument']) ? intval($_POST['argument']) : 5;

        $start_rekurencyjna = microtime(true);
        $silnia_rekurencyjnie = silnia_rekurencyjnie($argument);
        $end_rekurencyjna = microtime(true);
        $czas_rekurencyjna = $end_rekurencyjna - $start_rekurencyjna;

        $start_nierekurencyjna = microtime(true);
        $silnia_nierekurencyjnie = silnia_nierekurencyjnie($argument);
        $end_nierekurencyjna = microtime(true);
        $czas_nierekurencyjna = $end_nierekurencyjna - $start_nierekurencyjna;

        echo "<h3>Wyniki obliczeń:</h3>";
        echo "<p>Argument: $argument</p>";
        echo "<p>Rekurencyjnie: $silnia_rekurencyjnie</p>";
        echo "<p>Nierekurencyjnie: $silnia_nierekurencyjnie</p>";
        echo "<p>Czas działania funkcji rekurencyjnej: $czas_rekurencyjna sekund</p>";
        echo "<p>Czas działania funkcji nierekurencyjnej: $czas_nierekurencyjna sekund</p>";

        if ($czas_rekurencyjna < $czas_nierekurencyjna) {
            echo "<p>Funkcja rekurencyjna działała szybciej o " . ($czas_nierekurencyjna - $czas_rekurencyjna) . " sekund.</p>";
        } elseif ($czas_rekurencyjna > $czas_nierekurencyjna) {
            echo "<p>Funkcja nierekurencyjna działała szybciej o " . ($czas_rekurencyjna - $czas_nierekurencyjna) . " sekund.</p>";
        } else {
            echo "<p>Obie funkcje działały równie szybko.</p>";
        }
    }
    ?>
</body>
</html>
