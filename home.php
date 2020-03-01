/*-------/ramanjotkaur-------*/
/*------/8622288-------*/
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
require('submit.php');

?>
<body>
    <form action="submit.php" method ="post">
    username:<input type ="text" name="username">
    age:<input type ="text" name="age">
    password:<input type ="text" name="password">
    city:<input type ="text" name="city">
    country:<input type ="text" name="country">
    <input type ="submit" name="submit">
    </form>
</body>
</html>