/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// A $( document ).ready() block.
$(document).ready(function () {
    myFunction();
    activateMenu();
    console.log("ready!");
});

$(document).on("click", ".img-popup", function(){
    $(".img-popup").remove();
});

function myFunction() {
    $(".img-thumbnail").click(function () {
        removeFunction();
        var span = document.createElement("span");
        span.setAttribute("class", "img-popup");
        $(this).after(span);
        currSrc = $(this).attr("src");
        newSrc = currSrc.replace("_small", "_large");
        span.innerHTML = "<img src=" + newSrc + ">";
    });
};

function removeFunction() {
    $(".img-popup").remove();
}

/*
 * This function toggles the nav menu active/inactive status as
 * different pages are selected. It should be called from $(document).ready() 
 * or whenever the page loads. 
 */
function activateMenu() 
{ 
    var current_page_URL = location.href; 
 
    $(".navbar-nav a").each(function() 
    {         var target_URL = $(this).prop("href");         
        if (target_URL === current_page_URL) 
        { 
            $('nav a').parents('li, ul').removeClass('active'); 
            
            $(this).parent('li').addClass('active');             
            return false; 
        } 
    }); 
} 

//for the multiple selection
$(document).ready(function() {
    var total;
    function updateSum() {
        total = 0;
        $(".sum:checked").each(function(i, n) {total += parseInt($(n).val());})
        $("#total").val(total);
    }
    // run the update on every checkbox change and on startup
    $("input.sum").change(updateSum);
    updateSum();
});