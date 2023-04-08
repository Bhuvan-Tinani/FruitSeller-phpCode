<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href=" admin.css" />
    <link rel="stylesheet" href=" nav.css" />
    <link rel="stylesheet" href=" table.css" />
    <title>Document</title>
  </head>
  <body>
    <nav class="topnav mt-5 navbar navbar-expand-lg">
      <!-- <div class="logo">Admin</div> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="#navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div>
  <p class="topheading">ADMIN PANEL</p>
      <div class="navright collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a href="admin.php" class="nav-item nav-link active">Dashboard</a>
        <a href="customer.php"> Customer</a>
        <div class="dropDown ">
          <span class="item nav-item nav-link">Item</span>
          <div class="dropMenu">
            <a href="addItem.php" style="margin:0px">Add Item</a>
            <a href="viewItem.php" style="margin:0px">View Item</a>
          </div>
        </div>
        <a href="order.php" class="nav-item nav-link" >Order</a>
        <a href="orderDetail.php"class="nav-item nav-link" >Order Details</a>
        <a href="paymentDetails.php"class="nav-item nav-link" >Payment Details</a>
        <a href="signIn.php"><button>Logout</button></a>
</div>
 </div>
</div>
</nav>
    <h3 class="title">Dashboard</h3>
    
    <div class="dash row">
      <div class="dash-details col pb-5" id="total-order">
        <div class="dash-detail-title dash-title">Total Order</div>
        <div class="dash-detail-num">70</div>
        <div class="dash-detail-month">Jan-May</div>
      </div>
      <div class="dash-details  col" id="delivered">
        <div class="dash-detail-title dash-title">Total delivered</div>
        <div class="dash-detail-num">70</div>
        <div class="dash-detail-month">Jan-May</div>
      </div>
      <div class="dash-details col" id="return">
        <div class="dash-detail-title dash-title">Return</div>
        <div class="dash-detail-num">70</div>
        <div class="dash-detail-month">Jan-May</div>
      </div>
      <div class="dash-details col" id="cancelled">
        <div class="dash-detail-title dash-title">Cancelled</div>
        <div class="dash-detail-num">70</div>
        <div class="dash-detail-month">Jan-May</div>
      </div>
    </div>

    <h3 class="title"></h3>

    <div class="earning mb-4">
      <div class="bestSeller"style="left: 50%;" >
        <h3>Best Seller</h3>

        <div class="earningImg ">
          <img src="static/images/download.jpeg" alt="" />
          <img src="static/images/images.png" alt="" />
          <img src="static/images/download.jpeg" alt="" />
        </div>
        <div class="earningImg">
          <img src="static/images/images.png" alt="" />
          <img src="static/images/download.jpeg" alt="" />
          <img src="static/images/images.png" alt="" />
        </div>
      </div>
      <div class="newItem">
        <h3>New Items</h3>
        <div class="earningImg">
          <img src="static/images/download.jpeg" alt="" />
          <img src="static/images/images.png" alt="" />
          <img src="static/images/download.jpeg" alt="" />
        </div>
        <div class="earningImg">
          <img src="static/images/images.png" alt="" />
          <img src="static/images/download.jpeg" alt="" />
          <img src="static/images/images.png" alt="" />
        </div>
      </div>
    </div>
  </body>
</html>
