<?php
   session_start();
?>

<?
   error_reporting(E_ALL);
   ini_set("display_errors", 1);
?>

<html>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="view.css">
    <title>Euromed 2016: Conference Registration</title>
    <body>
        <div id="frame">
            <div id="page">
                <a name="top"></a>
                <div id="header">
                    <div class="img">
                        <a href="index.php">
                            <img class="logo" src="images/logo.png"/>
                        </a>
                    </div>
                    <div class="search_bar">
                        <form action="search_results.php">
                            <input type="text" id="fname" name="firstname" placeholder="Search for papers, speakers, etc.">
                            <input type="submit" value="Search">
                        </form>
                    </div>
                    <div class="login">
                        <?php
                           if(!isset($_SESSION['user']) ){
                              echo "<a href=\"login.php\"><button>Login</button></a>";
                              echo "<a href=\"register.php\"><button>Sign Up</button></a>";
                            }
                            else {
                              $user_name=$_SESSION['user'];
                              echo "<a href=\"profile.php\"><button class=\"logged_in\">$user_name</button></a>";
                              echo "<a href=\"logout.php\"><button class=\"logged_in\">Logout</button></a>";
                            }
                        ?>
                    </div>
                </div>
                <div id="navigation">
                    <a href="index.php">Home</a> <font size="3" class="arrow">&#8594;</font> <a href="conference_registration.php">Conference Registration</a>
                </div>

                <div class=side_menu>
                     <ul>
                      <li><a href="learn_more.php">More about Euromed 2016</a></li>
                      <li><a href="programme.php">Programme</a></li>
                      <li class="active"><a href="conference_registration.php">Conference Registration</a></li>
                      <ul>
                        <li><a href="conference_registration/payment.php">Payment</a></li>
                      </ul>
                      <li><a href="speakers_and_researchers.php">Speakers & Researchers</a></li>
                      <li><a href="submitted_papers.php">Submitted Papers</a></li>
                      <li><a href="exhibitions.php">Exhibitions</a></li>
                      <li><a href="location_and_access.php">Location & Access</a></li>
                      <li><a href="sponsors.php">Sponsors</a></li>
                      <li><a href="previous_conferences.php">Previous Conferences</a></li>
                    </ul>
                </div>
                <div class="page_content">
                    <div><h1>Conference Registration</h1></div>
                    <p>Register now!</p>
<!-- <form method="post"> -->
		

	
<!-- </form> -->
	

	<form method="post"  role="form" >
	
		<div class="myform_options">
	<div class="title_options"> 
	 <h2>Registration fees (Entire Program)</h2>
	 </div>
	 
	 <div class="table_options">
	<table  width="100%">
		<thead>
			<tr>
			<th></th>
			<th class="reg-not-available"><s>Early Registration</s> CLOSED <br>Until 24 Oct. 2016</th><th class="reg-not-available"><s>Late Registration</s> CLOSED <br>25 Oct. 2016</th>			<th>Persons</th>
			</tr>	
		</thead>
		<tbody>
			<tr><td>Students</td><td><label><s>&euro;&nbsp;360</s></label></td><td><label><s>&euro;&nbsp;450</s></label></td><td><select style="width:70px;" name="students-entire" id="students-entire" class="form-control persons_registration" required><option value="">0</option><option value="[1">1</option><option value="[2">2</option><option value="[3">3</option><option value="[4">4</option><option value="[5">5</option><option value="[6">6</option><option value="[7">7</option><option value="[8">8</option><option value="[9">9</option><option value="[10">10</option></select></td></tr><tr><td>Non students</td><td><label><s>&euro;&nbsp;440</s></label></td><td><label><s>&euro;&nbsp;500</s></label></td><td><select style="width:70px;" name="non students-entire" id="non-entire" class="form-control persons_registration" required><option value="">0</option><option value="[1">1</option><option value="[2">2</option><option value="[3">3</option><option value="[4">4</option><option value="[5">5</option><option value="[6">6</option><option value="[7">7</option><option value="[8">8</option><option value="[9">9</option><option value="[10">10</option></select></td></tr>		</tbody>






	</table>

	<div>
		<br>
		<p>
		(Included Conference Bag, and Lunch with 2 coffee breaks)		</p>
	</div>
	

<div class=" name_persons" >
	<table width="100%">
		<thead id="header_p_entire">
		</thead>
		<tbody id="p-students-entire">



		</tbody>
		<tbody id="p-non-entire">

	
		</tbody>
	</table>
