<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARZ</title>
</head>
<body>
    <form method="post">
        <input type="text" name="imie">Imie
        <input type="text" name="nazwisko">Nazwisko
        <input type="submit" value="Kliknij"> 
    </form>
<?php
$link = new mysqli("localhost", "root", "", "agencja_towarzyska");
mysqli_set_charset($link,"utf8");
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$query = "INSERT INTO klient (imie,nazwisko) VALUES('$imie', '$nazwisko')";

$myQuery = mysqli_query($link,$query);

if($myQuery==false){
    echo('query non sens');
}
else{
    echo('wpis udany');
}

?>
</body>
</html>
