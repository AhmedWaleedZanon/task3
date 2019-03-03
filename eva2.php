<html>
<form>
<?php
class donationtypeoption
{
public $name;
public $type;
public $id ;
public $typeId ;
public $optionId ; 
}

$q=$_GET['q'];
		include_once("donationOption.php");
     	$u=new donationtypeOptions();
			$con = new mysqli("localhost", "root", "","project");
		$sql="select * from donationtypeoption where typeid ='$q' ";
	    $result=mysqli_query($con,$sql);
		$data=array();
		$come=array();
		$x=0;
		while($rows = mysqli_fetch_array($result))
		{
	$data[$x]=$rows['optionId'];
	$x++;
			
		}
		$u->search3($data);
		?>
		
	

		</form>

		</html>