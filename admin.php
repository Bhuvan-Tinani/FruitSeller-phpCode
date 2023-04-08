<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href=" admin.css" />
    <link rel="stylesheet" href=" nav.css" />
    <link rel="stylesheet" href=" table.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="topnav">
      <div class="logo">Admin</div>

      <div class="navright">
        <a href="admin.php" class="active">Dashboard</a>
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
        <a href="paymentDetails.php">payment Details</a>
        <a href="signIn.php"><button>Logout</button></a>
      </div>
    </div>
    <h3 class="title">Dashboard</h3>
    <div class="dash">
      <div class="dash-details" id="total-order">
        <div class="dash-detail-title">Total Order</div>
        <div class="dash-detail-num">70</div>
        <div class="dash-detail-month">Jan-May</div>
      </div>
      <div class="dash-details" id="delivered">
        <div class="dash-detail-title">Total delivered</div>
        <div class="dash-detail-num">70</div>
        <div class="dash-detail-month">Jan-May</div>
      </div>
      <div class="dash-details" id="return">
        <div class="dash-detail-title">Return</div>
        <div class="dash-detail-num">70</div>
        <div class="dash-detail-month">Jan-May</div>
      </div>
      <div class="dash-details" id="canclled">
        <div class="dash-detail-title">Canclled</div>
        <div class="dash-detail-num">70</div>
        <div class="dash-detail-month">Jan-May</div>
      </div>
    </div>
    <h3 class="title"></h3>

    <div class="earning">
      <div class="bestSeller">
        <h3>Best Seller</h3>

        <div class="earningImg">
          <img src="download.jpg" alt="" />
          <img src="download.jpg" alt="" />
          <img src="download.jpg" alt="" />
        </div>
        <div class="earningImg">
          <img src="download.jpg" alt="" />
          <img src="download.jpg" alt="" />
          <img src="download.jpg" alt="" />
        </div>
      </div>
      <div class="newItem">
        <h3>New Items</h3>
        <div class="earningImg">
          <img src="download.jpg" alt="" />
          <img src="download.jpg" alt="" />
          <img src="download.jpg" alt="" />
        </div>
        <div class="earningImg">
          <img src="download.jpg" alt="" />
          <img src="download.jpg" alt="" />
          <img src="download.jpg" alt="" />
        </div>
      </div>
    </div>
  </body>
</html>
