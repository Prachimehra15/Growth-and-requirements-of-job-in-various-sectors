<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    function function_alert($msg) {
                echo "<script type='text/javascript'>alert('$msg');</script>";
            }
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
 
    if (isset($_POST['username'])) {
        
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        function_alert($query);            
        $result = mysqli_query($con, $query) or die(mysqli_error());
        $rows = mysqli_num_rows($result);

        
        if ($rows == 1) 
        {
            //echo('In row=1');
            
            $qry = mysqli_fetch_array($result);

            $_SESSION['username'] = $qry['username'];
            $_SESSION['email'] = $qry['email'];
            $_SESSION['level'] = $qry['level'];

            function_alert( $_SESSION['level']);
            function_alert( $qry['level']);


             if($_SESSION['level']=="Admin")
             {
                function_alert('In Admin');

                sleep(3);
              
                header("location:admin.php");
             }
            else
            {
                function_alert('In User');
                sleep(3);
               
                header("location:user.php");
            }
            function_alert('outside if');
        }
    }        
    ?>
    <form class="form" method="post" name="login" >
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link">Don't have an account? <a href="registration.php">Registration Now</a></p>
  </form>
</body>
</html>
