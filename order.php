<!DOCTYPE html>

<?php include 'connection.php';

  $query = "SELECT * FROM  order_main";

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
        <a href="customer.php"> Customer</a>
        <div class="dropDown">
          <span class="item">Item</span>
          <div class="dropMenu">
            <a href="addItem.php" style="margin:0px">Add Item</a>
            <a href="viewItem.php" style="margin:0px">View Item</a>
          </div>
        </div>
        <a href="order.php" class="active">Order</a>
        <a href="orderDetail.php">Order Details</a>
        <a href="paymentDetails.php">Payment Details</a>
        <a href="signIn.php"><button>Logout</button></a>
</div>
      </div>
    </div>
    <h2 class="title titlefont">Order</h2>
    <table class="table-striped mb-5">
      <tr>
        <th colspan="100" scope="colgroup" class="tableSearch">
          <input id="search" type="search" placeholder="Search....." />
        </th>
      </tr>

      <tr>
        <th>Order ID(PK)</th>
        <th>Date</th>
        <th>cID(FK)</th>
        <th>Total Price</th>
        <th>Order Status</th>
        <th>Delete</th>
      </tr>

      <?php   
            while($rows=mysqli_fetch_array($execute))
            {
            ?>
            <tr class="stripcoloor">
                <td><?php echo $rows['o_id'];?></td>
                <td><?php echo $rows['o_date'];?></td>
                <td><?php echo $rows['customer_id'];?></td>
                <td><?php echo "₹".$rows['totalPrice']."/-";?></td>
            
                <td>
            <select name="type" id="itemType">
            <option value="selected" selected disabled="">Ordered</option>
            <option value="packaged">Packaged</option>
            <option value="not">Not Dispatched</option>
            <option value="dispatched">Dispatched</option>
            <option value="delivered">Delivered</option>
          </select>
        </td>

        <td>
          <button>
            <a href="">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="25"
                height="25"
                fill="currentColor"
                class="bi bi-trash"
                viewBox="0 0 16 16"
              >
                <path
                  d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"
                />
                <path
                  fill-rule="evenodd"
                  d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"
                />
              </svg>
            </a>
          </button>
        </td>
            </tr>

        <?php
        }
    ?>
</body>
</html>