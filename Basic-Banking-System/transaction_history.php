<?php
session_start();
$con=mysqli_connect('localhost','root','','basic_banking_system');
//mysqli_select_db($con,'id8930489_spark');

$q="select * from transaction";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Transactions</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
	<link rel="stylesheet" href="css/transaction_history.css">
	 <link rel="stylesheet" href="css/header.css" >
	
		
	<style>
body{
	background-image: url("bckg.jpg")  ;
	background-size: 100%;
}
</style>
	
	</head>
	<body>
	
	  <div class="topnav">
  <a href="transaction_history.php">TRANSACTION HISTORY</a>
  
 <a href="index.php"><i class="fa fa-home"></i>HOME</a>
</div>
	
	
	
	
		<br>
		<h2 style="color:aliceblue;"><?php echo "ALL TRANSACTIONS"?></h2>
		<table >
			<tr bgcolor="red">
				<th>Sender</th>
				<th>Receiver</th>
				<th>Amount</th>
			</tr>
			<tr>
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr bgcolor="black">
				<td><?php echo $row["Sender"]; ?></td>
				<td><?php echo $row["Receiver"]; ?></td>
				<td><?php echo $row["Amount"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		<br>
		<br>
		
		
		
	</body>
</html>
