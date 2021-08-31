<!doctype html>
<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title>Friend List</title>
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
	include('LinkToDatabase.php');//link to data base
	$email=$_SESSION["email"];
	
	

	$range=5;//start of pagimg
	if(isset($_REQUEST['pageno'])){
		$pageno=$_REQUEST['pageno'];
		$start=($range*($pageno-1));
	}
	else{
		$pageno=1;
		$start=0;
	}//
	
	
	if (isset ($_REQUEST['submit']) ){
		$check=$_REQUEST['stat'];
	}
	else{
		$check="Friend";
		
	}
	
	if($check=="Unfriend"){
		$email_frnd=$_REQUEST['mail'];
		$sql="DELETE FROM `friends` WHERE (Email='$email' AND Emailf='$email_frnd') OR (Email='$email_frnd' AND Emailf='$email') ";
		$result=$link->query($sql);
		$check="Friend";	
	}
	//get last page
	$sql_all="SELECT U.Pname,U.Email FROM users U,friends F WHERE U.Email=F.Emailf AND F.Email='$email'";
	$result_all=$link->query($sql_all);//get all recornds of not a friend
	$last_page=ceil(($result_all->num_rows)/$range);//get last page - list of notFriends
	
	
	?>
	<table>
		<tr><td colspan="2" align="center"><h1>My Friend System</h1><h3><?php echo $_SESSION["Pname"]?>'s Friend List<br>Total Number of Friends is <?php echo $result_all->num_rows;?></h3></td></tr>
	</table>
	<?php
	
	$sql="SELECT U.Pname,U.Email FROM users U,friends F WHERE U.Email=F.Emailf AND F.Email='$email' LIMIT $start, $range";
	$result=$link->query($sql);
	while($raw=$result->fetch_array()){	//list friends
	?>
		<table width="200" border="1">
  		<tbody>
    		<tr>
      		<th><?php echo $raw[0]?></th><td><form name="form" method="post" action=<?php echo $_SERVER['PHP_SELF']?>>
				<input type="hidden" value="Unfriend" name="stat"><!--return contain value unfriend or not-->
				<input type="hidden" name="mail" value=<?php echo $raw[1];?>><!--Return e mail adress of unfriend person-->
				<input type="submit" name="submit" value="Unfriend" ><!--Unfriend button-->
				</form></td>
    		</tr>
  		</tbody>
		</table>

	<?php
		
	}
		
	?><br>
<table>
	<tr>
		<td style="text-align: left;">
		<?php
		if ($pageno>1){//paging
		?>
			<a href="Frindspage.php?pageno=<?php echo $pageno-1; ?>">Previous</a>
		</td>	
		<?php
		}
		if($pageno<$last_page){
		?>
			<td></td><td style="text-align: right;"><a href="Frindspage.php?pageno=<?php echo $pageno+1; ?>">Next</a></td>
		
		
		<?php
		
		}
		
		?>
	</tr>
	<tr><td><p></p></td></tr>
	<tr>
		<td style="text-align: left;"><a href="add friends.php">Add Friends</a><td/>
		<td style="text-align: right;"><a href="HomePage.php">Log Out</a></td>
	</tr>
</table>
</div>
</body>
</html>