<!DOCTYPE html>
<html>
<head>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">
    Choose a text file: <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Reverse Order" name="submit">
</form>

<?php
if(isset($_POST["submit"])) {
    $file = $_FILES['fileToUpload']['tmp_name'];

    if(empty($file)) {
        echo "Select a text file.";
    } else {
        $lines = file($file);
        $reversedLines = array_reverse($lines);
        $outputFile = fopen('output.txt', 'w');

        foreach ($reversedLines as $line) {
            fwrite($outputFile, $line);
        }

        fclose($outputFile);

        echo "Lines order has been reversed. <a href='output.txt'>Download file</a>";
    }
}
?>

</body>
</html>
