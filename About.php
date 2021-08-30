<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>About</title>
</head>

<body>
	<p>If Persorn 'x' add you as a friend he's automatically added to your friends list.(Same for Unfriend)</p>
	<h2>Current state of database use for system</h2>
	
	<?php
	$link= new Mysqli('localhost','root','','assignment');
	if($link->connect_error){
		die("Databse is Not Connected");
	}
	else{
		echo "Databse is Connected";
	}
	
	$sql1="SELECT * from friends";
	$sql2="SELECT * from users";
	$result1=$link->query($sql1);
	$result2=$link->query($sql2);
	?>
	
	<p><a href="HomePage.php">Back to Home Page</a></p>
	<p><h3>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Users table</h3>
	<b>Primary Key:</b><u>'Email'</u></p>
	<table width="200" border="1">
  <tbody>
    <tr>
      <th scope="col">Profile Name(Pname)</th>
      <th scope="col">E-mail(Email)</th>
      <th scope="col">Password</th>
    </tr>
	  <?php
	  while($raw2=$result2->fetch_array()){
		  ?>
	  <tr>
      <td scope="col"><?php echo $raw2[0]; ?></td>
      <td scope="col"><?php echo $raw2[1]; ?></td>
      <td scope="col"><?php echo $raw2[2]; ?></td>
    </tr>
	  <?php
	  }
	  ?>
	  
  </tbody>
</table>
<br><br>
<p><h3>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Friends table</h3>
	<b>Primary Key:</b><u>'Email,Emailf'</u><br>
	<b>Forieng Key:</b>'Emailf' Reference to users table 'Email'</p>
<table width="200" border="1">
  <tbody>
    <tr>
      <th scope="col">Email of user(Email)</th>
      <th scope="col">User's Friend's Email(Emailf)</th>
      
    </tr>
	  <?php
	  while($raw1=$result1->fetch_array()){
		  ?>
	  <tr>
      <td scope="col"><?php echo $raw1[0]; ?></td>
      <td scope="col"><?php echo $raw1[1]; ?></td>
    </tr>
	  <?php
	  }
	  ?>
	  
  </tbody>
</table>

</body>
</html>