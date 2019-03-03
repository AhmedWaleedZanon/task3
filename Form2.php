<html>
<head>
	<title>Add</title>
	
</head>

<body>

	<br/><br/>
	<div id="msg"></div>
	<!--<form action="add.php" method="post" name="form1" onsubmit = "return(validate());">-->
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
</body>
</html>