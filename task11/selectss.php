<?php
include('./databaseconn.php');
$query="SELECT * FROM students";
$stmt=$conn->prepare($query);
$stmt->execute();
$data=$stmt->fetchAlL();?>


<!DOCTYPE html>




<html lang="en">
<head>
  <title>students data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>students</h2>
             
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>email</th>
      
        <th>update</th>
        <th>delete</th>
      </tr>
    </thead>

    <tbody>
    <?php
    
    foreach($data as $row){echo
      "<tr>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
      
        <td><a href='./uupdd.php?id={$row['contact_info']}'>
        update</a>
    </td>
    <td><a href='./del.php?id={$row['contact_info']}'>
    delete</a>
</td>
    
      </tr>";}?>
    
     
    </tbody>
  </table>
</div>

</body>
</html>
