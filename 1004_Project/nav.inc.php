<?php session_start(); ?>
<nav class="navbar navbar-expand-sm navbar-light bg-warning"><div class="navbar-header">
            <a class="navbar-brand" href="index.php"> <img src="Images/heartpaw_s.jpg" alt="LOGO">  </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navcollapse" aria-controls="navcollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
            </div>
            <div class="collapse navbar-collapse" id="navcollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class ="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                         <a class ="nav-link" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item">
                         <a class ="nav-link" href="dogs.php">Dogs</a>
                    </li>
                    <li class="nav-item">
                         <a class ="nav-link" href="cats.php">Cats</a>
                    </li>
                    <li class="nav-item">
                         <a class ="nav-link" href="smallanimal.php">Other Animals</a>
                    </li>            
                    <?php
                            if(isset($_SESSION["member_id"])){
                                echo '<li class="nav-item">
                                    <a class ="nav-link" href="adoptform.php">Adoption Form</a>
                                </li>';
                                echo '<li class="nav-item">
                                    <a class ="nav-link" href="NewFound.php">New Found</a>
                                </li>';
                            }
                    ?> 
                </ul>
                <ul class ="navbar-nav">
                    <?php
                        if(isset($_SESSION["member_id"])){
                            $name =  $_SESSION["name"] ;
                           echo '<li><a class="nav-link" href="profile.php">' .$name. '</a></li>';
                           echo '<li><a class = "log out" title ="Log Out"
                           href="process_logout.php"><svg xmlns="http://www.w3.org/2000/svg" 
                           width="25" height="25" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                           <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 
                           0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 
                           1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                           <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 
                           0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                           </svg></a>
                           </li>';
                        }
                        else
                        {
                            echo '<li><a class ="register button" title="Registration" 
                                href="register.php"><svg xmlns="http://www.w3.org/2000/svg" 
                                width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242
                                11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                </svg></a>
                                <li/>';
                            echo '<li><a class="login button" title="Login" 
                                href="login.php"><svg xmlns="http://www.w3.org/2000/svg" 
                                width="25" height="25" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 
                                0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 
                                2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                                <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 
                                0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                </svg></a>
                                </li>';
                        }
                    ?>         
                </ul>
            </div>      
</nav>
