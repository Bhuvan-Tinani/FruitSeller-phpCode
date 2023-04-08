<!DOCTYPE html>

<head>
<style>
  h1{
  color: orange;}
</style>
</head>

<?php      
    include 'connection.php';  

    if (isset($_POST['submit'])){

        $admin_user = $_POST['username'];  
        $admin_passw = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $admin_user = stripcslashes($admin_user);  
        $admin_passw = stripcslashes($admin_passw);  
        $admin_user = mysqli_real_escape_string($connection, $admin_user);  
        $admin_passw = mysqli_real_escape_string($connection, $admin_passw);  
      
        $query = "select * from admin_records where username = '$admin_user' and password = '$admin_passw'";  
        $execute = mysqli_query($connection, $query);  
        $row = mysqli_fetch_array($execute, MYSQLI_ASSOC);  
        $no_rows = mysqli_num_rows($execute);  
          
        if($no_rows == 1){  
           // echo "<h1><center> signIn successful </center></h1>"; 
            //  header("location:admin.php");
            echo "<script>
             
                  window.location.replace('admin.php');

                  </script>";
        }  
        else{  
            echo "<center> <h1 > signIn failed. Invalid username or password.</center></h1>"; 
        }

    }
     
?> 

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fruit signIn/Sign up</title>
    <link rel="stylesheet" href=" signIn.css" type="text/css" />
  </head>
  <body>
    <div class="bg-image"></div>
    <div class="hero">
      <div class="form-box">
       

        <form id="signIn" class="input-group" method="post" >
          <h2>Admin Sign In</h2>

          <input
            type="text"
            class="input-field"
            placeholder="User Id "
            name="username"
            required
          />

          <input
            type="password"
            class="input-field"
            placeholder="Enter password "
            name="password"
            required
          />


          <button type="submit" name="submit" class="submit-btn" style="font: bolder">
           Sign In 
          </button>
        </form>

        </form>
      </div>
    </div>

    <script>
      let x = document.getElementById("signIn");
      let y = document.getElementById("register");
      let z = document.getElementById("btn");

      function register() {
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "110px";
      }

      function signIn() {
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0px";
      }
    </script>
  </body>
</html>