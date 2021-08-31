<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}


.container {
  padding: 16px;
}
}
</style>
</head>
<?php
$conn= mysqli_connect("localhost", "root","","Registration");

if(isset($_POST['submit'])){
  $Username=$_POST['uname'];
  $Password=$_POST['password'];
     
  $sql ="INSERT INTO `newlogin`(`Uname`, `Password`,) VALUES ('".$uname."', '".$password."') ";
  $qry=mysqli_query($conn, $sql);

  if ($qry){
    echo "logged in";
  }
  else{
    echo "No email found";
  }
}
  ?>
<body>

   <h2>Login Form</h2>

 <form action="" method="POST">
    <div class="container">
     <label for="uname"><b>Username</b></label>
     <input type="text" placeholder="Username" name="uname" required>

     <label for="password"><b>Password</b></label>
     <input type="password" placeholder="Password" name="password" required>
        
     <button type="submit"><b>Login</b></button>
     <label><input type="checkbox" checked="checked" name="remember"> Remember me</label>
    </div>

 </form>

</body>
</html>

