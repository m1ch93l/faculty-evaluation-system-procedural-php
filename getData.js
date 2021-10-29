$(document).ready(function(){  	
	$("#employee").change(function() {    
		var id = $(this).find(":selected").val();
		var dataString = 'empid='+ id;    
		$.ajax({
			url: 'getEmployee.php',
			dataType: "json",
			data: dataString,  
			cache: false,
			success: function(empData) {
			   if(empData) {
					$("#errorMassage").addClass('hidden').text("");
					$("#recordListing").removeClass('hidden');							
					$("#empId").text(empData.id);
					$("#empFname").text(empData.fname);
					$("#empLname").text(empData.lname);
					$("#empMname").text(empData.mname);					
				} else {
					$("#recordListing").addClass('hidden');	
					$("#errorMassage").removeClass('hidden').text("No record found!");
				}   	
			} 
		});
 	}) 
});