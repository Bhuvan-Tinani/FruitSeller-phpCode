<?php
//error_reporting(0);
?>
<?php include 'connection.php';

//echo $path = $_SERVER['HTTP_REFERER'];
    // }
//echo "<p> <font color=blue>$path . (path)</font> </p></br>";

if (isset($_POST['submit'])) { 

        $item_id = $_POST["itemID"]; 
        $name = $_POST["itemName"]; 
        $unit = $_POST["itemUnit"];
        $itemPrice = $_POST["itemPrice"]; 
        //$itemImg = $_POST["itemImg"]; 
        $itemImg = $_FILES["itemImg"]["name"];
	    $tempname = $_FILES["itemImg"]["tmp_name"];
	    $folder = "Images/" . $itemImg;
        $type = $_POST["type"];

        echo "ID is = ". $type .'</br>'; 
        // echo "Name is = ". $NAME .'</br>'; 
        // echo "Password is = ". $Pass .'</br>'; 
        
        echo "filename = $itemImg";
        echo "  tempname = $tempname";
		echo "<p> <font color=blue>$folder folder name</font> </p></br>";

        if(move_uploaded_file($tempname, $folder)){
            $link = "https://prolonged-lake.000webhostapp.com/".$folder; 
            $query = "INSERT INTO  item_main ( item_id ,  name ,  unit ,  price ,  img_link ,  type ) VALUES ('$item_id','$name', '$unit','$itemPrice','$link', '$type')";

            if ($connection->query($query) == TRUE) {

                echo "New record created successfully";
            } 
            else{
                echo "Error: " . $query . "<br>" . $connection->error;
            }
            echo "Image uploaded successfully";
        }
        else{
			echo "Failed to upload image";
        }  
          $connection->close();
     
    } 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
    href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap"
    rel="stylesheet"
  />
    <link rel="stylesheet" href=" addItem.css" />
<link rel="stylesheet" href=" nav.css">
    <link rel="stylesheet" href=" table.css">    <title>Document</title>
  </head>
  <body>
    <div class="topnav">
      <div class="logo">Admin</div>

      <div class="navright">
        <a href="admin.php" >Dashboard</a>
        <a href="customer.php"> customer</a>
        <div class="dropDown">
          <span class="item">Item</span>
          <div class="dropMenu">
  
          <a href="addItem.php" class="active">Add Item</a>
          <a href="viewItem.php">View Item</a>
        </div>
      </div>
        <a href="order.php">Order</a>
        <a href="paymentDetails.php">payment Details</a>
        <a href="orderDetail.php">Order Details</a>
<a href="signIn.php"><button>Logout</button></a>
    </div>
    </div>
    <h1 class="title"> Add Item</h1>
    <div class="add">
    <form method="post" action ="addItem.php" enctype="multipart/form-data"> 
      <div class="addItemInput">
      <label for="itemID"> (PK)Item ID: </label>
      <input
        type="number"
        name="itemID"
        id="itemID"
        placeholder="Item ID"
        required
      /> </div>
      <div class="addItemInput">
      <label for="itemName">Item Name: </label>
      <input
        type="text"
        name="itemName"
        id="itemName"
        placeholder="Item name"
        required
      /> </div>
      <div class="addItemInput">
      <label for="item">Item Unit: </label>
      <input
        type="number"
        name="itemUnit"
        id="itemUnit"
        placeholder="Item Unit"
        required
      /> </div>
      <div class="addItemInput">
      <label for="item">Item Price: </label>
      <input
        type="number"
        name="itemPrice"
        id="itemPrice"
        placeholder="Price"
        required
      /> </div>
      <div class="addItemInput">
      <label for="item">Item Image Url: </label>

      <input
        type="file"
        name="itemImg"
        id="itemImg"
        placeholder="Item Image Url"
        
        required
      /> </div>
      <div class="addItemInput">
      <label for="item">Item Type: </label>
      <select name="type" id="itemType">
        <option value="selected" selected disabled="">Select Item type</option>
        <option value="0">Fruit</option>
        <option value="1">Vegitable</option>

      </select>
     
      
 </div>
      <button name = "submit" type="submit" class="addItemBtn">ADD ITEM</button>
      </div>
    </form>
  </body>
</html>