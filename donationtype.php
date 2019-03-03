<?php

class donationtypes
{ 
public $id ;
public $name ;

    
    function  insert($obj)
	{
			$con= mysqli_connect('localhost', 'root', '','project');

		$result =" INSERT INTO `donationtype`(`name`) VALUES ('$obj->name') ";
		
		
        mysqli_query($con,$result);


	}
    
    
    
    
}


?>