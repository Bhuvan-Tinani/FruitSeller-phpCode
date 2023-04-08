<?php     
    include "connection.php";  
    
    $orderId=$_REQUEST['order_id']; 
    $itemId=$_REQUEST['item_id']; 
    $itemName=$_REQUEST['item_name'];
    $itemUrl=$_REQUEST['item_url'];
    $itemQuantity=$_REQUEST['item_quantity']; 
    $itemPrize=$_REQUEST['item_prize']; 
    
    $entity = 'order_details';
    
 if($orderId == null || $itemId == null || $itemName == null || $itemUrl == null || $itemQuantity == null || $itemPrize == null ) 
 {   
    $r['res']="Field cannot be Empty"; 
    print(json_encode($r));
  } 
else 
 {  
    $query="insert into $entity(`order_id`,`item_id`,`item_name`,`item_url`,`item_quantity`,`item_price`)values('$orderId','$itemId','$itemName','$itemUrl','$itemQuantity','$itemPrize')";
    
    if (mysqli_query($connection, $query)) {
        echo "Thank you for Purchaseing !!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }
 }
 
?> 
