<?php

class Crud 
{
public $id ;
public $typeId ;
public $userId ;
public $value ;
     function  insert($MyObj)
    {
		echo $id;
        $con= mysqli_connect('localhost', 'root', '','project');
echo $MyObj->userId;
        $result ="INSERT INTO donationvalue(typeId, userId, value) 
         VALUES 
        ('$MyObj->typeId' , '7' ,'$MyObj->value') ";
        mysqli_query($con,$result);
 
	}
	}


?>