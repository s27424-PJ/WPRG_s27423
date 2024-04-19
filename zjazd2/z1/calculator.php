<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h2>Result</h2>
    <?php
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                echo "Addition Result: $result";
                break;
            case 'sub':
                $result = $num1 - $num2;
                echo "Subtraction Result: $result";
                break;
            case 'mul':
                $result = $num1 * $num2;
                echo "Multiplication Result: $result";
                break;
            case 'div':
                if ($num2 == 0) {
                    echo "Cannot divide by zero.";
                } else {
                    $result = $num1 / $num2;
                    echo "Division Result: $result";
                }
                break;
            default:
                echo "Invalid operation.";
                break;
        }
    ?>
</body>
</html>
