<?php
include('./databaseconn.php');
$id=$_GET['id'];
if (isset($_POST['update'])){$name=$_POST['user_name'];
    $email=$_POST['email'];
    $password=$_POST['pwd'];
    if (!empty($name)&&!empty($email)&&!empty($password)){$query="UPDATE students SET name='$name',
    email='$email', password='$password'
    where contact_info='$id'";
    $stmt=$conn->prepare($query);
    $stmt->execute();
        echo "data update successfully";
        # code...
    }
    
    # code...
}?>





<!DOCTYPE html>



<html lang="en">

<head>
  <title>USER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

  <h2>update</h2>
  
  <form method="POST" action ="<?php echo $_SERVER['PHP_SELF']?>">
    <div class="form-group">
    <div class="form-group">
        <label for="name">name:</label>
        <input type="text" class="form-control" id="name" placeholder="enter name" name="user_name">
</div>
      <label for="email">email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    
    
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">


    <button type="submit" name="update" class="btn btn-default" >update students</button>
  </form>
</div>

</body>
</html>