<?php 
  include "connection.php";
  
  $enitity = 'customer_main';
	
	$cusEmail=$_REQUEST['customer_email'];
	$query="select * from $enitity WHERE email = '$cusEmail'";
    
    $execute=mysqli_query($connection,$query);
    $result=array();  
      while(($row=mysqli_fetch_assoc($execute))!=null)  
      {   
      $result['res'][]=$row;    
      }   
 print(json_encode($result));
?>