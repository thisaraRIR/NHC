// JavaScript Document
$(document).ready(function() {

    "use strict";

    $(".booking-form").submit(function(e) {
        e.preventDefault();
        var treatment = $(".treatment");
        var patient = $(".patient");
        var date = $(".date");
        var name = $(".name");
        var email = $(".email");
        var phone = $(".phone");
        var age =$(".age");
        
        var flag = false;
        if (treatment.val() == "") {
            treatment.closest(".form-control").addClass("error");
            treatment.focus();
            flag = false;
            return false;
        } else {
            treatment.closest(".form-control").removeClass("error").addClass("success");
        } if (patient.val() == "") {
            patient.closest(".form-control").addClass("error");
            patient.focus();
            flag = false;
            return false;
        } else {
            patient.closest(".form-control").removeClass("error").addClass("success");
        } if (date.val() == "") {
            date.closest(".form-control").addClass("error");
            date.focus();
            flag = false;
            return false;
        } else {
            date.closest(".form-control").removeClass("error").addClass("success");
        } if (name.val() == "") {
            name.closest(".form-control").addClass("error");
            name.focus();
            flag = false;
            return false;
        } else {
            name.closest(".form-control").removeClass("error").addClass("success");
        } if (email.val() == "") {
            email.closest(".form-control").addClass("error");
            email.focus();
            flag = false;
            return false;
        } else {
            email.closest(".form-control").removeClass("error").addClass("success");
        } if (phone.val() == "") {
            phone.closest(".form-control").addClass("error");
            phone.focus();
            flag = false;
            return false;
        } else {
            phone.closest(".form-control").removeClass("error").addClass("success");
        }if(age.val() == ""){
            age.closest(".form-control").addClass("error");
            age.focus();
            flag = false;
            return false;
        }else{
            age.closest(" .form-control").removeClass("error").addClass("sucess");
        }//if (msg.val() == "") {
        //     msg.closest(".form-control").addClass("error");
        //     msg.focus();
        //     flag = false;
        //     return false;
        // } else {
        //     msg.closest(".form-control").removeClass("error").addClass("success");
        //     flag = true;
        // }
        var dataString = "treatment=" + treatment.val() + "&patient=" + patient.val() + "&date=" + date.val() + "&name=" + name.val() + "&email=" + email.val() + "&phone=" + phone.val() + "$age=" + age.val();
        $(".loading").fadeIn("slow").html("Loading...");
        $.ajax({
            type: "POST",
            data: dataString,
            url: "php/bookingForm.php",
            cache: false,
            success: function (d) {
                $(".form-control").removeClass("success");
                    if(d == 'success') // Message Sent? Show the 'Thank You' message and hide the form
                        $('.loading').fadeIn('slow').html('<font color="#48af4b">Mail sent Successfully.</font>').delay(3000).fadeOut('slow');
                         else
                        $('.loading').fadeIn('slow').html('<font color="#ff5607">Mail not sent.</font>').delay(3000).fadeOut('slow');
                                }
        });
        return false;
    });
    $("#reset").on('click', function() {
        $(".form-control").removeClass("success").removeClass("error");
    });
    
})



