<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register Page</title>
<style>
	th{text-align: right;}
	div {
  		background-color: lightgrey;
  		width: 400px;
  		border: 3px solid black;
  		padding: 10px;
  		margin: 0px;
}
	
</style>
</head>

<body>
	<div>
	<?php
	include('LinkToDatabase.php');//link to data base
	$error="";
	
	if(isset($_REQUEST['submit'])){//get form values to variable
		$email=$_REQUEST['email'];
		$pname=$_REQUEST['pname'];
		$paswd1=$_REQUEST['paswd1'];
		$paswd2=$_REQUEST['paswd2'];
		
		if(!empty($email) && !empty($pname) && !empty($paswd1) && !empty($paswd2)){//check every variables are not null
			if($paswd1==$paswd2){ // password conformation
				$sql="SELECT * FROM users";
				$result=$link->query($sql);
				$state=0;//for the pass the value of account is alredy taken or not
				while($raw=$result->fetch_array()){//get data from database and check same values are there
					if ($email==$raw['Email']){
						$error="This e-mail is already taken";
						$state=1;
						break;
					}
					else if($pname==$raw['Pname']){
						$error="Profile name is alredy taken please use another name";
						$state=1;
						break;
					}
				}
				
				if($state==0){
					$sql="INSERT INTO users values('$pname','$email','$paswd2')";
					$result=$link->query($sql);
					if($result){
						//echo "Account created successfully";
						header("Location: HomePage.php");
					}
					else{
						$error="Error";
					}
				}
				
			}
			else{
				$error="Password Conformation is Wrong";
			}
		}
		else{
			$error="Please provide the all details";
		}
	}
	?>
	
	<form name="form" method="post" action=<?php echo $_SERVER['PHP_SELF']?>>
		<table width="0" border="0">
  		<tbody>
		<tr>
			<td colspan="2" align="center"><h1>My Friend System</h1><h3>Registation Page</h3></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><p style="color: red;"><?php echo $error; ?></p></td>
		</tr>
    	<tr>
      		<th width="149" scope="row" align="right">E-mail:</th>
      		<td width="163"><input type="email" name="email" maxlength="30" ></td>
    	</tr>
    	<tr>
      		<th scope="row">Profile name:</th>
      		<td><input type="text" name="pname" maxlength="20"></td>
   	 	</tr>
    	<tr>
      		<th scope="row">Create Password:</th>
      		<td><input type="password" name="paswd1" maxlength="20"></td>
    	</tr>
    	<tr>
      		<th scope="row">Conform Password:</th>
      		<td><input type="password" name="paswd2" maxlength="20"></td>
    	</tr>
		<tr>
			<th><input type="submit" value="Register" name="submit"></th>
			<td><input type="reset" value="Clear" name="reset"></td>
		</tr>
  	</tbody>
	</table>
</form>
<br>
	<a href="HomePage.php">Back to Home Page</a>
</div>
</body>
</html>