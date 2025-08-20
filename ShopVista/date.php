<?php /*?><script>
						var currentDate = new Date();
		var day = currentDate.getDate();
var month = currentDate.getMonth() + 1; // Months are zero-based
var year = currentDate.getFullYear();

// Format the components as strings with leading zeros if needed
var formattedDay = day < 10 ? '0' + day : day;
var formattedMonth = month < 10 ? '0' + month : month;

// Create the final formatted date string
var formattedDate = formattedDay + ', ' + formattedMonth + ', ' + year;
						console.log(formattedDate);
		</script>	<?php */?>
 <?php
			  $currentDate = date('Y-m-d');

// Output the formatted date
echo $currentDate;
			  ?>