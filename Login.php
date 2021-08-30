<!doctype html>
<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title>Login page</title>
<style>
	th{text-align: right;}
	div {
 		background-color: lightgrey;
  		width: 400px;
  		border: 3px solid black;
  		padding: 10px;
  		margin: 1px;
}
</style>
</head>

<body>
	<div>
	<?Php
	$error="";
	$link= new Mysqli('localhost','root','','assignment');//link to data base
	
	if(isset($_REQUEST['submit'])){
		$email=$_REQUEST['email'];
		$password=$_REQUEST['paswd1'];
		
		if(!empty($email) && !empty($password)){//check fields are empty
			$sql="SELECT Pname,Password FROM users WHERE Email='$email'";
			$result=$link->query($sql);
			$raw=$result->fetch_array();//get data from users table and put in array
			
			if($raw && $password==$raw['Password']){//check password and email
				echo "Login succesfull"; 
				$_SESSION["Pname"] =$raw['Pname'];
				$_SESSION["email"] =$email;
				header("Location: Frindspage.php");//if email and password are match load friend list
				
			}
			else{
				$error="Check your e-mail and Password again";
			}
			
			
			
		}
		else{
			$error="Please Enter Details";
		}
	}
		
	
	?>
	
	<form name="form" method="post" action=<?php echo $_SERVER['PHP_SELF']; ?>>
		<table width="0" border="0">
  		<tbody>
		<tr>
			<td colspan="2" align="center"><h1>My Friend System</h1><h3>Log In Page</h3></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><p style="color: red;"><?php echo $error; ?></p></td>
		</tr>
    	<tr>
      		<th width="149" scope="row" align="right" maxlength="30">E-mail:</th>
      		<td width="163"><input type="email" name="email" ></td>
    	</tr>
    	<tr>
      		<th scope="row">Password:</th>
      		<td><input type="password" name="paswd1" maxlength="20"></td>
    	</tr>
		<tr>
			<th><input type="submit" value="Log In" name="submit"></th>
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