<?php 
session_start();
$con=mysqli_connect('localhost','root','','basic_banking_system');

$q="select * from basic_banking_system ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
//echo $_SESSION['name'];

?>
<html>
<head>
   <title>CUSTOMER DETAILS</title>
   <link rel="stylesheet" href="css/getdetail.css">
  
    <link rel="stylesheet" href="css/header.css" >
	
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<style>
body{
	background-image: url("bckg.jpg");
	background-size: 100%;
}
</style>
   
</head>


<body >


  <div class="topnav">
  <a href="transaction_history.php">TRANSACTION HISTORY</a>
  
 <a href="index.php"> <i class="fa fa-home"></i>HOME</a>
</div>

	<h1 style="color:aliceblue;">CUSTOMER DETAILS</h1>
    <table background="bckg.jpg">


		<thead bgcolor="red">
			<th>Sr No.</th>
			<th>Name</th>
			<th>Email</th>
			<th>Balance</th>
				<th>View</th>
			
		</thead>
		
		
		<tbody>
		<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 1</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="customer.php" method="post"  class="view">
					<button class="button1" type="submit" name="name" value="Rahul">View</button>
				
				</form>
			</td>
		</tr>
		<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 2</td>
			<td ><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="customer.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Raj">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 3</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="customer.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Simran">View</button>
				</form>
			</td>
		</tr>
     <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 4</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="customer.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Kabir">View</button>
				</form>
			</td>
   

        </tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 5</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="customer.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Riya">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 6</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="customer.php" method="post" class="view">
					<button class="button1" type="submit" name="name" value="Bruhmod">View</button>
				</form>
			</td>
        </tr>
        <tr>
			<?php  
     
				$row=mysqli_fetch_array($result);
			?>
			<td> 7</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="customer.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Mahi">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php   
				$row=mysqli_fetch_array($result);
			?>
			<td> 8</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="customer.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Badshah">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 9</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="customer.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Sania">View</button>
				</form>
			</td>
        </tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 10</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="customer.php" method="post" class="view">
					<button class="button1"type="submit" name="name" value="Ananya">View</button>
				</form>
			</td>
		</tr> 
		</tbody>
	</table><br><br>

</body>
</html>
