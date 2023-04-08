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
    <link rel="stylesheet" href=" order.css" />
    <link rel="stylesheet" href=" nav.css" />
    <link rel="stylesheet" href=" table.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="topnav">
      <div class="logo">Admin</div>

      <div class="navright">
        <a href="admin.php">Dashboard</a>
        <a href="customer.php"> customer</a>
        <div class="dropDown">
          <span class="item">Item</span>
          <div class="dropMenu">
            <a href="addItem.php">Add Item</a>
            <a href="viewItem.php">View Item</a>
          </div>
        </div>
        <a href="order.php">Order</a>
        <a href="orderDetail.php">Order Details</a>
        <a href="paymentDetails.php" class="active">payment Details</a>
        <a href="signIn.php"><button>Logout</button></a>
      </div>
    </div>
    <h2 class="title">Payment Details</h2>
    <table>
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
            <tr>
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