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
include 'classes/Person.php';

$umut = new Person("Umut", 18, "M", true, 7.8);
$demirel = new Person("Demirel", 23, "M", false, 9.4);
$thamara = new Person("Thamara", 16, "F", true, 6.8);

echo $umut->getInfo()."<br>";
print_r($umut->saveInfo());
?>
<br>
</body>
</html>

