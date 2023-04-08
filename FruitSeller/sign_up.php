<?php     
    include "connection.php";  
    
    $cusEmail=$_REQUEST['customer_email']; 
    $cusPassw=$_REQUEST['customer_password']; 
    $cusPhone=$_REQUEST['customer_contact_number']; 
    $cusName=$_REQUEST['customer_name']; 
    $cusAddrs=$_REQUEST['customer_address']; 
    $cusCity=$_REQUEST['customer_city'];
    $cusPincode=$_REQUEST['customer_pincode'];
    
    $entity = 'customer_main';
    
 if($cusEmail == null || $cusPassw == null || $cusPhone == null || $cusName == null || $cusCity == null || $cusPincode == null) 
 {   
    $result['res']="Fill all the Fields"; 
    print(json_encode($result));
  } 
else 
 {  
    $query="insert into $entity(`email`,`password`,`phoneNo`,`name`,`address`,`city`,`pincode`)values('$cusEmail','$cusPassw','$cusPhone','$cusName','$cusAddrs','$cusCity','$cusPincode')";
    
    if (mysqli_query($connection, $query)) {
        echo "Congratulations, your account has been successfully created.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }
 }
?> 
