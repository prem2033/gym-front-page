<?php
$loginflag=false;
$passwordflag=false;
if(isset($_POST['submit'])){
$user_mail=$_POST["email"];
$user_password=$_POST["password"];
!include 'connection.php';
$sql = "SELECT password  FROM login_details WHERE email='$user_mail'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if ($num == 1){
    while($row=mysqli_fetch_assoc($result)){
        if ($user_password==$row['password']){ 
            $loginflag = true;
        } 
        else{
            $passwordflag=true;
        }
    }
    
 } 
}
//starting of html page
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
        <!-- logog of the html page -->
        <img src="../images/home.ico" alt="home logo">
        <?php
         if($loginflag && isset($_POST['submit']) ){       
        header("location: mainpage.html");
        unset($_POST['submit']);
        }
        if($passwordflag && isset($_POST['submit']) ){
            echo '<div id="error-container">
        <span id="erorr-msg">Wrong Credentials!!</span>
        </div>';
        unset($_POST['submit']);
        }
        if(!$loginflag && !$passwordflag && isset($_POST['submit'])){
            echo '<div id="error-container">
            <span id="erorr-msg">You are not Register!!</span>
            </div>';
            unset($_POST['submit']);
        } ?>
        <!-- form to submit data to the DB -->
        <form  name="myForm" action="" method="POST"  onsubmit="return validatebeforelogin()"> 
            <div class="form-element">
                <label>Email</label>
                <input id="mail" type="text" name="email" placeholder="Email">
            </div>
            <div class="form-element">
                <label>Password</label>
                <input id="password" type="password" name="password" placeholder="Password">
            </div>
            <div class="form-button">
                <input type="submit" value="SignUp" name="submit">
            </div>
        </form>
        <!-- link to signin page  -->
        <div id="no-account-msg">
            <p>Don't have an account?<a href="signin.php">SignIn</a></p>
        </div>
    </div>
</section>
</body>
</html>