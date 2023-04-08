<?php

include "connection.php";
    $entity= 'customer_main';
    $cusEmail=$_REQUEST['customer_email'];
    $query="select email from $entity where email ='$cusEmail'";

      $execute=mysqli_query($connection,$query);

      if (mysqli_num_rows($execute) > 0) {
        
        $row = mysqli_fetch_assoc($execute);
        if($cusEmail==isset($row['email']))
        {
            	echo "email already exists";
        }
      }

else{
  echo "you can create your account";   
}

?>