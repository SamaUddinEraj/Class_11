<?php
    include './controllers_1/env.php';
    $view_id = $_REQUEST['id'];
    $query1= "SELECT*FROM datas WHERE id = '$view_id'";
    $result= mysqli_query($connect,$query1);
    $list= mysqli_fetch_assoc($result);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./Form.css">
  <link rel="stylesheet" href="./Home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
 
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
  
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
    <a class="navbar-brand" href="./Home.php">
      <img src="./CV pic 2.jpeg" alt="Logo" style="width:40px;" class="rounded-pill">
    </a>
  </div>
</nav>

<!--Structure of view area start-->
   <section class="mt-5">
      <div class="container">
         <div class="row">
            <div class="col-lg-5 mx-auto">
               <div class="card">
                  <div class="card-header bg-primary text-white">                
                     <h2>Title: <?= $list['title'] ?></h2>
                  </div> 
          
                  <div class="card-body bg-secondary text-white">
                     <p>email: <?= $list['email'] ?></p>
                     <p>number: <?= $list['number']?></p>
                     <p>password: <?= $list['password']?></p>
                     <p>description: <?= $list['description']?></p>
                  </div>
               <div class="card-footer bg-dark text-white">
                  <p>Author is: <?= $list['name']?></p>
               </div>
            </div>
         </div>
      </div>   
   </section>
 <!--Structure of view area end-->  

</body>
