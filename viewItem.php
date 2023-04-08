<!DOCTYPE html>

<?php include 'connection.php';

  $query = "SELECT * FROM  item_main";

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
   
    <link rel="stylesheet" href=" admin.css" />
    <link rel="stylesheet" href=" nav.css" />
    <link rel="stylesheet" href=" table.css" />
    <link rel="stylesheet" href=" viewItem.css" />
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
            <a href="viewItem.php" style="margin:0px" class="active">View Item</a>
          </div>
          </div>
        
        <a href="order.php">Order</a>
        <a href="orderDetail.php">Order Details</a>
        <a href="paymentDetails.php">Payment Details</a>
        <a href="signIn.php"><button>Logout</button></a>
</div>
      </div>
    </div>
    <table class="mb-4 table-striped">
      <h1 class="title titlefont">View Item</h1>
      <tr>
        <th colspan="100" scope="colgroup" class="tableSearch">
          <input id="search" type="search" placeholder="Search....." />
        </th>
      </tr>
      <tr>
        <th>Item ID:</th>
        <th>Item Name</th>
        <th>Item Unit</th>
        <th>Item Price</th>
        <th>Item Image Url</th>
        <th>Item Type</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>

      <?php   
            while($rows=mysqli_fetch_array($execute))
            {
            ?>
            <tr class="stripcolorr">
                <td><?php echo $rows['item_id'];?></td>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['unit'];?></td>
                <td><?php echo "£".$rows['price'];?></td>
                <td><img class="thumbnail" id="urlImg" src=" <?php echo $rows['img_link'];?>" alt="" /></td>
                
               <?php
                  if($rows['type']== 0){
                    
                      echo "<td>";
                      echo "Fruit";
                      echo "</td>";
                  }
                  else{
                    echo "<td>";
                      echo "Vegetable";
                      echo "</td>";

                  }
               ?>
                
                <td>
          <button>
            <a href="">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="25"
                height="25"
                fill="currentColor"
                class="bi bi-pencil-square"
                viewBox="0 0 16 16"
              >
                <path
                  d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"
                />
                <path
                  fill-rule="evenodd"
                  d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"
                />
              </svg>
            </a>
          </button>
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
    </table>
  </body>
</html>
