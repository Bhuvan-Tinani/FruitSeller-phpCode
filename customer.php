<!DOCTYPE html>

<?php include 'connection.php';

  $query = "SELECT * FROM  customer_main";

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
    <link rel="stylesheet" href=" customer.css" />
    <link rel="stylesheet" href=" nav.css" />
    <link rel="stylesheet" href=" table.css" />
    <title>customer</title>
  </head>
  <body>
    <div class="topnav">
      <div class="logo">Admin</div>

      <div class="navright">
        <a href="admin.php">Dashboard</a>
        <a href="customer.php" class="active"> customer</a>
        <div class="dropDown">
          <span class="item">Item</span>
          <div class="dropMenu">
            <a href="addItem.php">Add Item</a>
            <a href="viewItem.php">View Item</a>
          </div>
        </div>
        <a href="order.php">Order</a>
        <a href="orderDetail.php">Order Details</a>
        <a href="signIn.php"><button>Logout</button></a>
      </div>
    </div>
    <h2 class="title">Customer Details</h2>
    <table>
      <tr>
        <th colspan="100" scope="colgroup" class="tableSearch">
          <input id="search" type="search" placeholder="Search....." />
        </th>
      </tr>
      <tr>
        <th>cID(PK)</th>
        <th>Email</th>
        <th>Password</th>
        <th>c_number</th>
        <th>Address</th>
        <th>city</th>
        <th>pincod</th>
        <th>Delete</th>
      </tr>

      <?php
            while($rows=mysqli_fetch_array($execute))
            {
            ?>
            <tr>
                <td><?php echo $rows['customer_id'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['password'];?></td>
                <td><?php echo $rows['phoneNo'];?></td>
                <td><?php echo $rows['address'];?></td>
                <td><?php echo $rows['city'];?></td>
                <td><?php echo $rows['pincode'];?></td>

                
        <td>
          <button>
            <a href="">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
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