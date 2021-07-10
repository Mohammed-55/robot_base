<html>
	<head>
	<link rel="stylesheet" href="control1.css">
	<link rel="stylesheet" href="base.css">
	
	<meta name="viewport" content="width=device-width initial-scale=1"/>
	</head>

	<body>
	<h2 style= text-align:center>Arm Control Panel</h2>

<form action="" method= "post">
	<div class="sliders">



	<div class="silderRange">
		<div class="silderValue">

<!-- _________________________engin 1_____________________________________ -->
		<span id="s1">90</span>

		</div>
		<b>Motor 1</b>
		<div class ="field">


		<div class ="value left">0</div>

		<input type="range" name="motor1"  min="0" max="180" value="90" id="in1" steps="1"/>


<div class ="value right">180</div>

</div>

<!-- _________________________engin 2_____________________________________ -->

<div class="silderValue">
<span id="s2" >90</span>
</div>
<b>Motor 2</b>
<div class ="field">
<div class ="value left">0</div>
<input type="range"name="motor2"  min="0" max="180" value="90" id="in2"  steps="1"/>
<div class ="value right">180</div>

</div>
<!-- _________________________engin 3_____________________________________ -->
<div class="silderValue">
<span id="s3" >90</span>
</div>
<b>Motor 3</b>

<div class ="field">
<div class ="value left">0</div>
<input type="range"name="motor3"   min="0" max="180" value="90" id="in3"  steps="1"/>
<div class ="value right">180</div>
</div>
<!-- _________________________engin 4_____________________________________ -->


<div class="silderValue">
<span id="s4" >90</span>
</div>
<b>Motor 4</b>

<div class ="field">
<div class ="value left">0</div>
<input type="range"name="motor4"  min="0" max="180" value="90" id="in4"  steps="1"/>
<div class ="value right">180</div>


</div>

<!-- _________________________engin 5_____________________________________ -->


<div class="silderValue">
<span id="s5" >90</span>
</div>
<b>Motor 5</b>

<div class ="field">
<div class ="value left">0</div>
<input type="range"name="motor5"  min="0" max="180" value="90" id="in5"  steps="1"/>
<div class ="value right">180</div>


</div>

<!-- _________________________engin 6_____________________________________ -->


<div class="silderValue">
<span id="s6" >90</span>
</div>
<b>Motor 6</b>

<div class ="field">
<div class ="value left">0</div>
<input type="range"name="motor6"  min="0" max="180" value="90" id="in6"  steps="1"/>
<div class ="value right">180</div>


</div>
</div>

<script>

const slideValue1= document.querySelector("#s1");
const inputSlider1= document.querySelector("#in1");
inputSlider1.oninput=(()=>{
let value= inputSlider1.value;
slideValue1.textContent= value;

});
const slideValue2= document.querySelector("#s2");
const inputSlider2= document.querySelector("#in2");
inputSlider2.oninput=(()=>{
let value= inputSlider2.value;
slideValue2.textContent= value;

});

const slideValue3= document.querySelector("#s3");
const inputSlider3= document.querySelector("#in3");
inputSlider3.oninput=(()=>{
let value= inputSlider3.value;
slideValue3.textContent= value;

});

const slideValue4= document.querySelector("#s4");
const inputSlider4= document.querySelector("#in4");
inputSlider4.oninput=(()=>{
let value= inputSlider4.value;
slideValue4.textContent= value;

});

const slideValue5= document.querySelector("#s5");
const inputSlider5= document.querySelector("#in5");
inputSlider5.oninput=(()=>{
let value= inputSlider5.value;
slideValue5.textContent= value;

});

const slideValue6= document.querySelector("#s6");
const inputSlider6= document.querySelector("#in6");
inputSlider6.oninput=(()=>{
let value= inputSlider6.value;
slideValue6.textContent= value;

});









</script>






<input style="background-color :#1589ff" type="submit" name="save" value="Save and Play" />
</form>
<h2 style= text-align:center>Base Control Panel</h2>
<form method= "post">
<div class="buttons_direction">
			 
			<div class="direction_content">
				<div class="direction_div forward_direction">
					<input name="im1" type="submit" value="Forward" style="background-color :#1589ff" />
				</div>
				<div class="direction_div left_direction">
					<input name="im2" type="submit" value="Left" style="background-color :#1589ff"/>
				</div>
				<div class="direction_div stop_direction">
					<input  name="im3" type="submit" value="Stop" style="background-color :#1589ff" />
				</div>
				<div class="direction_div backward_direction">
					<input name="im4" type="submit" value="Backward" style="background-color :#1589ff"/>
				</div>
				<div class="direction_div right_direction">
					<input name="im5" type= "submit" value="Right" style="background-color :#1589ff" />
				</div>
			</div>
		</div>
		</form>





	<?php
	$connection = new mysqli("localhost","root","","base_control");
	 $stmt= $connection->prepare("select * from robot_base");
	$stmt->execute();
	
	 $result = $stmt->get_result();
	 
if(isset($_POST['im1'])){

$stmt11= $connection->prepare("UPDATE robot_base SET direction = 'Forward' ");
	
	$stmt11->execute();
}
else if(isset($_POST['im2'])){
$stmt11= $connection->prepare("UPDATE robot_base SET direction = 'Left' ");
	
	$stmt11->execute();
}
else if(isset($_POST['im3'])){
$stmt11= $connection->prepare("UPDATE robot_base SET direction = 'Stop' ");
	
	$stmt11->execute();
}
else if(isset($_POST['im4'])){
$stmt11= $connection->prepare("UPDATE robot_base SET direction = 'Backward' ");
	
	$stmt11->execute();
}
else if(isset($_POST['im5'])){
$stmt11= $connection->prepare("UPDATE robot_base SET direction = 'Right' ");
	
	$stmt11->execute();
}

	$connection = new mysqli("localhost","root","","arm_control");
	 $stmt= $connection->prepare("select * from robots");
	$stmt->execute();
	
	 $result = $stmt->get_result();

	


	    
	         global $motor1;
	        global $motor2;
	       global $motor3;
			global $motor4;
	       global $motor5;
	       global $motor6;
	        if(isset($_POST["save"])){
	         $motor1= $_POST["motor1"];
	        $motor2= $_POST["motor2"];
	        $motor3= $_POST["motor3"];
			$motor4= $_POST["motor4"];
	        $motor5= $_POST["motor5"];
	        $motor6= $_POST["motor6"];

$connection = new mysqli("localhost","root","","arm_control");
	 $stmt11= $connection->prepare("UPDATE robots SET motor1= $motor1 ,motor2= $motor2 ,motor3= $motor3,motor4= $motor4 ,motor5= $motor5,motor6= $motor6");
	
	$stmt11->execute();
	
	$sql= mysqli_query($connection,"select play from robots where play='off'");
if(mysqli_num_rows($sql)>0){
	$stmt4= $connection->prepare("UPDATE robots SET play= 'on'");
	$stmt4->execute();
	
}
else{
	$stmt5= $connection->prepare("UPDATE robots SET play= 'off'");
	$stmt5->execute();
	
}
	}
	
	   
	
	


	
	



	 ?>
	 <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
	</body>

	</html>
