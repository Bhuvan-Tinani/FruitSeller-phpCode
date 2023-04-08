<!DOCTYPE html>

<?php include 'connection.php';

//   $order_id = "12345";
//   $customer_id = "12345";

  $orderId = "25";
  $cusId = "12345";
  
  $query = "SELECT * FROM  order_details where order_id = '$orderId' /*AND customer_id = '$cusId'*/ ";

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
   
    <link rel="stylesheet" href=" orderDetails.css" />
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
        <a href="customer.php"> Customer</a>
        <div class="dropDown">
          <span class="item">Item</span>
          <div class="dropMenu">
            <a href="addItem.php">Add Item</a>
            <a href="viewItem.php">View Item</a>
          </div>
        </div>
        <a href="order.php">Order</a>
        <a href="orderDetail.php" class="active">Order Details</a>
        <a href="paymentDetails.php">Payment Details</a>
        <a href="signIn.php"><button>Logout</button></a>
      </div>
      </div>
    </div>

    <h2 class="title titlefont">Order Details</h2>
    <div class="cid"><h3>Customer ID:<?php  echo $orderId; ?></h3></div>
    <div class="orderID"><h3>Order ID:<?php  echo $orderId; ?></h3></div>
    <table class="table-striped">
      <tr>
        <th colspan="100" scope="colgroup" class="tableSearch">
          <input id="search" type="search" placeholder="Search....." />
        </th>
      </tr>
      <tr>
        <th>Item ID</th>
        <th>Item Price</th>
        <th>Item Quantity</th>
        <th>Total Price</th>
      </tr>


      <?php
            while($rows=mysqli_fetch_array($execute))
            {
            ?>
            <tr class="stripcolor">
                <td><?php echo $rows['item_id'];?></td>
                <td><?php echo "₹".$rows['item_price']."/-";?></td>
                <td><?php echo $rows['item_quantity'];?></td>

                <?php
                  $price = (int)$rows['item_price'];
                  $quantity= (int)$rows['item_quantity'];
                  $total_price = (int)$price * $quantity;
                  echo "<td> ";
                  echo "₹".$total_price."/-";
                  echo "</td>";
                ?>
               
            </tr>
            <?php
            }
            ?>
    </table>
  </body>
</html> 
