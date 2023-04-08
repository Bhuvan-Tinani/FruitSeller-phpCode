<?php 
  include "connection.php";
	
    $cusEmail=$_REQUEST['customer_email']; 
    $cusPhone=$_REQUEST['customer_contact_number']; 
    $cusName=$_REQUEST['customer_name']; 
    $cusAddrs=$_REQUEST['customer_address']; 
    $cusCity=$_REQUEST['customer_city'];
    $cusPincode=$_REQUEST['customer_pincode'];
    
    $entity = 'customer_main';
   
   $query="UPDATE $entity SET phoneNo='$cusPhone',name='$cusName',address='$cusAddrs',city='$cusCity',pincode='$cusPincode' WHERE email='$cusEmail'";
   
   //$q=mysqli_query($connection,$query);
 
     
  if (mysqli_query($connection, $query)) 
  {
        echo "Updated Successfully!!";
  } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }
            
    mysqli_close($connection);

?>