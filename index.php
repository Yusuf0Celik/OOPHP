<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>brudda banks</title>
</head>
<body>
<?php
    include 'classes/File.php';

    $file = new File();
    $file->writing();
try {
    $file->reading();
} catch (Exception $e) {
    echo 'Exception: ' . $e->getMessage();
}
try {
    $result = $file->divide(5,2);
    echo "<br> Resultaat = $result";
} catch (DivisionByZeroError $e) {
    echo "<br>" . $e->getMessage();
}
?>
<br>
</body>
</html>

