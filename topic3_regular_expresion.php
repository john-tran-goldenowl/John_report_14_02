<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regex</title>
</head>

<body>
    <form action="topic3_regular_expresion.php" method="post">
       <label for=""> Email</label> <input type="text" name="email"><br><br>
       <label for=""> Password</label><input type="text" name="phone"><br><br>
        <input type="submit" name="submit"><br><br>
    </form>
    <?php
    if(isset($_POST['submit'])&&$_POST['submit']){
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        vailidateEmail($email);
        vailidatePhone( $phone);

    }
    function vailidateEmail($email){
    $patternEmail = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i';
        if (!preg_match($patternEmail,$email)){
            echo "invalid email <br>";
        }else {
            echo "valid email <br>";
        }
    }
    function vailidatePhone($phone){
        $patternPhone = '/([3|5|784|0|8|9])+([0-9]{8})\b/';
        if (!preg_match($patternPhone,$phone)){
            echo "invalid phone";
        }else {
            echo "valid phone";
        }
    }
    ?>
</body>

</html>