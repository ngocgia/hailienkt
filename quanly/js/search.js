$(document).ready(function(){
    $( "#datepicker" ).datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: "1930:2030",
        dateFormat: "dd-mm-yy"
    });
    $('#start_time').datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: "2019:2030",
        dateFormat: "dd-mm-yy"
    });
	$('#end_time').datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: "2019:2030",
        dateFormat: "dd-mm-yy"
    });
    $('#ordersearch').on('change',function(){
        
    });
});