<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en"> 
   <?php
    include "header.php"
    ?>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <link rel="stylesheet"    
              href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"    
              integrity=        
                  "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
                  crossorigin="anonymous">
    <body>
        <?php
        include "nav.inc.php";
        ?>
        <main class="container">
            <h1>Pet Adoption</h1>
            <form action="process_adoptform.php" method="post">
                <label for="fname">First Name:</label>
                <input class="form-control" type="text" id="fname" 
                       name="fname"
                       placeholder="Enter first name">

                <div class="form-group">
                    <label for="lname">Last Name:</label>
                    <input class="form-control" type="text" id="lname" 
                           maxlength="45"
                           required name="lname"
                           placeholder="Enter last name"> 
                </div>
                <!-- <div class="form-group">
                    <label for="countrycode">Country Code:</label> 
                    <input class="form-control" type="number" id="countrycode" 
                           maxlength="45"
                           required name="countrycode"
                           placeholder="Enter country code"> 
                </div> -->
                <div class ="form-group">
                    <input id="phone" type="number" type ="tel" name="phone" />
                    <input type="submit" class="btn" value="Verify" />
                    <div class="alert alert-info" style="display: none;"></div>

                </div>
                <script>
                    const phoneInputField = document.querySelector("#phone");
                    const phoneInput = window.intlTelInput(phoneInputField, {
                        utilsScript:"https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
                    });
                    const info = document.querySelector(".alert-info");
                    function process(event) {
                        event.preventDefault();
                        const phoneNumber = phoneInput.getNumber();
                        info.style.display = "none";
                        error.style.display = "none";
                        if (phoneInput.isValidNumber()) {
                        } 
                        else {
                            error.style.display = "";
                            error.innerHTML = `Invalid phone number.`;
                        }
                    }
                </script>
                <!-- <div class="form-group">
                    <label for="phonenum">Contact Number:</label> 
                    <input class="form-control" type="number" id="phonenum" 
                           maxlength="45"
                           required name="phonenum"
                           placeholder="Enter contact number"> 
                </div> -->
                <div class="form-group">
                    <label for="adopttype">Type of pets to adopt:</label>
                    <div class ="group">
                        <div>
                            <input type="radio" id="adoptcat" name ="adopt"  value="cat">
                                <label for="adoptcat">Cat</label>
                        </div>
                        <div>
                            <input type="radio" id="adoptdog" name ="adopt"  value="dog">
                                <label for="adoptdog">Dog</label> 
                        </div>
                        <div>
                            <input type="radio" id="adoptothers" name ="adopt" value="others" required>
                                <label for="adoptothers">Others</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="firsttime">Is this your first time adopting?:</label>
                    <div class ="group" id="firsttime">
                        <div>
                            <input type="radio" id="firsttime_yes" name ="firsttime" value="Yes">
                                <label for="firsttime_yes">Yes</label>
                        </div>
                        <div>
                            <input type="radio" id="firsttime_no" name ="firsttime" value="No" required>
                                <label for="firsttime_no">No</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="numyear">If no, how long have you been caring for pets?</label> 
                    <input class="form-control" type="number" id="numyear" name="numyear"
                           placeholder="Enter number of year">
                </div>
                <div class="form-group">
                    <label for="noofpetsown">If no, how many pets are you caring for right now?</label> 
                    <input class="form-control" type="number" id="noofpetsown" name="noofpetsown"
                           placeholder="Enter number of pets">
                </div>
                <div class="form-group">
                    <label for="salary">Select you monthly salary from the check box given:</label>

                    <div class ="group">
                        <div>
                            <input type="radio" id="monthlysalary1" name ="salary" value="1">
                                <label for="monthlysalary1">Less than $1500</label>
                        </div>
                        <div>
                            <input type="radio" id="monthlysalary2" name ="salary" value="2">
                                <label for="monthlysalary2">$1500 to $2500</label>
                        </div>
                        <div>
                            <input type="radio" id="monthlysalary3" name ="salary" value="3">
                                <label for="monthlysalary3">$2500 to $3500</label>
                        </div>
                        <div>
                            <input type="radio" id="monthlysalary4" name ="salary" value="4">
                                <label for="monthlysalary4">$3500 to $4500</label>
                        </div>
                        <div>
                            <input type="radio" id="monthlysalary5" name ="salary" value="5"required>
                                <label for="monthlysalary5">More than $4500</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="housing">Select the type of housing you live in:</label>

                    <div class ="group">
                        <div>
                            <input type="radio" id="housing1" name ="housing" value="1">
                                <label for="housing1">HDB (2 room)</label>
                        </div>
                        <div>
                            <input type="radio" id="housing2" name ="housing" value="2">
                                <label for="housing2">HDB (3 to 5 room)</label>
                        </div>
                        <div>
                            <input type="radio" id="housing3" name ="housing" value="3">
                                <label for="housing3">Condominium</label>
                        </div>
                        <div>
                            <input type="radio" id="housing4" name ="housing" value="4" required>
                                <label for="housing4">Landed property</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="abandon">Have you surrendered or given any pets away?</label>
                    <div class ="group">
                        <div>
                            <input type="radio" id="abandon_yes" name ="abandon" value="Yes">
                                <label for="abandon_yes">Yes</label>
                        </div>
                        <div>
                            <input type="radio" id="abandon_no" name ="abandon" value="No" required>
                                <label for="abandon_no">No</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="reasonforadopt">Select the main reason for adopting the pet:</label>
                    <div class ="group">
                        <div>
                            <input type="radio" id="reason1" name ="reason" value="1">
                                <label for="reason1">I want take care of the pet.</label>
                        </div>
                        <div>
                            <input type="radio" id="reason2" name ="reason" value="-1">
                                <label for="reason2">I feel lonely.</label>
                        </div>
                        <div>
                            <input type="radio" id="reason3" name ="reason" value="-1">
                                <label for="reason3">I want the pet as a gift for my family.</label>
                        </div>
                        <div>
                            <input type="radio" id="reason4" name ="reason" value="-1">
                                <label for="reason4">I need a guard dog.</label>
                        </div>
                        <div>
                            <input type="radio" id="reason5"  name ="reason" value="-1" required>
                                <label for="reason5">To breed with other pets.</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pc">Who will be the primary care giver?</label> 
                    <div class ="group">
                        <div>
                            <input type="radio" id="primarycare1" name ="pc" value="10">
                                <label for="primarycare1">Myself</label>
                        </div>
                        <div>
                            <input type="radio" id="primarycare2" name ="pc" value="5">
                                <label for="primarycare2">My parents</label>
                        </div>
                        <div>
                            <input type="radio" id="primarycare3" name ="pc" value="5">
                                <label for="primarycare3">My sprout.</label>
                        </div>
                        <div>
                            <input type="radio" id="primarycare4" name ="pc" value="2">
                                <label for="primarycare4">My maid.</label>
                        </div>
                        <div>
                            <input type="radio" id="primarycare5" name ="pc" value="0" required>
                                <label for="primarycare5">My children.</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="costperyear">Approximately how much do you think your pet will cost per year?</label> 
                    <input class="form-control" type="number" id="costperyear"
                           required name="costperyear" 
                           placeholder="Enter amount">
                </div>
                <div class="form-group">
                    <label for="exercise">If  you've choosen to adopt a cat or dog, how much daily exercise can you give your pet?</label> 
                    <input class="form-control" type="number" id="exercise" name="exercise"
                           placeholder="Enter number of hours">
                </div>
                <div class="form-group">
                    <label for="timespend">How much time are you willing to spend on pet in the first few months?</label> 
                    <input class="form-control" type="number" id="timespend" required name="timespend"
                           placeholder="Enter number of hours a day">
                </div>
                <div class="form-group">
                    <label for="temper">Select the characteristic you would like your pet to have:</label>

                    <div class ="group">
                        <div>
                            <input class = "sum" type="checkbox" id="temper" value="10" data-toggle="checkbox">
                                <label for="temper">Prefer outdoor activities</label>
                        </div>
                        <div>
                            <input class = "sum" type="checkbox" id="temper" value="1" data-toggle="checkbox">
                                <label for="temper">Prefer indoor activities</label>
                        </div>
                        <div>
                            <input class = "sum" type="checkbox" id="temper" value="1" data-toggle="checkbox">
                                <label for="temper">House trained</label>
                        </div> 
                        <div>
                            <input class = "sum" type="checkbox" id="temper" value="1" data-toggle="checkbox">
                                <label for="temper">Require little or no exercise</label>
                        </div> 
                        <div>
                            <input class = "sum" type="checkbox" id="temper" value="10" data-toggle="checkbox">
                                <label for="temper">Be friendly with kids</label>
                        </div> 
                        <div>
                            <input class = "sum" type="checkbox" id="temper" value="10" data-toggle="checkbox">
                                <label for="temper">Be friendly with other pets</label>
                        </div> 
                        <div>
                            <input class = "sum" type="checkbox" id="temper" value="10" data-toggle="checkbox">
                                <label for="temper">Be friendly with visitors</label>
                        </div> 
                        <div>
                            <input class = "sum" type="checkbox" id="temper" value="10" data-toggle="checkbox">
                                <label for="temper">Playful</label>
                        </div> 
                        <div>
                            <input class = "sum" type="checkbox" id="temper" value="1" data-toggle="checkbox">
                                <label for="temper">Calm</label>
                        </div>
                        <div>
                            <input class = "sum" type="checkbox" id="temper" value="1" data-toggle="checkbox">
                                <label for="temper">Independent (will not wake me up at night)</label>
                        </div>
                        <div>
                            <input class = "sum" type="checkbox" id="temper" value="1" data-toggle="checkbox">
                                <label for="temper">Quiet</label>
                        </div>
                    </div>
                    <script>
                        var total;
                        function updateSum() {
                            total = 0;
                            $(".sum:checked").each(function(i, n) {total += parseInt($(n).val());});
                            $("#total").val(total);
                        }
                            // run the update on every checkbox change and on startup
                        $("input.sum").change(updateSum);
                        updateSum();

                        var output;
                        //var adopttype = document.getElementsByClassName("img-thumbnail");
                        if (total <= 10){

                            if(adopttype !== 'others'){
                                $success = false; 
                            }
                        }   
                        else{
                            val = 1;
                        }
                    </script>

                    <input class = "total" type ="text" id="total" name="total">

                </div>

                <!--<div class="form-check">
                    <label>
                        <input type="checkbox" name="agree">
                        Agree to terms and conditions.
                    </label>
                </div>-->
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </main>
        <?php
        include "footer.inc.php";
        ?>  
    </body>
</html>