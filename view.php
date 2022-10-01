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

  <?php
  $id=$_GET['view'];
    if(isset($id))
    {
    $result=mysqli_query($connect,"SELECT * FROM data2 WHERE id='$id' ");
    $retrive=mysqli_fetch_array($result);
    $ass_name = $retrive['assignment_name'];
    $file_name =$retrive['file_name'];
    }
  
  ?>

  
    <!-- Nav Bar -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <a href="index.php" class="navbar-brand">Assignments SM</a>
          <form  action="add.php" class="d-flex" role="search">
          
            <input class="btn btn-outline-success" type="submit" value="add">
                    </form>
        </div>
      </nav> 
<!--Nav End-->


<!--Body-->
<div class="container-fluid ">
    <div class="row">
      <div class="col-md-6 border pt-3 pb-3">
        <h1>Code</h1><hr>
        <h5><?php echo $ass_name; ?></h5>
        <div class="container border  p-3 mt-3">

        <?php
      
            show_source("phpcode/".$file_name.".php"); 
        
        ?>
        </div>
      </div>
      <div class="col-md-6 border pt-3  pb-3">
      <h1>Output</h1><hr>
      <?php
            echo include("phpcode/".$file_name.".php");
        ?>
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