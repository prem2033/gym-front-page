<?php
$loginflag=false;
$accountexist=false;
if(isset($_POST['submit'])){
 $name=$_POST["name"];
 $email=$_POST["email"];
 $phone=$_POST["phone"];
 $password=$_POST["password"];
 !include 'connection.php';
//query
$sql = "INSERT INTO login_details (Name, email, phone, password) VALUES ('$name', '$email', '$phone', '$password')";

if ($conn->query($sql) === TRUE) {
    $loginflag=true; //if query executed successfully
  } else {
    $accountexist=true; //if query execution got error
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/indexlogin.css">
    <script src="../js/signin.js"></script>
</head>
<body>
    <section id="dimension">
    <div id="login-page">
        <h1> WELCOME</h1>
        <img src="../images/logo.jpg" alt="home logo"> 
        <?php 
           if($accountexist && isset($_POST['submit'])){
               echo '<div id="error-container">
               <span id="erorr-msg">Account Exist!!</span>
           </div>';
           unset($_POST['submit']);
           }
           if($loginflag && isset($_POST['submit'])){
            header("location: mainpage.html");
            unset($_POST['submit']);
           }
        ?>        
        <form  name="myForm" action="" method="POST"  onsubmit="return validateForm()"> 
            <div class="form-element">
                <label>Name</label>
                <input id="name" type="text" name="name" placeholder="Name">
            </div>
            <div class="form-element">
                <label>Email</label>
                <input id="mail" type="text" name="email" placeholder="Email">
            </div>
            <div class="form-element">
                <label>Phone</label>
                <input id="phone" type="text" name="phone" placeholder="Phone number">
            </div>
            <div class="form-element">
                <label>Password</label>
                <input id="password" type="password" name="password" placeholder="Password">
            </div>
            <div class="form-button">
                <input type="submit" value="SignUp" name="submit">
            </div>
        </form>
            <div id="no-account-msg">
                <p>Already have an account?<a href="index.php">login</a></p>
            </div>
    </div>
</section>
</body>
</html>