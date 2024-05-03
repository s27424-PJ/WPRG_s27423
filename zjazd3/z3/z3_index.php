<!DOCTYPE html>
<html>
<head>
    <title>Formularz obsługi katalogów</title>
</head>
<body>

<h2>Formularz obsługi katalogów</h2>

<form method="POST">
    <label for="path">Ścieżka:</label>
    <input type="text" id="path" name="path" required><br><br>
    
    <label for="directory">Nazwa katalogu:</label>
    <input type="text" id="directory" name="directory" required><br><br>
    
    <label for="operation">Operacja:</label>
    <select id="operation" name="operation">
        <option value="read">Odczyt</option>
        <option value="delete">Usuwanie</option>
        <option value="create">Tworzenie</option>
    </select><br><br>
    
    <button type="submit" name="submit">Wykonaj</button>
</form>

<?php
if(isset($_POST['submit'])) {
    include 'functions.php';
    
    $path = $_POST['path'];
    $directory = $_POST['directory'];
    $operation = $_POST['operation'];
    
    // Wywołanie funkcji w zależności od wybranej operacji
    if($operation == 'read') {
        echo "<h3>Lista elementów w katalogu:</h3>";
        readDirectory($path, $directory);
    } elseif($operation == 'delete') {
        echo "<h3>Usunięto katalog:</h3>";
        deleteDirectory($path, $directory);
    } elseif($operation == 'create') {
        echo "<h3>Stworzono katalog:</h3>";
        createDirectory($path, $directory);
    }
}
?>

</body>
</html>
