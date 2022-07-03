<?php

include 'config.php';

if(isset($_POST['submit'])){

    
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
    

    $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND 
    password = '$pass' ") or die('query failed');

    if(mysqli_num_rows($select) > 0){
       $row = mysqli_fetch_assoc($select);
       echo $_SESSION['user_id'] = $row['id'];
       header('location:home.php');
    }else{
        $message[] = 'incorrect password or email!';
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css" type="text/css">
</head>
<body>
    
<?php
if(isset($message)){
    foreach($message as $message){
        echo '<div class="message" onclick="this.remove();">'.$message.'</div>' ;
    }
}
?>

<div class="containers">
    <div class="loader"></div>
</div>

<div class="form-container">
    <form action="" method="post">
        <h3>Login now</h3>
        <input type="email" name="email" placeholder="enter email" class="box" required>
        <input type="password" name="password" placeholder="enter password" class="box" required>
        <input type="submit" name="submit" class="btn" value="Login now"> 
        <p>don't have an account? <a href="register.php">Register now</a></p>  
    </form>
</div>

<script src="login.js"></script>
</body>
</html>