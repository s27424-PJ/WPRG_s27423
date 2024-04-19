<!DOCTYPE html>
<html>
<head>
</head>
<body>

    <form action="calculator.php" method="post">
        <label for="num1">Number 1:</label>
        <input type="number" id="num1" name="num1" required><br><br>
        
        <label for="num2">Number 2:</label>
        <input type="number" id="num2" name="num2" required><br><br>
        
        <label for="operation">Operation:</label>
        <select name="operation" id="operation" required>
            <option value="add">Addition</option>
            <option value="sub">Subtraction</option>
            <option value="mul">Multiplication</option>
            <option value="div">Division</option>
        </select><br><br>
        
        <input type="submit" value="Calculate">
    </form>
</body>
</html>
