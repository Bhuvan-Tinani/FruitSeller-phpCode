<?php 
  include "connection.php";
  
  $orderId=$_REQUEST['order_id']; 
  $entity = 'order_details';
  
  
    $query="select * from $entity WHERE order_id = '$orderId'";
    
    $execute=mysqli_query($connection,$query);
    $result=array();  
      while(($row=mysqli_fetch_assoc($execute))!=null)  
      {   
      $result['res'][]=$row;   
      }   
 print(json_encode($result));
?>