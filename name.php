<?php
session_start();
$_SESSION['history'][] = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="lastname.php" method='post'>
        <label for="">Enter Name</label>
        <input name='name' type="text">
        <button>send</button>
    </form>
</body>
</html>