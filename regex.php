/*-------/ramanjotkaur-------*/
/*------/8622288-------*/
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if($_SERVER['REQUEST_METHOD'] =='POST'){


    $hexa = $_POST['hexa'];
    if(preg_match("^[0-9A-F]+$^",$hexa))
    {
        echo "it is valid format";
    }
    else{
        echo "it is not valid";
    }
}
    ?>
    <form method="post" action="">
    Hex :<input type ="text" name ="hexa"maxlength="2" value="<?php if(isset($hexa)) echo $hexa;?>">
    <input type="submit" name="submit" value ="send">
    </form>
</body>
</html>