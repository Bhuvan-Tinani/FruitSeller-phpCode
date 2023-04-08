<?php 
  include "connection.php";
  
  $entity = 'item_main';
  $item_type=$_REQUEST['item_type']; 
	
    $query="select * from $entity WHERE type = '$item_type'";
    
    $execute=mysqli_query($connection,$query);
    $result=array();  
      while(($row=mysqli_fetch_assoc($execute))!=null)  
      {   
      $result['res'][]=$row;   
      }   
 print(json_encode($result));
?>