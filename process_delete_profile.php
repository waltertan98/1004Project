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
    echo '<h1 style="margin-left: 100px;"><b>Your profile has been deleted...Hope you will come back..</b></h1>';
    deleteMemberFromDB(); 
    session_start();
    session_unset();
    session_destroy();
    echo '<p style="margin-left: 100px;"><a class="btn btn-warning" href="index.php">Go back Home</a>';
?>
<?php
include "footer.inc.php"; 
?>
</html>