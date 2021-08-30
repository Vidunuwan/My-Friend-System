<!doctype html>
<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title>Add Friends</title>
<style>
	th{text-align: left;}
	td{text-align: center;}
	table {
  		table-layout: fixed ;
  		width: 100% ;
	}
	div {
  		background-color: lightgrey;
  		width: 500px;
  		border: 3px solid black;
  		padding: 10px;
  		margin: 1px;
}

	
</style>
</head>

<body>
<div>
<?php
	$email=$_SESSION["email"];//get log in email
	$link= new Mysqli('localhost','root','','assignment');//link to data base
	
	
	$range=5;//start of pagimg
	if(isset($_REQUEST['pageno'])){
		$pageno=$_REQUEST['pageno'];
		$start=($range*($pageno-1));
	}
	else{
		$pageno=1;
		$start=0;
	}
	
	if(isset($_REQUEST['submit'])){//check click on Add friend button
		$check=$_REQUEST['stat'];
	}
	else{
		$check="NotFriend";
	}
	
	$sql_all="SELECT * FROM users WHERE Email NOT IN(SELECT Emailf FROM friends WHERE Email='$email') AND Email!='$email'";
	$result_all=$link->query($sql_all);//get all recornds of not a friend
	$last_page=ceil(($result_all->num_rows)/$range);//get last page - list of notFriends

	
	if($check=="Friend"){//if click on Add Friend button this condition is TRUE
		$email_friend=$_REQUEST['mail'];
		$sql1="INSERT INTO friends VALUES('$email','$email_friend')";
		$sql2="INSERT INTO friends VALUES('$email_friend','$email')";
		$result1=$link->query($sql1);
		$result2=$link->query($sql2);
		$check="NotFriend";
	}
	$sql_all="SELECT * FROM friends  WHERE Email='$email'";
	$result_all=$link->query($sql_all);
	$friends_count=$result_all->num_rows;
	?>
	<table>
		<tr><td colspan="2" align="center"><h1>My Friend System</h1><h3><?php echo $_SESSION["Pname"]?>'s Friend List<br>Total Number of Friends is <?php echo $friends_count ?></h3><h2>Add More Friends</h2></td></tr>
		
	</table>
	<?php
	$sql="SELECT Email,Pname FROM users WHERE Email NOT IN(SELECT Emailf FROM friends WHERE Email='$email') AND Email!='$email'LIMIT $start, $range";
	$result=$link->query($sql);
	while($raw=$result->fetch_array()){
		?>
		<table width="200" border="1">
  		<tbody>
    	<tr>
      		<th><?php echo $raw['Pname']?></th>
			<td><?php
			
			$emailf=$raw['Email'];
			$sql_mutual="SELECT  COUNT(Emailf)-COUNT(DISTINCT(Emailf)) AS count FROM friends WHERE Email='$email' OR Email='$emailf'";
			$result_mutual=$link->query($sql_mutual);
			foreach($result_mutual as $Count){
			echo $Count['count'];	
			}
		
				?> mutual friends</td>
			<td><form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
				<input type="hidden" name="stat" value="Friend"><!--stat contain value of the add friend or not-->
				<input type="hidden" name="mail" value=<?php echo $raw['Email'];?>><!--mail contain email adress of user-->
				<input type="submit" name="submit" value="Add Friend" >
				</form>
			</td>
    	</tr>
  		</tbody>
		</table>
	<?PHP	
	}
	
?><br>
	<table>
	<tr>
		<td style="text-align: left;">
		<?php
		if ($pageno>1){
		?>
			<a href="add friends.php?pageno=<?php echo $pageno-1; ?>">Previous</a>
		</td>	
		<?php
		}
		if($pageno<$last_page){
		?>
		<td></td>
		<td style="text-align: right;"><a href="add friends.php?pageno=<?php echo $pageno+1; ?>">Next</a></td>
		
		
		<?php
		
		}
		
		?>
	</tr>
		<tr><td><p></p></td></tr>
	<tr>
		<td style="text-align: left;"><a href="Frindspage.php">Back to<br> Friend List</a><td/>
		<td style="text-align: right;"><a href="HomePage.php">Log Out</a></td>
	</tr>
</table>
</div>
</body>
</html>