</div>



	</div>
	</div> 
	<div class="myform_options">
	<div class="title_options"> 
	 <h2>Registration fees (Daily Program)</h2>
	 </div>
	 
	 	 		<div class="row reg-days">
	 			<div class="col-sm-4"> 
				  <label for="daily-days">Number of days:</label>
  				  <select  id="daily-days" name="daily-days" style="width:60px;">
				  <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>				  </select>
				 </div> 
			</div>
	 	<div class="table_options">
	<table  width="100%">
		<thead>
			<tr>
			<th></th>
			<th class="reg-not-available"><s>Early Registration</s> CLOSED <br>Until 24 Oct. 2016</th><th class="reg-not-available"><s>Late Registration</s> CLOSED <br>25 Oct. 2016</th>			<th>Persons</th>
			</tr>	
		</thead>
		<tbody>
			<tr><td>Students</td><td><label><s>&euro;&nbsp;125</s></label></td><td><label><s>&euro;&nbsp;155</s></label></td><td><select style="width:70px;" name="students-daily" id="students-daily" class="form-control persons_registration" required><option value="">0</option><option value="[1">1</option><option value="[2">2</option><option value="[3">3</option><option value="[4">4</option><option value="[5">5</option><option value="[6">6</option><option value="[7">7</option><option value="[8">8</option><option value="[9">9</option><option value="[10">10</option></select></td></tr><tr><td>Non students</td><td><label><s>&euro;&nbsp;180</s></label></td><td><label><s>&euro;&nbsp;190</s></label></td><td><select style="width:70px;" name="non students-daily" id="non-daily" class="form-control persons_registration" required><option value="">0</option><option value="[1">1</option><option value="[2">2</option><option value="[3">3</option><option value="[4">4</option><option value="[5">5</option><option value="[6">6</option><option value="[7">7</option><option value="[8">8</option><option value="[9">9</option><option value="[10">10</option></select></td></tr>		</tbody>






	</table>

	<div>
		<br>
		<p>
		(Included Lunch with 2 coffee breaks)
		</p>
	</div>
	
	
<div class=" name_persons_daily" >
<table width="100%">
		<thead id="header_p_daily">
		</thead>
		<tbody id="p-students-daily">
			</tbody>
		<tbody id="p-non-daily">

				</tbody>
	</table>
	
</div>


	</div>
	</div> 

<div class="myform_options">
	<div class="title_options">
		<h2>Options</h2>
	</div>
	<div class="table_options">
		<table style="width: 100%">
	
		<tr><td><input id="Conference Bag" type="checkbox" name="options[]" value="15[70"></td><td><label for="Conference Bag">Conference Bag</label></td><td style="padding-left:10px;"></td><td>&euro;&nbsp;70</td><td>Quantity: <select class="options-quantity" id="options-15" name="15" style="width:60px;"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select></td></tr><tr><td><input id="Excursion" type="checkbox" name="options[]" value="18[35"></td><td><label for="Excursion">Excursion</label></td><td style="padding-left:10px;"></td><td>&euro;&nbsp;35</td><td>Quantity: <select class="options-quantity" id="options-18" name="18" style="width:60px;"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select></td></tr><tr><td><input id="Lunch with 2 coffee breaks" type="checkbox" name="options[]" value="19[40"></td><td><label for="Lunch with 2 coffee breaks">Lunch with 2 coffee breaks</label></td><td style="padding-left:10px;">for Accompanied persons</td><td>&euro;&nbsp;40</td><td>Quantity: <select class="options-quantity" id="options-19" name="19" style="width:60px;"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select></td></tr><tr><td><input id="Social Dinner" type="checkbox" name="options[]" value="20[40"></td><td><label for="Social Dinner">Social Dinner</label></td><td style="padding-left:10px;">for Accompanied persons</td><td>&euro;&nbsp;40</td><td>Quantity: <select class="options-quantity" id="options-20" name="20" style="width:60px;"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select></td></tr>	
		</table>
	</div>
</div>


	

	<div>
		<h2>Total cost of Registration to EuroMed2016</h2>
		<table>
			<tr>
				<th></th>
				<th>Total Costs (&euro;)</th>
			</tr>
							<tr>
					<td>Registration Fees</td>
					<td id="regTotal" align="right">0.00</td>
				</tr>
							<tr>
					<td>Other Options</td>
					<td  id="options_total" align="right">0.00</td>
				</tr>
							<!-- <tr>
					<td>Car Rental</td>
					<td id="car_rental_total" align="right">0.00</td>
				</tr> -->
			
			<tr style="border-top: 1px solid black;">
				<td>Total Amount</td>
				<td id="total_amount" align="right">0.00</td>
				<input type="hidden" name="total_amount" value="0.00" />
			</tr>
		</table>
	</div>
	
	<input type="hidden" name="save" value="savemode">
	
		</form>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
