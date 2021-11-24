
<?php
    include "nav.inc.php"; 
?>
<?php
    session_start();
    session_unset();
    session_destroy();
    header("location: ../1004_Project/index.php");
?>
<?php
    include "footer.inc.php"; 
?>
