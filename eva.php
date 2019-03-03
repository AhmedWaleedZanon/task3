<html>

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

		
		<?php
		$con = new mysqli("localhost", "root", "","project");
		$sql="select * from donationtype ";
	    $result=mysqli_query($con,$sql);
		
		?>
		Type:<select class="text74"  name="typeId" onchange="show(this.value)">
		<?php 
		while($rows = mysqli_fetch_array($result))
		{
		$ID=$rows['ID'];
		$name=$rows['name'];
		echo"<option value='$ID'>$ID.$name</option>";
		}
		?>  
		
		</select>
		<div id="comments">
		
		</div>
 
		</html>