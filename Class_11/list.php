<?php

    include './controllers_1/env.php';
    $query1= "SELECT*FROM datas";
    $result= mysqli_query($connect,$query1);
    $lists= mysqli_fetch_all($result,1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./Home.css">
  <link rel="stylesheet" href="./Home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<!--Navigation Bar-->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="./Home.php">Sama Uddin Eraj</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./Home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./Form.php">Form</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="./list.php">List</a>
      </li>
    </ul> 
  </div>
   <a class="navbar-brand" href="./Home.php">
      <img src="./CV pic 2.jpeg" alt="Logo" style="width:40px;" class="rounded-pill">
   </a>
</div>
</nav>

<!--List-->
<section class="mt-5">
   <div class="container">
   <table class="table table-bordered table-hover">
   <thead >
      <tr style="text-align: center;">    
         <th scope="col">id</th>
         <th scope="col">title</th>
         <th scope="col">name</th>
         <th scope="col">email</th>
         <th scope="col">number</th>
         <th scope="col">password</th>
         <th scope="col">description</th>
         <th scope="col">Action</th>
      </tr>
   </thead>
   <tbody >
      <?php
          foreach($lists as $key=> $list )
          {
            ?>
   <tr style="text-align: center;">
      <th scope="row"><?= ++$key ?></th>
      <td><?=  $list['title'] ?></td>
      <td><?=  $list['name'] ?></td>
      <td><?= $list['email'] ?></td>
      <td><?=  $list['number'] ?></td>
      <td><?=  $list['password'] ?></td>
      <td><?= strlen($list['description']) > 20 ? substr($list['description'],0,20)."...": $list['description'] ?></td>
      <td>
         <div class="btn-group btn-group-sm">
            <a href="./view.php?id= <?= $list['id'] ?>" class="btn btn-info">View</a>
            <a href="./edit.php?id= <?= $list['id'] ?>" class="btn btn-warning">Edit</a>
            <a href="./controllers_1/Delete.php?id= <?= $list['id'] ?>" class="btn btn-danger">Delete</a>
         </div>
      </td>
   </tr>
         
<?php
    }
?>
   </tbody>
   </table>
   </div>
</section> 
</body>
</html>
