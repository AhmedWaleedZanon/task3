





<html>

<body>


<form action="" method="post">
<table>
<tr>
  <td>name</td>

  <td><input type="text" name="name" ></td>

  </tr>
<tr>
  <td>type:</td>

 <td> <input type="text" name="type" ></td>

 </tr>
<tr>
<td></td>
 <td> <input type="submit" value="Submit"></td>
 </tr>
 </table>



​

<?php 

if(isset($_POST['Submit'])) {

include_once("donationOption.php");

$user = new donationtypeOption();
$u=new donationtypeOption();


$user->name = $_POST['name'];
$user->type =$_POST['type'];



    $u->insert($user);



}
		?>

​</form> 

</body>

</html>

​


