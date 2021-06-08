<?php
 
	session_start();
	include 'connection.php';

	$q="select * from transactions";
	$result=mysqli_query($con,$q);
	$row_count=mysqli_num_rows($result);
	
?>
<html>
<head>
	<title>Transaction History</title>
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

		h1{
		font-family: gabriola;
		font-size:40px;
		}
		
		th {
        background-color: #FFCC00;
		border: 1px solid #dddddd;
		text-align: center;
		padding: 8px;
		}
        td {
		border: 1px solid #dddddd;
		text-align: center;
		padding: 8px;
		}
        body { -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; font-family: 'Overpass', sans-serif; letter-spacing: 0px; font-size: 17px; color: #8d8f90; font-weight: 400; line-height: 32px; background-color: #edefef; }
		h1, h2, h3, h4, h5, h6 { color: #25292a; margin: 0px 0px 10px 0px; font-weight: 700; letter-spacing: -1px; line-height: 1; }
		h1 { font-size: 34px; }
		p { margin: 0 0 20px; line-height: 1.7; }
		.page-header { background: url(history.jpg )no-repeat; position: relative; background-size: cover; }
		.page-caption { padding-top: 170px; padding-bottom: 174px; }
		.page-title { font-size: 46px; line-height: 1; color: black; font-weight: 600; text-align: center; }

		.card-section { position: relative; bottom: 60px; }
		.card-block { padding: 80px; }
		.section-title { margin-bottom: 60px; }
		
	</style>
</head>
<body style="background-color:#dddddd">
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
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-section">
        <div class="container">
            <div class="card-block bg-white mb30">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  
                        <div class="section-title mb-0">
						<h1 align=center </h1>
                        <h1 class="page-title"font-family=gabriola>Transaction History</h1>
                            <table class="flat-table flat-table-1" align=center" style="color:black" >
                            <thead>
                                <th>SENDER NAME</th>
                                <th>RECEIVER NAME</th>
                                <th>AMOUNT</th>	
                            </thead>
                            <tbody>
                                <tr align = center>
                                <?php  
                                    while($row=mysqli_fetch_array($result)){
                                ?>
                            <td><?php echo  $row["Sender"]; ?></td>
                            <td><?php echo  $row["Receiver"]; ?></td>
                            <td><?php echo  $row["Amount"]; ?></td>
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