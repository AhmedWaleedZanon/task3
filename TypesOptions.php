<?php

class CrudOptions
{ 

public $id ;
public $typeId ;
public $optionId ;




    
    function  insert($obj)
	{
			$con= mysqli_connect('localhost', 'root', '','project');

		$result =" INSERT INTO `donationtypeoption`(`typeId`,`optionId`) VALUES ('$obj->typeId','$obj->optionId') ";
		
		
        mysqli_query($con,$result);


	}
    
    
    
    
}


?>