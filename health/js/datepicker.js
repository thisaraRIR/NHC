
$(function () {
    $("#datepicker").datepicker();
    // $( "#datepicker" ).datepicker("show");
});

$(function(){
    $("#datepicker").datepicker({
        changeMonth: true,
        changeYear: true
    });
});

$(document).ready(function(){
    $("#datepicker").datepicker({
        beforeShowDay : function(date){
            var day = date.getDay();
            if(date==0){
                return [false];
            }
            else{
                return [true];
            }
        }
    })
})