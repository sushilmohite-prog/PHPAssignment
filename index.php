<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body>
  <?php
  include("includes/config.php");
  ?>
    <!-- Nav Bar -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <a href="#" class="navbar-brand">Assignments SM</a>
          <form  action="add.php" class="d-flex" role="search">
          
            <input class="btn btn-outline-success" type="submit" value="add">
                    </form>
        </div>
      </nav> 
<!--Nav End-->


<!--Body-->
<div class="container-fluid text-center">
    <div class="row">
      <div class="col-md-8 border pt-3 pb-3">
      
<?php 
$sql="SELECT id,assignment_name,file_name,assignment_no FROM data2 ";
$result=$connect->query($sql);
while ($row=$result->fetch_assoc()){
  $id =$row['id'];

?>
        <ul class="list-group list-group-horizontal mt-2">
            <li class="list-group-item"><?=$row['assignment_name'];?></li>
            <a href="<?="view.php?view=$id"?>">
            <li class="list-group-item list-group-item-primary">Click Here To Run Code</li>
            </a>
        </ul>
      <?php  } ?>
      </div>
      <div class="col-md-4 border pt-3  pb-3">
        <ul class="list-group">
            <li class="list-group-item active" aria-current="true">Assignment Number</li>
                <?php 
                       $sql="SELECT distinct assignment_no FROM data2 ";
                       $result=$connect->query($sql);
                       while ($row=$result->fetch_assoc()){
                ?>
                <li class="list-group-item"><?=$row['assignment_no'];?></li>
                <?php } ?>
          </ul>
      </div>
      
    </div>
  </div>


<!--Body-->



<!--Footer-->
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-facebook-f"></i
        ></a>
  
        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-twitter"></i
        ></a>
  
        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-google"></i
        ></a>
  
        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-instagram"></i
        ></a>
  
        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-linkedin-in"></i
        ></a>
  
        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-github"></i
        ></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright:
      <a class="text-white" href="http://www.knowhere.me">By Sushil Mohite</a>
    </div>
    <!-- Copyright -->
  </footer>
  
</body>
</html>