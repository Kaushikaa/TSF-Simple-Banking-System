<?php 
	session_start();
	include 'connection.php';

	$q="select * from customers";
	$result=mysqli_query($con,$q);
	$row_count=mysqli_num_rows($result);
?>

<html>
<head>
	<title>Customer Details</title>
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
		font-family: Times New Roman, Serif;
		font-size:30px;
		}
		
		td, th {
		border: 1px solid #dddddd;
		text-align: center;
		padding: 8px;
		}

		tr:nth-child(even) {
		background-color: #FFCC00;
		}
		body { -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; font-family: 'Overpass', sans-serif; letter-spacing: 0px; font-size: 17px; color: #8d8f90; font-weight: 400; line-height: 32px; background-color: #edefef; }
		h1, h2, h3, h4, h5, h6 { color: #25292a; margin: 0px 0px 10px 0px; font-family: 'Overpass', sans-serif; font-weight: 700; letter-spacing: -1px; line-height: 1; }
		h1 { font-size: 34px; }
		p { margin: 0 0 20px; line-height: 1.7; }
		.page-header { background: url(trans.jpg)no-repeat; position: relative; background-size: cover; }
		.page-caption { padding-top: 170px; padding-bottom: 174px; }
		.page-title { font-size: 46px; line-height: 1; color: #fff; font-weight: 600; text-align: center; }

		.card-section { position: relative; bottom: 60px; }
		.card-block { padding: 80px; }
		.section-title { margin-bottom: 60px; }
	</style>
</head>
<body >
<div class="nav-scroller bg-warning py-1 mb-2" >
            
              <nav class="nav d-flex justify-content-between">
                <a class="p-2" href="Money_transfer.php">TRANSFER MONEY</a>
                <a class="p-2 " href="index.php">HOME</a>
				<a class="p-2 " href="viewcustomer.php">VIEW CUSTOMER</a>
                <a class="p-2 " href="All_transactions.php">ALL TRANSACTIONS</a>
              </nav>
            </div>
	</div>

	<div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-caption">
                        <h1 class="page-title">MONEY TRANSFER</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page-header-->
    <!-- news -->
    <div class="card-section">
        <div class="container">
            <div class="card-block bg-white mb30">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <!-- section-title -->
                        <div class="section-title mb-0">
						<h2 align=center font-family=arial>Click on the account you want to transfer money from.</h2>
							<table class="flat-table flat-table-1" align=center style="color:#25292a">
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
								<?php echo "<td> <a href = 'transact.php?Name=$row[1]'>$row[1]</a></td>";?>
								<td><?php echo  $row["Email"]; ?></td>
								<td><?php echo  $row["Balance"]; ?></td>
								<tr align = center>
								
								<?php }
								?>
								
								</tr>

								
							</tbody>
							</table>
                        </div>

                    </div>
                </div>
            </div>
		</div>
	<br><br>
	<?php include 'footer.php';?>
    
</body>
</html>