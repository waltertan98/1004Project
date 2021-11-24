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
        
        <main class="container">        
            <h1>Member Registration</h1>        
            <p>             
                For existing members, please go to the            
                <a href="login.php">Sign In page</a>        
            </p>        
            <form action="process_register.php" method="post"> 
                <div class = "form-group">
                    <label for="name">Name:</label>             
                    <input class = "form-control" type="text" id="name" required maxlength="255" name="name"                   
                           placeholder="Enter Name">
                </div>
                <div class = "form-group">
                    <label for="email">Email:</label>            
                    <input class = "form-control" type="email" id="email" required name="email"                   
                           placeholder="Enter email">  
                </div>
                <div class = "form-group">
                    <label for="pwd">Password:</label>            
                    <input class = "form-control" type="password" id="pwd" required minlength="8" name="pwd"                   
                           placeholder="Enter password">  
                </div>
                <div class = "form-group">
                    <label for="pwd_confirm">Confirm Password:</label>            
                    <input class = "form-control" type="password" id="pwd_confirm" required minlength="8" name="pwd_confirm"                  
                           placeholder="Confirm password">  
                </div>
                <div class = "form-group">
                    <label>                
                        <input type="checkbox" required name="agree">                
                        Agree to terms and conditions.            
                    </label>
                </div>
                <div class = "form-group">    
                    <button class="btn btn-primary" type="submit">Submit</button>  
                </div>    
            </form>    
        </main>    
            <?php    
            include "footer.inc.php";    
            ?>
    </body>
</html>