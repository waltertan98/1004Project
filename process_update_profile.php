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
 
        if (empty($_POST["update_email"])) 
        { 
            $errorMsg .= "Email is required.<br>"; 
            $success = false; 
        } 
        else 
        { 
            $update_email = sanitize_input($_POST["update_email"]); 
 
            // Additional check to make sure e-mail address is well-formed.     
            if (!filter_var($update_email, FILTER_VALIDATE_EMAIL)) 
            { 
                $errorMsg .= "Invalid email format.<br>"; 
                $success = false; 
            } 
        }

        // this is for lname
        if (empty($_POST["update_name"])) 
        { 
            $errorMsg .= "Name is required.<br>"; 
            $success = false; 
        } 
        else 
        { 
            $update_name = sanitize_input($_POST["update_name"]);
            if (!preg_match("/^[a-zA-Z]*$/",$update_name)) 
            {
            $errorMsg .= "Invalid Name.<br>"; 
            $success = false; 
            }
        } 

        // this is for password
        if (empty($_POST["update_pwd"])) 
        { 
            $errorMsg .= "Password is required.<br>"; 
            $success = false; 
        } 
        else 
        { 
            $update_pwd = $_POST["update_pwd"]; 
            $update_pwd_confirm = $_POST["update_pwd_confirm"];           
            // Additional check to make sure e-mail address is well-formed.     
            if ($update_pwd != $update_pwd_confirm) 
            { 
                $errorMsg .= "Passwords are not the same.<br>"; 
                $success = false; 
            }
            $update_pwd = password_hash($update_pwd,PASSWORD_DEFAULT);
        } 
        

        //Helper function that checks input for malicious or unwanted content. 
        
        if($success)
        {
            updateMemberToDB();          
        }
        
        if($success)
        {
            echo '<h1 style="margin-left: 100px;"><b>Your profile update is successful!</b></h1>';
            session_start();
            session_unset();
            session_destroy();
            echo '<p style="margin-left: 100px;"><a class="btn btn-success" href="login.php">Log-in</a>'; 
        }
        else
        {
            echo '<h1 style="margin-left: 100px;"><b>Oops!</b></h1>';
            echo '<h4 style="margin-left: 100px;">The following input errors were detected:</h4>'; 
            echo '<P style="margin-left: 100px;">' . $errorMsg . "</p>";             
            echo '<p style="margin-left: 100px;"><a class="btn btn-danger" href="profile.php">Return to Profile</a>';      
        }
            ?> 
        <?php    
        include "footer.inc.php";    
        ?>
    </body>
</html>
