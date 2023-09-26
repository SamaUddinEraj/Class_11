<?php
   session_start();
    include './controllers_1/env.php';
    $edit_id = $_REQUEST['id'];
    $query1= "SELECT*FROM datas WHERE id = '$edit_id'";
    $result= mysqli_query($connect,$query1);
    $list= mysqli_fetch_assoc($result);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Page</title>
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

<!--Alert msg-->
      <div class="alert">
        <h4><?php
          echo isset($_SESSION['msg']) ? ($_SESSION['msg']):"" ;
          ?></h4>
     </div>
 <!--User form-->
 <form action="./controllers_1/update.php?id=<?= $list['id'] ?>" method="POST">
  
      <div class="C1">  
      <!--Heading-->
        <div class="text">
        <h1 style="text-align: center;">Please Fill This Form</h1> 
        </div>
      <!--Author's Title-->
        <div class="text">
        <label for="title">Title:</label>
        <input value="<?= $list['title'] ?>" type="text" id="title" name="title" placeholder="Enter the title">
      
        <p class="text-danger">
          <?php
        echo isset($_SESSION['title_error']) ? ($_SESSION['title_error']):"";
        ?>
        </p>

      <!--Author's Name-->
            <div class="text">
            <label for="name">Author's name:</label>
            <input value="<?= $list['name'] ?>" type="name" id="name" name="name" placeholder="Enter your name" >
            
            <p class="text-danger">
            <?php
               echo isset($_SESSION['name_error']) ? ($_SESSION['name_error']):""; 
            ?>
            </p>

      <!--Author's mail-->
            </div>
            <div class="text">
            <label for="email">Author's email:</label>;
            <input value="<?= $list['email'] ?>" type="email" name="email" placeholder="...@gmail.com" >
            <p class="text-danger">
            <?php
               echo isset($_SESSION['email_error']) ? ($_SESSION['email_error']):"";
            ?>
            </p>
            </div>

      <!--Author's Number-->
            <div class="text">
            <label for="number">Author's Number:</label>
            <input value="<?= $list['number'] ?>" type="number" id="number" name="number" placeholder="01*****"  >
            
            <p class="text-danger">
            <?php
               echo isset($_SESSION['number_error']) ? ($_SESSION['number_error']):"";
            ?>
            </p>
            </div>

      <!--Author's Password-->
            <div class="text">
            <label for="password">Password:</label>
            <input value="<?= $list['password'] ?>" type="text" id="password" name="password" placeholder="******" >
            
            <p class="text-danger">
            <?php
               echo isset($_SESSION['password_error']) ? ($_SESSION['password_error']):"";
            ?>
            </p>
            </div>

      <!--Author's Description-->
            <div class="text">
            <label for="description">Author's description:</label>
            <textarea name="description" placeholder="post description"><?= $list['description'] ?></textarea>
            
            <p class="text-danger">
            <?php
            echo isset($_SESSION['description_error']) ? ($_SESSION['description_error']):"" ;
            ?>
            </p>
            </div>

      <!--Submit Button-->
            <div class="btn">
                <button type="Submit" value="Submit" >Update</button>
            </div>
            
        </div>
    </div>
</form> 

</body>
</html>    
<?php
    session_unset();
?>