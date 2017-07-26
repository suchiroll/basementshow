<?php
get_header(); 
?>

<form action = "" method="post">
	<h3 class = formWord > ID:</h3>
	<p> This ID should have been given to you at upon submission of the post </p>
	 <input class = "idinp" type = "number" name = "id" required value>
	 <button> Change Show Information </button>	
	 <select name = "form_month" required>
		   	<option value = "01"> Jan </option>
		   	<option value = "02"> Feb </option>
		   	<option value = "03"> Mar </option>
		   	<option value = "04"> Apr </option>
		   	<option value = "05"> May </option>
		   	<option value = "06"> Jun </option>
		   	<option value = "07"> Jul </option>
		   	<option value = "08"> Aug </option>
			<option value = "09"> Sep </option>
			<option value = "10"> Oct </option>
			<option value = "11"> Nov </option>
			<option value = "12"> Dec </option>
	   </select>

	   <select name = "form_day" required>
		   	<option value = "01"> 01 </option>
		   	<option value = "02"> 02 </option>
		   	<option value = "03"> 03 </option>
		   	<option value = "04"> 04 </option>
		   	<option value = "05"> 05 </option>
		   	<option value = "06"> 06 </option>
		   	<option value = "07"> 07 </option>
		   	<option value = "08"> 08 </option>
			<option value = "09"> 09 </option>
			<option value = "10"> 10 </option>
			<option value = "11"> 11 </option>
			<option value = "12"> 12 </option>
			<option value = "13"> 13 </option>
		   	<option value = "14"> 14 </option>
		   	<option value = "15"> 15 </option>
		   	<option value = "16"> 16 </option>
		   	<option value = "17"> 17 </option>
		   	<option value = "18"> 18 </option>
		   	<option value = "19"> 19 </option>
		   	<option value = "20"> 20 </option>
			<option value = "21"> 21 </option>
			<option value = "22"> 22 </option>
			<option value = "23"> 23 </option>
			<option value = "24"> 24 </option>
			<option value = "25"> 25 </option>
		   	<option value = "26"> 26 </option>
		   	<option value = "27"> 27 </option>
		   	<option value = "28"> 28 </option>
		   	<option value = "29"> 29 </option>
		   	<option value = "30"> 30 </option>
		   	<option value = "31"> 31 </option>

	   </select>

	  	<h3 class = formWord> TIME: </h3>	   
	  	<select name = "form_hour" required>
		   	<option value = "01"> 01 </option>
		   	<option value = "02"> 02 </option>
		   	<option value = "03"> 03 </option>
		   	<option value = "04"> 04 </option>
		   	<option value = "05"> 05 </option>
		   	<option value = "06"> 06 </option>
		   	<option value = "07"> 07 </option>
		   	<option value = "08"> 08 </option>
			<option value = "09"> 09 </option>
			<option value = "10"> 10 </option>
			<option value = "11"> 11 </option>
			<option value = "12"> 12 </option>
	   </select>

	   <select name = "form_min" required>
		   	<option value = "00"> 00 </option>
		   	<option value = "15"> 15 </option>
		   	<option value = "30"> 30 </option>
		   	<option value = "45"> 45 </option>
	   </select>

	   <select name ="ampm" required>
		   <option value = "1"> AM </option>
		   <option value = "2"> PM </option>
	   </select>
	 <button> Cancel Show </button>
</form>




<?php get_footer();
?>
