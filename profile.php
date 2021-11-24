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
        
         $userinfo = getUserById();
            function getUserById(){
                $config = parse_ini_file('../../private/db-config.ini');  
                $con = new mysqli($config['servername'], $config['username'],            
                        $config['password'], $config['dbname']); 
                if ($con->connect_error){
                    echo 'Could not connect: ' . mysqli_connect_errno();
                }
                $id = $_SESSION["member_id"];
                $query=$con->prepare("SELECT name, email, password FROM members WHERE member_id = ?");
                $query->bind_param('i', $id);
                $query->execute();
                $query->bind_result($name, $email, $pwd);
                while ($query->fetch()){
                    $name=filter_var($name, FILTER_SANITIZE_SPECIAL_CHARS);
                    $email=filter_var($email, FILTER_SANITIZE_SPECIAL_CHARS);

                    $userinfo[0] = $name;
                    $userinfo[1] = $email;

                    return($userinfo);
                }
                $con->close();
            }
        ?>
        <main class="container">                    
            <h1>Profile Page</h1>        
            <form action="process_update_profile.php" method="post">
                <div class = "form-group">
                    <label for="update_name">Name: </label><?= $userinfo[0] ?>             
                    <input class = "form-control" type="text" id="update_name" required maxlength="255" name="update_name"                   
                           placeholder="Enter Name">
                </div>
                <div class = "form-group">
                    <label for="update_email">Email: </label><?= $userinfo[1] ?>            
                    <input class = "form-control" type="text" id="update_email" required maxlength="255" name="update_email"                   
                           placeholder="Enter Email">
                </div>
                <div class = "form-group">
                    <label for="update_pwd">Password </label>            
                    <input class = "form-control" type="password" id="update_pwd" required minlength="8" name="update_pwd"                   
                           placeholder="Enter Password">  
                </div> 
                <div class = "form-group">
                    <label for="update_pwd_confirm">Confirm Password</label>            
                    <input class = "form-control" type="password" id="update_pwd_confirm" required minlength="8" name="update_pwd_confirm"                  
                           placeholder="Confirm password">  
                </div>
                <div class = "form-group">    
                    <button class="btn btn-primary" type="update">Update</button>  
                </div> 
                
            </form>   
            <form action="process_delete_profile.php" method="post">
                <div class = "form-group">    
                    <button class="btn btn-danger" type="delete">Delete</button>  
                </div> 
            </form>     
        </main>    
      
            <?php    
            include "footer.inc.php";    
            ?>
    </body>
</html>

