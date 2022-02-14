<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
.container {
    width: 30%;
    margin: 0 auto;
    padding-top: 100px;
}
</style>

<body>
    <?php
        
        if(isset($_POST['submit'])&&$_POST['submit']){
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];  
            $repassword = $_POST['repassword'];  
            if(!vailidateEmail($email)){
                $error['email'] = "Invalid Email";
              }
            if(!vailidatePhone($phone)){
                $error['phone'] = "Invalid Phone";
              } 
            if(!validatePassword( $password)){
                $error['password'] = "Invalid Password";
                
              }else{
                if($password != $repassword){
                    $error['repassword'] = "Incorrect Repassword";
                }
              }
         
         
        }
        function vailidateEmail($email){
            $patternEmail = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i';
                if (!preg_match($patternEmail,$email)){
                    return false;
                }else {
                    return true;
                }
            }
            function vailidatePhone($phone){
                $patternPhone = '/([3|5|784|0|8|9])+([0-9]{8})\b/';
                if (!preg_match($patternPhone,$phone)){
                    return false;
                }else {
                    return true;
                }
            }
         function validatePassword($password){
             $patternPassword = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/';
             if (!preg_match($patternPassword,$password)){
                return false;
            }else {
                return true;
            }
 
         }            
        ?>
    <div class="container">
        <h3>Validation Form</h3>
        <form action="topic4_formValidation.php" method="Post" style="width:100%">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" name="email" placeholder="Email"
                    aria-describedby="basic-addon1">
            </div>
                <?php if(isset($error['email'])) echo '<p class="text-danger">'.$error['email'].'</p>' ?>   
          

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" name="username" placeholder="Username"
                    aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="password" class="form-control" name="password" placeholder="Password"
                    aria-describedby="basic-addon1">
            </div>
            <?php if(isset($error['password'])) echo '<p class="text-danger">'.$error['password'].'</p>' ?>   


         
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="password" class="form-control" name="repassword" placeholder="Re Password"
                    aria-describedby="basic-addon1">
            </div>
            <?php if(isset($error['repassword'])) echo '<p class="text-danger">'.$error['repassword'].'</p>' ?>   
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" name="phone" placeholder="Phone number"
                    aria-describedby="basic-addon1">
            </div>
            <?php if(isset($error['phone'])) echo '<p class="text-danger">'.$error['phone'].'</p>' ?>   
           <br><input type="submit" name="submit" class="btn btn-primary">
        </form>
    </div>
</body>

</html>