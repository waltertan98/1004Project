<?php
include "header.php";
?>
<body>
    <?php
    include "nav.inc.php";
    ?>
    <main class="container">
        <h1>Member Reservation</h1>
        
        <form action="process_reservation.php" method="post">
            <label for="res_name">Name:</label>
                <input class="form-control" type="text" id="res_name" 
                       name="res_name"
                       placeholder="Enter name">


                <div class="form-group">
                    <label for="res_email">Email:</label> 
                    <input class="form-control" type="email" id="res_email" 
                           required name="res_email" 
                           placeholder="Enter email">
                </div>

                <div class="form-group">
                    <label for="res_tel">Telephone:</label>
                    <input class="form-control" type="number" id="res_tel" 
                           required name="res_tel"
                           placeholder="Enter phone number"> 
                </div>

                <div class="form-group">
                    <label for="res_note">Notes:</label> 
                    <input class="form-control" type="note" id="res_notes" 
                           name="res_note"
                           placeholder="eg. Number of pax">
                </div>

                <?php
                    // @TODO - MINIMUM DATE (TODAY)
                    // $mindate = date("Y-m-d", strtotime("+2 days"));
                    $mindate = date("Y-m-d");
                ?>
                <label>Reservation Date</label>
                <input type="date" required id="res_date" name="res_date"
                       min="<?=$mindate?>">

                <label>Reservation Slot</label>
                <select required name="res_slot">
                  <option value="AM">11AM</option>
                  <option value="PM">12PM</option>
                  <option value="PM">2PM</option>
                  <option value="PM">3PM</option>
                  <option value="PM">4PM</option>
                </select>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
        </form>
    </main>
    <?php
    include "footer.inc.php";
    ?>  
</body>

