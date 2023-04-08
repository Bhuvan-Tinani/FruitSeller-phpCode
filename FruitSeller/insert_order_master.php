<?php     
    include "connection.php";  
    
    $orderDate=$_REQUEST['order_date']; 
    $totalPrice=$_REQUEST['total_price']; 
    $orderStatus=$_REQUEST['order_status']; 
    $customerId=$_REQUEST['customer_id']; 
    
    $entity = 'order_main';
    
 if($orderDate == null || $totalPrice == null || $orderStatus == null || $customerId == null ) 
 {   
    $r['res']="Fields cannot be empty"; 
    print(json_encode($r));
  } 
else 
 {  
    $query="insert into $entity(`o_date`,`totalPrice`,`status`,`customer_id`)values('$orderDate','$totalPrice','$orderStatus','$customerId')";
    
    if (mysqli_query($connection, $query)) {
        echo "" . mysqli_insert_id($connection);
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }
 }
 
?> 
