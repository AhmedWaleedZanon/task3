<form action="donationvalue.php" method="post">
<?php

class donationtypeOptions
{ 
public $id ;
public $name ;
public $type ; 
  
  
	
	
	
	function search3($data)
	{
		
		
	$con = new mysqli("localhost", "root", "","project");
		
		for ($x = 0; $x < count($data) ; $x++)
		{
		$sql1="select * from donationoption where id ='$data[$x]' ";
		 $result1=mysqli_query($con,$sql1);
	
		 while($rows = mysqli_fetch_array($result1))
		{
	$type=$rows['type'];
		
		}
		if ($type=="text")
			{
				
            echo "Text:";    
			echo "<input name='typeId' type='text' >";
		 

			
		}if($type=="number")
		{
					echo "<div>";
					echo "Number:"; 
					echo "<input name='optionId' type='number'>";
		echo "</div>";

		}
	
		
}
	
	echo "<input name='submit' type='submit'>";
    } 
    
    
   
    
    
    
}
?>

	<?php 

if(isset($_POST['Submit'])) {

include_once("donationOption.php");

$user = new Crud();
$u=new Crud();


$user->typeId = $_POST['typeId'];
$user->userId =$_POST['userId'];
$user->value =$_POST['value'];


    $u->insert($user);



}
		?>
		
		
		</form>