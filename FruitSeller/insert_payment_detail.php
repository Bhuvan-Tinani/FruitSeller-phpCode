<?php     
    include "connection.php";  
    
    $cardHolderName=$_REQUEST['card_holder_name']; 
    $cardNo=$_REQUEST['card_no']; 
    $expiryMonth=$_REQUEST['expiry_month']; 
    $expiryYear=$_REQUEST['expiry_year'];
    $cvvNo=$_REQUEST['cvv_no']; 
    $orderId=$_REQUEST['order_id'];
    $amt=$_REQUEST['amt'];  

    //echo "$cardHolderName, $cardNo, $expiryMonth, $expiryYear, $cvvNo, $orderId";
    
    $entity = 'payment_detail';
    
 if($cardHolderName == null || $cardNo == null || $expiryMonth == null || $expiryYear == null || $cvvNo == null || $orderId == null) 
 {   
    $r['res']="Fields cannot be empty"; 
    print(json_encode($r));
  } 
else 
 {  
    $query="insert into $entity (card_holder_name,card_no,expiry_month,expiry_year,cvv_no,order_id,amt) values('$cardHolderName',$cardNo,$expiryMonth,$expiryYear,$cvvNo,$orderId,$amt)";
    //echo $query;
    
    if (mysqli_query($connection, $query)) {
        echo "" . mysqli_insert_id($connection);
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }
 }
 
?> 
