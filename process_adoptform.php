<!DOCTYPE html>
<html lang="en">
    <?php
    include "header.php";
    ?>

    <body>
        <?php
        include "nav.inc.php";
        include "jheader.php";
        ?>
        <?php
            //$numyear = $errorMsg = "";
            //$housing = $errorMsg = "";
            //$abandon = $errorMsg = "";
            //$reasonforadopt = $errorMsg = "";
            //$primarycare = $errorMsg = "";
            //$costperyear = $errorMsg = "";
            //$exercise = $errorMsg = "";
            //$timespend = $errorMsg = "";
            $success = true;
            
            
            //validate first name
            if (empty($_POST["fname"])) 
            {
                $errorMsg .= "A name is required.<br>";
                $success = false;
            }
            else 
            {
                $fname = sanitize_input($_POST["fname"]);
            }

            //validate last name
            if (empty($_POST["lname"]))
            {
                $errorMsg .= "A name is required.<br>";
                $success = false;
            } 
            else 
            {
                $lname = sanitize_input($_POST["lname"]);
            }
            
            // check adopttype
            //$adopttype = $_POST["check[1][]"];
            $salary = $_POST['salary'];
            
            if(empty($_POST["adopt"]))
            {
                $errorMsg .= "Missing input.<br>";
                $success = false;
            }
            if(isset($_POST['adopt']))
            {
                $adoptType = $_POST['adopt'];
                $firsttime = $_POST['firsttime'];
                $salary= $_POST['salary'];
                $abandon = $_POST['abandon'];
                $reason = $_POST['reason'];
                $pc = $_POST['pc'];
                $cost = $_POST['costperyear'];
                $housing = $_POST['housing'];
                $exercise= $_POST['exercise'];
                $time = $_POST['timespend'];
                $total = $_POST['total'];

                if($adoptType== "cat"){
                    //echo "Thankyou for meowing with us. :D";
                    if ($housing >="4"){
                        if($abandon =="No"){
                            if($reason == "1"){
                                if($pc >4){
                                    if($cost > 2000){
                                        if ($exercise >=1){
                                            if($time >1){
                                                if($total>=10){
                                                    
                                                }
                                                else{
                                                    $errorMsg .= "Sorry you are not suitable to adopt a cat.<br>";
                                                    $success = false;
                                                }
                                            }
                                            else{
                                                $errorMsg .= "Sorry you are not suitable to adopt a cat.<br>";
                                                $success = false;
                                            }
                                        }
                                        else{
                                            $errorMsg .= "Sorry you are not suitable to adopt a cat.<br>";
                                            $success = false;
                                        }
                                    }
                                    else{
                                        $errorMsg .= "Sorry you are not suitable to adopt a cat.<br>";
                                        $success = false;
                                    }
                                }
                                else{
                                    $errorMsg .= "Sorry you are not suitable to adopt a cat.<br>";
                                    $success = false;
                                }
                            }
                            else{
                                $errorMsg .= "Sorry you are not suitable to adopt a cat.<br>";
                                $success = false;
                            }
                        }
                        else{
                            $errorMsg .= "Sorry you are not suitable to adopt a cat.<br>";
                            $success = false;
                        }
                    }
                    else{
                        $errorMsg .= "Sorry you are not suitable to adopt a cat.<br>";
                        $success = false;
                    }
                }
                elseif ($adoptType=="dog") {
                    //echo "woof"
                    if ($salary >= 1){
                        if($abandon=="No"){
                          if($reason ==1){
                              if($pc >4){
                                  if ($cost>2500){
                                      if($exercise>1){
                                          if ($time>1){
                                              if($total >20){
                                                  
                                              }
                                              else{
                                                  $errorMsg .= "Sorry you are not suitable to adopt a dog.<br>";
                                                  $success = false;
                                              }
                                          }
                                          else{
                                              $errorMsg .= "Sorry you are not suitable to adopt a dog.<br>";
                                              $success = false;
                                          }
                                      }
                                      else{
                                          $errorMsg .= "Sorry you are not suitable to adopt a dog.<br>";
                                          $success = false;
                                      }
                                  }
                                  else{
                                      $errorMsg .= "Sorry you are not suitable to adopt a dog.<br>";
                                      $success = false;
                                  }
                              }
                              else{
                                  $errorMsg .= "Sorry you are not suitable to adopt a dog.<br>";
                                  $success = false;
                              }
                          }  
                          else{
                              $errorMsg .= "Sorry you are not suitable to adopt a dog.<br>";
                              $success = false;
                          }
                        }
                        else{
                            $errorMsg .= "Sorry you are not suitable to adopt a dog.<br>";
                            $success = false;
                        }
                    }
                    else{
                        $errorMsg .= "Sorry you are not suitable to adopt a dog.<br>";
                        $success = false;
                    }
                }
                elseif ($adoptType=="others") {
                    
                    if ($abandon =="No"){
                        if ($reason==1){
                            if($pc>1){
                                if($pc >1){
                                    if($cost>500){
                                        
                                    }
                                    else{
                                        
                                    }
                                }
                                else{
                                    
                                }
                            }
                            else{
                                
                            }
                        }
                        else{
                            
                        }
                    }
                    else{
                        
                    }
                }
            }
            
            if ($success) {
            echo '<h1 style="margin-left: 100px;"><b>Your Applicaition is successful!</br></h1>';
            echo '<h4 style="margin-left: 100px;">Thank you for applying, ' . $fname . ' ' . $lname . '</br>'
                    . 'Please book a time to visit the pet.</br></h4>';
            echo '<p style="margin-left: 100px;"><a class="btn btn-success" href="reservation.php">Booking</a>';
            } 
            else {
                echo "<h4>The following input errors were detected:</h4>";
                echo "<p>" . $errorMsg . "</p>";
            }

            //Helper function that checks input for malicious or unwanted content. 
            function sanitize_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        
            ?>
        <?php
        include "footer.inc.php";
        ?>
    </body>
</html>