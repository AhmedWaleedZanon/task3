<?php

class Add
{ 
public $id ;
public $name ;
public $type ; 
  
  
	
	function  insert($MyObj)
	{
		$con= mysqli_connect('localhost', 'root', '','project');
		echo $MyObj->name;
		$result ="INSERT INTO `donationoption`( `name`, `type`) VALUES 
		('$MyObj->name','$MyObj->type')";

		
        if(!mysqli_query($con,$result))
		{
			echo "Error In Connection";
		}
 
  

	}
	}
	?>