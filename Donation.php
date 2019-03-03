
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Doniation</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Different Tab Forms Widget Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
<!-- //for-mobile-apps -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="Doniationcss/font-awesome.min.css" />
<!-- //font-awesome icons -->
<link href="Doniationcss/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="Doniationcss/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&subset=latin-ext" rel="stylesheet">
</head>
<body>
	<div class="main">
		<h1>Donations</h1>
			<div class="w3l_main_grids">
				<div class="agile-w3ls">
						
						<div class="content-1">
							
						</div>
						<div class="agile-nav">
							<nav>
								<ul>
									<li><a class="popup-with-zoom-anim" href="#small-dialog"> Type</a></li>
									<li><a class="popup-with-zoom-anim" href="#small-dialog1"> Options</a></li>
									<li><a class="popup-with-zoom-anim" href="#small-dialog2">donationtypeoption</a></li>
									<li><a class="popup-with-zoom-anim" href="#small-dialog3">lINKING</a></li>
									<div class="clear"></div>
								</ul>
							</nav>
						</div>
					</div>
			</div>
	<!-- small-dialog -->
		<div id="small-dialog" class="mfp-hide w3ls_small_dialog wthree_pop">
			<div class="w3l_main_grid1_w3ls_grid">
				<h3>Add New Type</h3>
					<div class="w3_agile_main_left_grid_w3_agileits">
							<div id="msg"></div>
	<!--<form action="add.php" method="post" name="form1" onsubmit = "return(validate());">-->
	<form action="" method="post" name="form1" >
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			
		
			
			
			
			
			
		
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	
	<?php 

if(isset($_POST['Submit'])) {	

include_once("donationtype.PHP");

$user = new donationtypes();
$u=new donationtypes();


$user->name = $_POST['name'];



	
	$u->insert($user);
	


}
	



?>
​
					</div>
				</div>		
		</div>
	<!-- //small-dialog -->
	<!-- small-dialog1 -->
	<div id="small-dialog1" class="mfp-hide w3ls_small_dialog wthree_pop">
		<div class="w3l_main_grid1_w3ls_grid">
					<h3>Add new Options</h3>
					<div class="w3_agile_main_left_grid_w3_agileits">
							<div id="msg"></div>
	<!--<form action="add.php" method="post" name="form1" onsubmit = "return(validate());">-->
	<form action="" method="post" name="form1" >
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Type</td>
				<td><input type="text" name="type"></td>
			</tr>
		
			
			
			
			
			
		
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	
	<?php 

if(isset($_POST['Submit'])) {	

include_once("donationOption.PHP");

$user = new donationtypeOptions();
$u=new donationtypeOptions();


$user->name = $_POST['name'];
$user->type =$_POST['type'];


	
	$u->insert($user);
	


}
	



?>
					</div>
				</div>
		</div>
	<!-- //small-dialog1 -->
	<!-- small-dialog2 -->
		 <div id="small-dialog2" class="mfp-hide w3ls_small_dialog wthree_pop">
				<div class="w3l_main_grid1_w3ls_grid agileinfo_account_reset">
					<h3>Donationtypeoption</h3>
					<div class="w3_agile_main_left_grid_w3_agileits">
						<script>

function show(str) {
  var xhttp;    
  if (str == "") {
    document.getElementById("comments").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("comments").innerHTML = this.responseText;
    }

     
  };
  xhttp.open("GET", "eva2.php?q="+str, true);
  	
  xhttp.send();
}

	</script>
	<select   name='Owner' onchange="show(this.value)" >
<?php

		$con = new mysqli("localhost", "root", "","project");
		$sql="select * from donationtype ";
	    $result=mysqli_query($con,$sql);
		
		while($rows = mysqli_fetch_array($result))
		{
	      $id=$rows['ID'];
		$type=$rows['name'];
		echo"<option value='$id'>$type</option>";
		}
			echo "</select>";
			
		
		?>
		<div id="comments">
		
		</div>
 
					</div>
				</div>
		</div>
	<!-- //small-dialog2 -->
	<!-- small-dialog3 -->
		 <div id="small-dialog3" class="mfp-hide w3ls_small_dialog wthree_pop">
			<div class="w3l_main_grid1_w3ls_grid">
					<h3>donationtypeoption</h3>
					<div class="w3_agile_main_left_grid_w3_agileits">
						<div id="msg"></div>
	
	<form action="" method="post" name="form1" >
		<table width="25%" border="0">
			<tr> 
				<td>donationtype</td>
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
			</tr>
			
		
			<tr> 
				<td>donationtype</td>
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
			</tr>
			
			
			
			
		
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
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
				</div>	
		</div> 
	<!-- //small-dialog3 -->
		<div class="agileits_copyright">
			<p>© 2018 Different Tab Forms. All rights reserved | Design by </a></p>
		</div>
		<!-- js -->
			<script src="Doniationjs/jquery-2.2.3.min.js"></script> 
		<!-- //js --> 
			<!-- pop-up-box -->
			<script src="Doniationjs/jquery.magnific-popup.js" type="text/javascript"></script>
			<!--//pop-up-box -->
			<script>
				$(document).ready(function() {
					$('.popup-with-zoom-anim').magnificPopup({
						type: 'inline',
						fixedContentPos: false,
						fixedBgPos: true,
						overflowY: 'auto',
						closeBtnInside: true,
						preloader: false,
						midClick: true,
						removalDelay: 300,
						mainClass: 'my-mfp-zoom-in'
					});														
				});
			</script>
			
	</div>
</body>
</html>