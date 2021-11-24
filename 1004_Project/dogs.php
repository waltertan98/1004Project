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
            $config = parse_ini_file('../../private/db-config.ini');  
            $mysqli = new mysqli($config['servername'], $config['username'],            
                $config['password'], $config['dbname']); 
            $result = $mysqli->query("SELECT * FROM abandon WHERE type = 'Dog'") or die($mysqli->error);
            $i = 0;
        ?>
        <main class="container-fluid">
           
            <?php 
            if(!isset($_SESSION["member_id"])){
                while(($row = $result->fetch_assoc()) && ($i < 2)):
            ?>
                <div class="row">
                    <div class="col-9"><h3><?php echo $row['petname'].','.$row['age'].'y/o';?></h3></div>
                    <div class="col-4">
                        <figure>
                            <img class="img-thumbnail" src="<?php echo $row['image'];?>" alt="<?php echo $row['image'];?>"
                                title="View larger image..."/>
                            <figcaption><?php echo $row['petname'];?></figcaption>
                        </figure>
                    </div>
                    <div class="col-6">
                        <p>
                            <?php echo 'Location found:'.$row['location'].'</br>'.$row['description'];?>
                        </p>
                    </div>
                </div>
            <?php 
                
                $i++;
                endwhile;
                echo '<P style="margin-left: 100px;"> Want to see more pets? </p>';
                echo '<P style="margin-left: 100px;"> Member? <a href="login.php">Login</a> Don\'t have an account? <a href="register.php">Sign Up</a>';
            }
            else{
                while($row = $result->fetch_assoc()):
            ?>
                <div class="row">
                    <div class="col-9"><h3><?php echo $row['petname'].','.$row['age'];?></h3></div>
                    <div class="col-4">
                        <figure>
                            <img class="img-thumbnail" src="<?php echo $row['image'];?>" alt="<?php echo $row['image'];?>"
                                title="View larger image..."/>
                            <figcaption><?php echo $row['petname'];?></figcaption>
                        </figure>
                    </div>
                    <div class="col-6">
                        <p>
                            <<?php echo 'Location found:'.$row['location'].'</br>'.$row['description'];?>
                        </p>
                    </div>
                </div>
            <?php 
                endwhile;
            }
            ?>
        </main>

        <?php
        include "footer.inc.php";
        ?>

    </body>
</html>
