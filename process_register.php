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
        // this is for email
        $email = $errorMsg = ""; 
        $success = true; 
 
        if (empty($_POST["email"])) 
        { 
            $errorMsg .= "Email is required.<br>"; 
            $success = false; 
        } 
        else 
        { 
            $email = sanitize_input($_POST["email"]); 
 
            // Additional check to make sure e-mail address is well-formed.     
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
            { 
                $errorMsg .= "Invalid email format.<br>"; 
                $success = false; 
            } 
        }

        // this is for lname
        if (empty($_POST["name"])) 
        { 
            $errorMsg .= "Name is required.<br>"; 
            $success = false; 
        } 
        else 
        { 
            $name = sanitize_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z]*$/",$name)) 
            {
            $errorMsg .= "Invalid Name.<br>"; 
            $success = false; 
            }
        } 

        // this is for password
        if (empty($_POST["pwd"])) 
        { 
            $errorMsg .= "Password is required.<br>"; 
            $success = false; 
        } 
        else 
        { 
            $pwd = $_POST["pwd"]; 
            $pwd_confirm = $_POST["pwd_confirm"];           
            // Additional check to make sure e-mail address is well-formed.     
            if ($pwd != $pwd_confirm) 
            { 
                $errorMsg .= "Passwords are not the same.<br>"; 
                $success = false; 
            }
            $pwd = password_hash($pwd,PASSWORD_DEFAULT);
        } 
        

        //Helper function that checks input for malicious or unwanted content. 
        
        if($success)
        {
            saveMemberToDB();          
        }
        
        if($success)
        {
            echo '<h1 style="margin-left: 100px;"><b>Your registration is successful!</b></h1>';
            echo '<h4 style="margin-left: 100px;">Thank you for signing up, ' . $name . '</h4>';
            echo '<p style="margin-left: 100px;"><a class="btn btn-success" href="login.php">Log-in</a>';
            
        }
        else
        {
            echo '<h1 style="margin-left: 100px;"><b>Oops!</b></h1>';
            echo '<h4 style="margin-left: 100px;">The following input errors were detected:</h4>'; 
            echo '<P style="margin-left: 100px;">' . $errorMsg . "</p>";             
            echo '<p style="margin-left: 100px;"><a class="btn btn-danger" href="register.php">Return to Sign-up</a>';      
        }
            ?> 
        <?php    
        include "footer.inc.php";    
        ?>
    </body>
</html>