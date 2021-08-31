<?php

$conn = mysqli_connect("localhost", "root", "redhat","login");

if(isset($_POST['login'])){
  $email=$_POST['email'];
  $password=$_POST['password'];


  $sql = "SELECT * FROM `logindata` WHERE email='$email' and password='$password'";
  $qry=mysqli_query($conn, $sql);

  if($qry){
    session_start();
    $_SESSION['loggedIn'] = $email;
    echo "logged in successfully";
    header("location:welcome.php");
  }
  else{
    echo "incorrect password try again";
  }
  
}

?>

<!DOCTYPE html>
<html>
<head><title></title></head>
<style>
    body{   
        background: #eee;  
    }  
    #frm{  
        border: solid gray 1px;  
        width:25%;  
        border-radius: 2px;  
        margin: 120px auto;  
        background: white;  
        padding: 50px;  
    }  
    #btn{  
        color: #fff;  
        background: #337ab7;
        padding: 7px;  
        margin-left: 70%;  
    }  
  </style>
<body> 
  
  <form action="" method="POST">
  <div id = "frm">  
  <h2>Admin Login</h2>
 <p>
              <label> Email: </label>
              <input type="email" name="email" placeholder="adminname"/>
            </p>

<p>
              <label> Password: </label>
              <input type="password" name="password" placeholder="adminpassword"/>
            </p>
<p>
              <input type="submit"  name="login" id="btn" value="login"/>
            </p>
</form>
</div>
</body>
</html>