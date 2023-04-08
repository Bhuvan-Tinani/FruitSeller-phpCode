<?php 
  include "connection.php";
  
  $itemName=$_REQUEST['item_name'];
  $itemType=$_REQUEST['item_type'];
  
	
   $query="select * from item_main WHERE item_name LIKE '%$itemName%' and type = '$itemType'";  // LIKE 'a%'
 $execute=mysqli_query($connection,$query);
   $result=array();  
  while(($row=mysqli_fetch_assoc($execute))!=null)  
  {   
  $result['res'][]=$row;  
  }   
 print(json_encode($result));
?>