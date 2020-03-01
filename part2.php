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

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $string = $_POST['string'];//creating global variable
    if(preg_match('/^[\w]{2,10}(-|\.)[\w]{2,4}\.[\w]{2,10}[-][\w]{3,8}$/',$string))//checking preg match
{
    echo "its a valid string";
}
else{
    echo "its not a valid string";
}}
?>
    <form method="post" action ="">
    string: <input type ="text" name="string" value="<?php if(isset($string)){echo $string; }?>">
    
    <input type ="submit" name ="submit" value ="send">
    </form>
</body>
</html>