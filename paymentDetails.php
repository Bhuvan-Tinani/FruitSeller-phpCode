<!DOCTYPE html>

<?php include 'connection.php';

  $query = "SELECT * FROM  payment_detail";

  $execute = mysqli_query($connection,$query);

  $connection->close();

?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   
    <link rel="stylesheet" href=" order.css" />
    <link rel="stylesheet" href=" nav.css" />
    <link rel="stylesheet" href=" table.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="topnav mt-5 navbar navbar-expand-lg">
      <!-- <div class="logo">Admin</div> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div>
  <p class="topheading">ADMIN PANEL</p>
      <div class="navright collapse navbar-collapse" id="navbarNav">
        <a href="admin.php">Dashboard</a>
        <a href="customer.php">Customer</a>
        <div class="dropDown">
          <span class="item">Item</span>
          <div class="dropMenu">
            <a href="addItem.php" style="margin:0px">Add Item</a>
            <a href="viewItem.php" style="margin:0px">View Item</a>
          </div>
          </div>
     
        <a href="order.php">Order</a>
        <a href="orderDetail.php">Order Details</a>
        <a href="paymentDetails.php" class="active">Payment Details</a>
        <a href="signIn.php"><button>Logout</button></a>
      </div>
    </div>
</div>
    <h2 class="title titlefont">Payment Details</h2>
    <table class="table-striped">
      <tr>
        <th colspan="100" scope="colgroup" class="tableSearch">
          <input id="search" type="search" placeholder="Search....." />
        </th>
      </tr>

      <tr>
        <th>Payment id</th>
        <th>Card Holder Name</th>
        <th>Card Number</th>
        <th>Expiry Month</th>
        <th>Expiry Year</th>
        <th>cvv number</th>
        <th>order id</th>
        <th>Amount</th>
      </tr>

      <?php   
            while($rows=mysqli_fetch_array($execute))
            {
            ?>
            <tr class="stripcolor">
                <td><?php echo $rows['payment_id'];?></td>
                <td><?php echo $rows['card_holder_name'];?></td>
                <td><?php echo $rows['card_no'];?></td>
                <td><?php echo $rows['expiry_month'];?></td>
                <td><?php echo $rows['expiry_year'];?></td>
                <td><?php echo $rows['cvv_no'];?></td>
                <td><?php echo $rows['order_id'];?></td>
                <td><?php echo $rows['amt'];?></td>
            </tr>

        <?php
        }
    ?>
</body>
</html>