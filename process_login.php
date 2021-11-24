<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html lang="en">
    <?php
    include "header.php";
    ?>

    <body>
        <?php
        include "nav.inc.php";
        include "jheader.php";
        include "functions.php";
        ?>
        <?php
        
        $success = true;
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];
        if (empty($_POST["email"])) 
        { 
            $errorMsg .= "Email is required.<br>"; 
            $success = false; 
        } 
            
        if (empty($_POST["pwd"])) 
        { 
            $errorMsg .= "Password is required.<br>"; 
            $success = false; 
        } 
        
        if($success)
        {
        authenticateUser();
        }
        if($success)
        {
            echo '<h1 style="margin-left: 100px;"><b>Login successful!</b></h1>';
            echo '<h4 style="margin-left: 100px;">Welcome back, ' . $name . '</h4>';
            echo '<p style="margin-left: 100px;"><a class="btn btn-success" href="index.php">Return to Home</a>';     

        }
        else
        {
            echo '<h1 style="margin-left: 100px;"><b>Oops!</b></h1>';
            echo '<h4 style="margin-left: 100px;">The following input errors were detected:</h4>'; 
            echo '<P style="margin-left: 100px;">' . $errorMsg . "</p>";         
            echo '<p style="margin-left: 100px;"><a class="btn btn-warning" href="login.php">Return to Login</a>'; 
        }
        ?>
        <?php    
        include "footer.inc.php";    
        ?>
    </body>
</html>