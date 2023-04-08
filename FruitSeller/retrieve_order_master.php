<?php 
  include "connection.php";
  
  $customerId=$_REQUEST['customer_id']; 
  $entity = 'order_main';
  $orderStatus = 'Undelivered';
  
    $query="select * from $entity WHERE customer_id = '$customerId' AND status = '$orderStatus'";
    
    $execute=mysqli_query($connection,$query);
    $result=array();  
      while(($row=mysqli_fetch_assoc($execute))!=null)  
      {   
      $result['res'][]=$row;   
      }   
 print(json_encode($result));
?>