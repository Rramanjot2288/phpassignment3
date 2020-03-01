/*-------/ramanjotkaur-------*/
/*------/8622288-------*/
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $username = $age = $password = $city = $country = '';
    $username =strip_tags($_POST['username']);//sanitizing inputs
    $age =strip_tags($_POST['age']);//sanitizing inputs
    $password =strip_tags($_POST['password']);//sanitizing inputs
    $city =strip_tags($_POST['city']);//sanitizing inputs
    $country =strip_tags($_POST['country']);//sanitizing inputs
    if(empty($username)){
        echo "please enter username ";
    }
    else{
        $user = $username;
    }

if(empty($age)){
    echo "please enter age";
}
else{

    if (filter_var($age,FILTER_VALIDATE_INT) >= 18 && filter_var($age,FILTER_VALIDATE_INT) <=120)//validating age with filter function
    {
        $ag = $age;
    }
    else{
        echo "please enter age between 18 and 120";
    }
}

    if(empty($password)){
        echo "please enter password";
    }
    else //validating password with expression
     {
        if(preg_match('^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$',$password))// https://stackoverflow.com/questions/19605150/regex-for-password-must-contain-at-least-eight-characters-at-least-one-number-a
    
        {
            $pass =$password;
        }
        else
        {
            echo "password should be 6 character long";
        }
    }
    if(empty($city)){
        echo "please enter city ";
    }
    else{
        $ct = $city;
    }
    if(empty($country)){
        echo "please enter country ";
    }
    else{
        $cny = $country;
    }
    if(isset($user) && isset($pass) && isset($ag) && isset($ct) && isset($cny))// checking if all form varibles are set or empty
    
    {
        echo "success";
    }
}



?>
