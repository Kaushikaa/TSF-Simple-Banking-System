<?php 

session_start();
include 'connection.php';

$q="select * from customers";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);

?>

<html>
<head>
	<title>
   Customer Details
	</title>
	<link rel = "stylesheet" type = "text/css" href = "Headerbutton.css">
	
	<link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="Style.css">
        <script src="jquery.min.js"></script>
        <script src="bootstrap.min.js"></script>
	<style>
		
		table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 100%;

		}

		h2{
		font-family: gabriola;
		font-size:50px;
		}
		
		td, th {
		border: 1px solid #dddddd;
		text-align: center;
		padding: 8px;
	
		}

		tr:nth-child(even) {
		background-color: #ffcc00;
		}
		
	</style>
</head>

<body style="background-color:aliceblue">
<div class="nav-scroller bg-warning py-1 mb-2" >
            
              <nav class="nav d-flex justify-content-between">
                <a class="p-2" href="Money_transfer.php">TRANSFER MONEY</a>
                <a class="p-2 " href="index.php">HOME</a>
				<a class="p-2 " href="viewcustomer.php">VIEW CUSTOMER</a>
                <a class="p-2 " href="All_transactions.php">ALL TRANSACTIONS</a>
              </nav>
            </div>

<br>	  
<div class="jumbotron bg-cover text-white" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.4) 0%,rgba(0,0,0,0.4) 100%), url(customer.jpg)">
  <div class="container">
  <h1 class="display-4" align="center">Details of Customer</h1>
  </div>
</div>
    
    <table class="flat-table flat-table-1" align=center style="color:black">
		<thead>
			<th>CUSTOMER ID</th>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>CURRENT BALANCE</th>
		</thead>
		<tbody>
		<tr align = center>
				
			<?php  
				while($row=mysqli_fetch_array($result)){
			?>
			
			<td><?php echo  $row["C_ID"]; ?></td>
			<td><?php echo  $row["Name"]; ?></td>
			<td><?php echo  $row["Email"]; ?></td>
			<td><?php echo  $row["Balance"]; ?></td>
		<tr align = center>
	<?php }
	?>
		</tr>

        
		</tbody>
	</table>
	<br><br>
	<?php include 'footer.php';?>
</body>
</html>