<script type="text/javascript">
	


	function update_total_amount(){
		var total = 0;

		var regfees = $("#regTotal").html();
		if (regfees != null) {
			total += parseInt(regfees);

		}

		var opt_value = $("#options_total").html();
		if (opt_value != null){
			total += parseInt(opt_value);
		}

		var hotel_value = $("#hotel_total").html();
		if (hotel_value != null ) {
			total += parseInt(hotel_value);
		}

		var transp_value = $("#transp_total").html();
		if (transp_value != null ) {
			total += parseInt(transp_value);
		}

		var car_rental_value = $("#car_rental_total").html();
		if (car_rental_value != null ) {
			total += parseInt(car_rental_value);
		}

		$("#total_amount").html(total.toFixed(2));
		$("input[name='total_amount']").val(total);
	}

	// function update_regfees(){
	// 	var days_p = 1;
	// 	var type = $("input[name='regfees']:checked").attr('id');
	// 	if (type =='daily'){
	// 		days_p = $("#daily-days").val();
	// 	}else
	// 		days_p=1;	



	// 	var reg_value = $("input[name='regfees']:checked").val();
	// 	if ( reg_value != null ){
	// 		var value =reg_value.split('[')
	// 		var regTotal = days_p * value[1];
		
	// 		$("#regTotal").html(regTotal.toFixed(2));
	// 	}

	// 	update_total_amount();
	// }


	function persons_init(element,count){
		var el= "#"+element;
		var pre_value= $(el).children().length;

		count = count - pre_value;
		var type = '';

		if ( element.indexOf('student') != -1){
			type = 'Student';
		}else {
			type = 'Non Student'; 
		}

		var p_program = '';

		if ( element.indexOf('entire') != -1){
			p_program = 'Entire';
		}else {
			p_program = 'Daily'; 
		}

		var row ='';

			for (var i = 0; i<count; i++) {
				row+='<tr><td><select name="psalutation[]"><option value="Mr.">Mr.</option><option value="Mrs.">Mrs.</option><option value="Miss">Miss</option><option value="Dr.">Dr.</option></select></td><td><input type="text" class="" name="pname[]" required></td><td><input type="text" class="" name="plastname[]" required></td><td><input type="text" class="" value="'+ type+'" name="ptype[]" readonly></td><td><input type="hidden" value="'+p_program+'" name="pprogram[]"></td></tr>'
			}
		
		$(el).append(row);


	}

	function name_persons_init(){


		var sum_entire_students=0;
		var sum_entire_non=0;
		var sum_daily_students=0;
		var sum_daily_non=0;


		var stu_entire = $("#students-entire").val().split('[');
		var non_entire = $("#non-entire").val().split('[');
		var stu_daily = $("#students-daily").val().split('[');
		var non_daily = $("#non-daily").val().split('[');

		sum_entire_students  = parseInt(stu_entire[2]);
		sum_entire_non = parseInt(non_entire[2]);
		sum_daily_students = parseInt(stu_daily[2]);
		sum_daily_non = parseInt(non_daily[2]);

		if (isNaN(sum_entire_students)){
			sum_entire_students=0;
		}
		if (isNaN(sum_entire_non)){
			sum_entire_non=0;
		}
		if (isNaN(sum_daily_students)){
			sum_daily_students=0;
		}
		if (isNaN(sum_daily_non)){
			sum_daily_non=0;
		}

		$('#header_p_entire').empty();

		if (sum_entire_students != 0 || sum_entire_non != 0){
		
			$('#header_p_entire').append('<tr><th>Salutation</th><th>Name</th><th>Lastname</th><th>Type</th></tr>');
		}


		$('#header_p_daily').empty();

		if (sum_daily_students != 0 || sum_daily_non != 0){
		
			$('#header_p_daily').append('<tr><th>Salutation</th><th>Name</th><th>Lastname</th><th>Type</th></tr>');
		}

		persons_init("p-students-entire",sum_entire_students);

		persons_init("p-non-entire",sum_entire_non);

		persons_init("p-students-daily",sum_daily_students);

		persons_init("p-non-daily",sum_daily_non);




	}


	function name_persons_title(){

		var sum_entire_students=0;
		var sum_entire_non=0;
		var sum_daily_students=0;
		var sum_daily_non=0;


		var stu_entire = $("#students-entire").val().split('[');
		var non_entire = $("#non-entire").val().split('[');
		var stu_daily = $("#students-daily").val().split('[');
		var non_daily = $("#non-daily").val().split('[');

		sum_entire_students  = parseInt(stu_entire[2]);
		sum_entire_non = parseInt(non_entire[2]);
		sum_daily_students = parseInt(stu_daily[2]);
		sum_daily_non = parseInt(non_daily[2]);

		if (isNaN(sum_entire_students)){
			sum_entire_students=0;
		}
		if (isNaN(sum_entire_non)){
			sum_entire_non=0;
		}
		if (isNaN(sum_daily_students)){
			sum_daily_students=0;
		}
		if (isNaN(sum_daily_non)){
			sum_daily_non=0;
		}

		var sum = sum_entire_students + sum_entire_non + sum_daily_students + sum_daily_non ;

		$('#header_p_entire').empty();
		$('#header_p_daily').empty();


		

		if (sum_entire_students != 0 || sum_entire_non != 0){
		
			$('#header_p_entire').append('<tr><th>Salutation</th><th>Name</th><th>Lastname</th><th>Type</th></tr>');
		}


		

		if (sum_daily_students != 0 || sum_daily_non != 0){
		
			$('#header_p_daily').append('<tr><th>Salutation</th><th>Name</th><th>Lastname</th><th>Type</th></tr>');
		}

		
	}



	function name_persons2() {

		name_persons_title();
		

		var cur = $(this).attr('id');
		
		var value =$(this).val().split('[');
		var	cur_val = parseInt(value[2]);

		if (isNaN(cur_val)){
			cur_val = 0;
		}

	 	var element = '#p-'+cur; 
		var pre_value= $(element).children().length;
		console.log('pre '+pre_value+'  cur: '+ cur_val);

		


		var type = '';

		if ( cur.indexOf('student') != -1){
			type = 'Student';
		}else {
			type = 'Non Student'; 
		}

		var p_program = '';

		if ( cur.indexOf('entire') != -1){
			p_program = 'Entire';
		}else {
			p_program = 'Daily'; 
		}


		if ( pre_value < cur_val ){
			var row ='';

			for (var i = pre_value; i<cur_val; i++) {
				row+='<tr><td><select name="psalutation[]"><option value="Mr.">Mr.</option><option value="Mrs.">Mrs.</option><option value="Miss">Miss</option><option value="Dr.">Dr.</option></select></td><td><input type="text" class="" name="pname[]" required></td><td><input type="text" class="" name="plastname[]" required></td><td><input type="text" class="" value="'+ type+'" name="ptype[]" readonly></td><td><input type="hidden" value="'+p_program+'" name="pprogram[]"></td></tr>'
			}

			$(element).append(row);

		}else {

			var new_element = element+' tr:last';
			for (var i = pre_value; i>cur_val; i--) {

				$(new_element).remove();
			}
		}


		

	}



	function update_regfees(){
		var sum=0;
		var days_p = 1;
		var stu_entire = $("#students-entire").val();
		var non_entire = $("#non-entire").val();
		var stu_daily = $("#students-daily").val();
		var non_daily = $("#non-daily").val();
		if (stu_entire !=null && stu_entire !=''){
			var value =stu_entire.split('[');
			sum+=value[1] * value[2];
		}

		if (non_entire !=null && non_entire !=''){
			var value =non_entire.split('[');
			sum+=value[1] * value[2];
		}

		if (stu_daily !=null && stu_daily !=''){
			var value =stu_daily.split('[');
			days_p = $("#daily-days").val();
			sum+=value[1] * value[2] *days_p;
		}

		if (non_daily !=null && non_daily !=''){
			var value =non_daily.split('[');
			days_p = $("#daily-days").val();
			sum+=value[1] * value[2]*days_p;
		}

		$("#regTotal").html(sum.toFixed(2));	

		update_total_amount();
	}
	function update_options_total(){
		var sum_options =0.00;
		$.each($("input[name='options[]']:checked"),function(){
			var value =$(this).val().split('[')
			var key = value[0];
			var quantity =1;
			var temp_id = "#options-";
			var quantity_id = temp_id.concat(key);
			if ($(quantity_id).val()!= null){
				quantity= parseInt($(quantity_id).val());	
			}
			sum_options += parseInt(value[1]) * quantity;
		});
		
		$("#options_total").html(sum_options.toFixed(2));
		update_total_amount();
	}

	function update_accomondation(){
		var chkin = $("input[name='chkin']").val();
		var chkout = $("input[name='chkout']").val();
	    var	days;
	    var date = 0;
	    var price = 0;	
		if (chkin != null && chkout != null){
			//Get 1 day in milliseconds
			var one_day=1000*60*60*24;

			var parts_chkin = chkin.split("/");
   			var date1 = new Date(parts_chkin[2], parts_chkin[1] - 1, parts_chkin[0]);	

			var parts_chkout = chkout.split("/");
   			var date2 = new Date(parts_chkout[2], parts_chkout[1] - 1, parts_chkout[0]);	

			// var date1 = new Date(chkin);
			// var date2 = new Date(chkout);


			// Convert both dates to milliseconds
			var date1_ms = date1.getTime();
			var date2_ms = date2.getTime();

			// Calculate the difference in milliseconds
			var difference_ms = date2_ms - date1_ms;
			
			// Convert back to days and return
			days = Math.round(difference_ms/one_day);

			date = 1;
		}
		var hotel_value = $("input[name='hotels']:checked").val();
		var hotel_price;
		if (hotel_value !=null) {
			var value = hotel_value.split("[");
			hotel_price = value[2];
			price = 1;
		}
			
		if (days > 0){
			$("#acc_days").val(days);
		}else
			$("#acc_days").val('0');

		if (days > 0 && price == 1){
			var total = days * hotel_price;
			$("#hotel_total").html(total.toFixed(2));
		}else{
			$("#hotel_total").html("0.00");
		}
		update_total_amount();

	}

	function update_transportation(){
		var arrival_air = $("#arrival-airport").val();
		var arrival_per = $("#arrival-persons").val();
		var total=0;
		if (arrival_per > 0 ) {
			var value = arrival_air.split("[");
			var price_tmp = value[1].split("|");
			var price;
			if(arrival_per <=4){
				price = price_tmp[0];
			} else{
				price = price_tmp[1];
			} 

			total += parseFloat(price);
		}
		var departure_air = $("#departure-airport").val();
		var departure_per = $("#departure-persons").val();
		if (departure_per > 0 ) {
			var value = departure_air.split("[");
			var price_tmp = value[1].split("|");
			var price;
			if(departure_per <=4){
				price = price_tmp[0];
			} else{
				price = price_tmp[1];
			} 

			total += parseFloat(price);
		}
		
		$("#transp_total").html(total.toFixed(2));
		update_total_amount();
	}

	function reg_fees_required(){
		var stu_entire = $("#students-entire").val();
		var non_entire = $("#non-entire").val();
		var stu_daily = $("#students-daily").val();
		var non_daily = $("#non-daily").val();

		if (stu_entire != '' || non_entire != '' || stu_daily != '' || non_daily != ''){
			$(".persons_registration").removeAttr("required");
		}else{
			$(".persons_registration").attr('required', ''); 
		}
	}

	function update_car_rental(){
		var start = $("input[name='car_start']").val();
		var end = $("input[name='car_end']").val();

	    var	days = 0 ;
		if (start != null && end != null){
			//Get 1 day in milliseconds
			var one_day=1000*60*60*24;

			var parts_start = start.split("/");
   			var date1 = new Date(parts_start[2], parts_start[1] - 1, parts_start[0]);	

			var parts_end = end.split("/");
   			var date2 = new Date(parts_end[2], parts_end[1] - 1, parts_end[0]);	

			// var date1 = new Date(start);
			// var date2 = new Date(end);


			// Convert both dates to milliseconds
			var date1_ms = date1.getTime();
			var date2_ms = date2.getTime();

			// Calculate the difference in milliseconds
			var difference_ms = date2_ms - date1_ms;
			
			// Convert back to days and return
			days = Math.round(difference_ms/one_day);
		}




		var sum_car =0.00;
		$.each($("input[name='rental[]']:checked"),function(){
			var value =$(this).val().split('[')
			var key = value[0];
			sum_car += parseInt(value[1]) * days;
		});
		
		if (days > 0 ){
			$("#car_days").val(days);
			$("#car_rental_total").html(sum_car.toFixed(2));
		}else{
			$("#car_days").val('0');
			$("#car_rental_total").html('0.00');
		}
		update_total_amount();

	}

	$(document).ready(function(){
		
		$("#date_payment" ).datepicker();
    $("#date_payment").datepicker( "option", "dateFormat", "dd/mm/yy" );

    $(".datepicher" ).datepicker();
    $(".datepicher").datepicker( "option", "dateFormat", "dd/mm/yy" );

    $("input[name='chkin']" ).datepicker({ minDate: "10/31/2016", maxDate: "11/05/2016" });// this format is mm/dd/yy
	$("input[name='chkin']").datepicker( "option", "dateFormat", "dd/mm/yy" );

    
	var chkin = $("#chkin").val();
	$("input[name='chkin']").datepicker("setDate", chkin);

    $("input[name='chkout']" ).datepicker({ minDate: "10/31/2016", maxDate: "11/05/2016" });// this format is mm/dd/yy
	$("input[name='chkout']").datepicker( "option", "dateFormat", "dd/mm/yy" );
 
	var chkout = $("#chkout").val();
	$("input[name='chkout']").datepicker("setDate", chkout);

	var arrival_date = $("#arrival_date").val();
	$("input[name='arrival_date']").datepicker("setDate", arrival_date);

	var departure_date = $("#departure_date").val();
	$("input[name='departure_date']").datepicker("setDate", departure_date);

	var date_car_start = $("#car_start").val();
	$("input[name='car_start']").datepicker("setDate", date_car_start);

	var date_car_end = $("#car_end").val();
	$("input[name='car_end']").datepicker("setDate", date_car_end);

	var car_location = $("#car_location_h").val();
	$("#car_rental_location").val(car_location);

	update_regfees();
	$(".persons_registration").change(update_regfees);
	$("#daily-days").change(update_regfees);

	$(".persons_registration").change(reg_fees_required);	

	name_persons_init();
$(".persons_registration").change(name_persons2);	

	reg_fees_required();

	update_options_total();
	$("input[name='options[]']").click(update_options_total);
	$(".options-quantity").click(update_options_total);

	update_accomondation();
	$("input[name='hotels']").change(update_accomondation);
	$("input[name='chkin']").change(update_accomondation);
	$("input[name='chkout']").change(update_accomondation);
	 
	$("input[name='hotels']").click(function (){
		$("input[name='chkin']").attr('required', ''); 
		$("input[name='chkout']").attr('required', ''); 
	});

	update_transportation();
	$(".transportation").change(update_transportation);

	update_car_rental();
	$("input[name='car_start']").change(update_car_rental);
	$("input[name='car_end']").change(update_car_rental);
	$("input[name='rental[]']").click(update_car_rental);

	$("input[name='rental[]']").change(function (){
		if( $("input[name='rental[]']:checked").length > 0 ){
			$("input[name='car_start']").attr('required', ''); 
			$("input[name='car_end']").attr('required', ''); 
			$("#car_rental_location").attr('required', ''); 
		}else	{
			$("input[name='car_start']").removeAttr('required'); 
			$("input[name='car_end']").removeAttr('required'); 
			$("#car_rental_location").removeAttr('required'); 
		}

	});

	if( $("input[name='rental[]']:checked").length > 0 ){
			$("input[name='car_start']").attr('required', ''); 
			$("input[name='car_end']").attr('required', ''); 
			$("#car_rental_location").attr('required', ''); 
	}else	{
		$("input[name='car_start']").removeAttr('required'); 
		$("input[name='car_end']").removeAttr('required'); 
		$("#car_rental_location").removeAttr('required'); 
	}


	});

</script>


            </div>
        </div>
    </div>
                </div>
                <div class="ads_panel">
                        <a href="index.php">
                            <img class="logo" src="images/ad1.png"/>
                        </a>
                        <a href="index.php">
                            <img class="logo" src="images/ad2.jpg"/>
                        </a>
                        <a href="index.php">
                            <img class="logo" src="images/ad3.jpg"/>
                        </a>
                        <a href="index.php">
                            <img class="logo" src="images/ad4.jpg"/>
                        </a>
                </div>
            </div>
            <div id="footer">
                <div style=" height:100%; margin-left:1%;">Copyright: Manos Pitsikalis, Panagiotis Fotopoulos
                    <a href="#top"><button>Back to top</button></a>
                    <a href="404.php" style="float:right; margin-right:1%;">Sitemap</a>
                    <a href="contact.php" style="float:right; margin-right:1%;">Contact Info</a>
                </div>
            </div>
        </div>
    </body>
</html>

