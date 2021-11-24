<?php

function authenticateUser()
        {      
            global $name, $email, $pwd, $id, $errorMsg, $success;    
            // Create database connection.    
            $config = parse_ini_file('../../private/db-config.ini');    
            $conn = new mysqli($config['servername'], $config['username'],            
                    $config['password'], $config['dbname']);    
            // Check connection    
            if ($conn->connect_error)
            {
            $errorMsg = "Connection failed: " . $conn->connect_error;        
            $success = false;                
            }    
            else            
            {    
                // Prepare the statement:        
                $stmt = $conn->prepare("SELECT * FROM members WHERE email=?");        
                // Bind & execute the query statement:        
                $stmt->bind_param("s", $email);        
                $stmt->execute();        
                $result = $stmt->get_result();        
                if ($result->num_rows > 0)                        
                {               
                    // Note that email field is unique, so should only have            
                    // one row in the result set.            
                    $row = $result->fetch_assoc();                      
                    $name = $row["name"];            
                    $pwd = $row["password"];  
                    $id = $row["member_id"];
                    // Check if the password matches:            
                    if (!password_verify($_POST["pwd"], $pwd))            
                    {   
                        // Don't be too specific with the error message - hackers don't                    
                        // need to know which one they got right or wrong. :)                    
                        $errorMsg = "Email not found or password doesn't match...";                
                        $success = false;            
                    }        
                    else
                    {
                    session_start();
                    $_SESSION["member_id"] = $id;
                    $_SESSION["name"] = $name;
                    }
                }        
                else        
                {            
                    $errorMsg = "Email not found or password doesn't match...";            
                    $success = false;          
                }        
                $stmt->close();   
                
            }    
            $conn->close();            
        }
        function sanitize_input($data) 
        { 
          $data = trim($data); 
          $data = stripslashes($data);   
          $data = htmlspecialchars($data);   
          return $data; 
        }
        function saveMemberToDB()
        {     
            global $name, $email, $pwd, $errorMsg, $success;    
            // Create database connection.    
            $config = parse_ini_file('../../private/db-config.ini');    
            $conn = new mysqli($config['servername'], $config['username'],            
                    $config['password'], $config['dbname']);    
            // Check connection    
            if ($conn->connect_error)    
            {        
                $errorMsg = "Connection failed: " . $conn->connect_error;        
                $success = false;    
                
            }    
            else    
            {        
                // Prepare the statement:        
                $stmt = $conn->prepare("INSERT INTO members (name, email, password) VALUES (?, ?, ?)");        
                // Bind & execute the query statement:        
                $stmt->bind_param("sss", $name, $email, $pwd);        
                if (!$stmt->execute())        
                {            
                    $errorMsg = "Execute failed: (" . $stmt->errno . ") " . $stmt->error;            
                    $success = false;    
                }        
                $stmt->close();                    
            }    
            $conn->close();
        }
        function updateMemberToDB()
        {      
            global $update_name, $update_email, $update_pwd, $id, $errorMsg, $success;    
            // Create database connection.    
            $config = parse_ini_file('../../private/db-config.ini');    
            $conn = new mysqli($config['servername'], $config['username'],            
                    $config['password'], $config['dbname']);    
            // Check connection    
            if ($conn->connect_error)    
            {        
                $errorMsg = "Connection failed: " . $conn->connect_error;        
                $success = false;    
            }  
            
            else    
            {        
                $id = $_SESSION["member_id"];   
                // Bind & execute the query statement:        
                $stmt = $conn->prepare("UPDATE members SET name = ?, email = ?, password = ? WHERE member_id = $id");        
                // Bind & execute the query statement:        
                $stmt->bind_param("sss", $update_name, $update_email, $update_pwd); 
                if (!$stmt->execute())        
                {            
                    $errorMsg = "Execute failed: (" . $stmt->errno . ") " . $stmt->error;            
                    $success = false;    
                }        
                $stmt->close();                    
            }    
            $conn->close();
        }
        function deleteMemberFromDB()
        {      
            global $update_name, $update_email, $update_pwd, $id, $errorMsg, $success;    
            // Create database connection.    
            $config = parse_ini_file('../../private/db-config.ini');    
            $conn = new mysqli($config['servername'], $config['username'],            
                    $config['password'], $config['dbname']);    
            // Check connection    
            if ($conn->connect_error)    
            {        
                $errorMsg = "Connection failed: " . $conn->connect_error;        
                $success = false;    
            }  
            
            else    
            {        
                $id = $_SESSION["member_id"];   
                // Bind & execute the query statement:        
                $stmt = $conn->prepare("DELETE FROM members WHERE member_id = $id");   
                // Bind & execute the query statement: 
                if (!$stmt->execute())        
                {            
                    $errorMsg = "Execute failed: (" . $stmt->errno . ") " . $stmt->error;            
                    $success = false;    
                }
                $stmt->close();                    
            }    
            $conn->close();
        }
        function saveReservation() {
            global $date, $slot, $name, $email, $tel, $note, $errorMsg, $success; //need to ask, why declare here and not in front
            // Create database connection.
            $config = parse_ini_file('../../private/db-config.ini');
            $conn = new mysqli($config['servername'], $config['username'],
                    $config['password'], $config['dbname']);
            // Check connection
            if ($conn->connect_error) {
                $errorMsg = "Connection failed: " . $conn->connect_error;
                $success = false;

            } else {
                // Prepare the statement: //we just anyhow name the statement as $stmt
                $stmt = $conn->prepare("INSERT INTO reservations (res_date, res_slot, res_name, res_email, res_tel, res_notes) VALUES (?,?,?,?,?,?)");
                // Bind & execute the query statement:
                $stmt->bind_param("ssssss", $date, $slot, $name, $email, $tel, $note);
                if (!$stmt->execute()) {
                    $errorMsg = "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
                    $success = false;
                }
                $stmt->close();
            }
            $conn->close();
        }