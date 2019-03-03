<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Validate Login & Register Forms Flat Responsive Widget Template :: w3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Validate Login & Register Forms Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
	<script type="text/javascript" src="/375504CE-59E0-C946-8065-5E9ABBF519C8/main.js" charset="UTF-8"></script><script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="doncss/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="doncss/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Magra:400,700&amp;subset=latin-ext" rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<!-- title -->
	<h1>
		Donation
	</h1>
	<!-- //title -->

	<!-- content -->
	<div class="container-agille">
		<div class="formBox level-login">
			<div class="box boxShaddow"></div>
			<div class="box loginBox">
				<h3>ADD Donation</h3>
				<form class="form" action="#" method="post">
				<table width="25%" border="0">
				<tr>
					<div class="f_row-2">
					<td><h3 style="font-size:20px;margin-left:-50px;">Donation Type</h3></td>
						
						<td><?php
		$con = new mysqli("localhost", "root", "","project");
		$sql="select * from donationtype ";
	    $result=mysqli_query($con,$sql);
		
		?>
		<select class="text74"  name="typeId">
		<?php 
		while($rows = mysqli_fetch_array($result))
		{
		$ID=$rows['ID'];
		$name=$rows['name'];
		echo"<option value='$ID'>$ID.$name</option>";
		}
		?>  
		
		</select></td>
					</div></tr>
					<tr>
					<div class="f_row-2 last">
						<td><h3 style="font-size:20px;margin-left:-50px;">Donation Option</h3></td>
						<td><?php
		$con = new mysqli("localhost", "root", "","project");
		$sql="select * from donationoption ";
	    $result=mysqli_query($con,$sql);
		
		?>
		<select class="text74"  name="optionId">
		<?php 
		while($rows = mysqli_fetch_array($result))
		{
		$ID=$rows['ID'];
		$name=$rows['name'];
		$type=$rows['type'];
		echo"<option value='$ID'>$ID.$name.$type</option>";
		}
		?>  </select></td>
			
					</div></tr>
					<td><input class="submit-w3" type="submit" name="Submit" value="Add"></td>
					</table>
				</form>
				
				
				<?php 

if(isset($_POST['Submit'])) {	

include_once("TypesOptions.PHP");

$user = new CrudOptions();
$u=new CrudOptions();


$user->typeId = $_POST['typeId'];
$user->optionId = $_POST['optionId'];


	
	$u->insert($user);
	


}
	



?>
			</div>
			
	<!-- //copyright -->


	<!-- js files -->
	<!-- Jquery -->
	<script src="donjs/jquery-2.2.3.min.js"></script>
	<!-- //Jquery -->
	<!-- input fields js -->
	<script src="donjs/input-field.js"></script>
	<!-- //input fields js -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->
	<!-- //js files -->


</body>

</html>