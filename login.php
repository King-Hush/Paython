<?php 
require_once "account.class.php";
require_once "tools/functions.php";

$accObj = new Account;

session_start();

$password = $email = '';

?>


<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
    <section class="login-container">
        <div class="login">
            <img src="" alt="Logo">
            <h2>Welcome to PayThon</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <form action="" method="post">
                <label for="email">Enter your WMSU email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <a href="">Forgot Password?</a>

                <button type="loginbtn">Log In</button>
                <p>Dont have an Account?<a href ="signup.php">Click here</a></p>
            </form>
            <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = clean_input($_POST["email"]);
    $password = clean_input($_POST['password']);


    if ($accObj->login($email, $password)) {
        $data = $accObj->fetch($email, $password);
        $_SESSION['account'] = $data;
        if (isset($_SESSION['account'])) {
             if ($_SESSION['account']['isstaff'] == false && $_SESSION['account']['isadmin'] == false){
                header("Location: dashboard.php");
            }elseif ($_SESSION['account']['isstaff'] == true && $_SESSION['account']['isadmin'] == false) {
                header("Location: student.staff.php");
            }elseif ($_SESSION['account']['isadmin']) {
                header("Location: admin.php");
            }
            }

    }else {
        echo '<p class="errorMsg">*Wrong Email or Password</p>';
    }
}?>
        </div>
        
        <div class="design-picture">
            <img src="Screenshot 2024-11-29 204628.png"> 
        </div>
    </section>
</body>
</html>
