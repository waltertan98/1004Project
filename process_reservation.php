<!DOCTYPE html>
<html lang = en>
    <?php
include "header.php";
?>
    
    <body>
        <?php
        include "nav.inc.php";
        include "functions.php";
        ?>
        
        <main>
            <?php
                $email .= $errorMsg = "";
                $success = true;

                //validate email
                if (empty($_POST["res_email"])) {
                    $errorMsg .= "Email is required.<br>";
                    $success = false;
                } 
                else {
                    $email = sanitize_input($_POST["res_email"]);
                // Additional check to make sure e-mail address is well -formed.
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $errorMsg .= "Invalid email format.";
                        $success = false;
                    }
                    
                }

                //validate name

                if (empty($_POST["res_name"])) {
                    $errorMsg .= "A name is required.<br>";
                    $success = false;
                } 
                else {
                    $name = sanitize_input($_POST["res_name"]);
                    
                }

                if (empty($_POST["res_tel"])) {
                    $errorMsg .= "Telephone number is required.<br>";
                    $success = false;
                } 
                else {
                    $tel = sanitize_input($_POST["res_tel"]);
                    
                }
                
                $note = sanitize_input($_POST["res_note"]);
                $date = sanitize_input($_POST["res_date"]);
                $slot = sanitize_input($_POST["res_slot"]);


                
                

                // Helper function to write the member data to the DB

                
                
                if ($success) {
                    saveReservation();
                    if ($success) {
                        echo "<h8>Reservation successful!</h8>";
                        //echo "<p>Name: " . $name . " ";
                        echo "<a class=\"btn btn-success\" herf=\"index.php\">Return Home</a><br>";

                    } 
                    /*else {
                        echo "<h8>The following input errors were detected:</h8>";
                        echo "<p>" . $errorMsg . "</p>";
                        echo "<a class=\"btn btn-danger\" herf=\"reservation1.php\">Return to sign up</a><br>";
                    }*/
                } 
                else {
                    echo "<h8>The following input errors were detected:</h8>";
                    echo "<p>" . $errorMsg . "</p>";
                    echo "<a class=\"btn btn-danger\" herf=\"resrvation1.php\">Return to Reservation</a><br>";
                }
                ?>
        </main>
        
        <?php
        include "footer.inc.php"
        ?>
        
    </body>

</html>
