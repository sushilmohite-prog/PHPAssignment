<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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

<link rel="stylesheet" href="style.css"/>
<body>
<?php 
  include("includes/config.php");
  $msg='';

  if(isset($_POST['submit'])){
      $ass_name = $_POST['assignment_name'];
      $file_name = $_POST['file_name'];
      $ass_no = $_POST['assignment_no'];

      mysqli_query($connect,"INSERT INTO data2(assignment_name,file_name,assignment_no) VALUES('$ass_name','$file_name','$ass_no')");
      $msg = "Inserted Sucessfully";
    }
  ?>

        <!-- Nav Bar -->
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
            <a href="index.php" class="navbar-brand">Assignments SM</a>
              <form  action="index.php" class="d-flex" role="search">
                 <input class="btn btn-outline-success" type="submit" value="Home">
            </form>
            </div>
          </nav> 
      
    <!--Nav End-->
    <h1><?php echo $msg;?></h1>

    <div class="container ">
    
    <div class="col-md-12 form">
    <form class="pt-4 pb-4" method="post">
    
        <div class="form-group mb-4">
          <label for="exampleInputEmail1">Assignment Name</label><hr>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Assignment Name" name='assignment_name'>
        
        </div>
        <div class="form-group mt-4 ">
          <label for="exampleInputPassword1">FileName</label><hr>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="FileName" name='file_name'>
        </div>
        
        <div class="form-group mt-4 ">
          <label for="exampleInputPassword1">Select Assignment No. </label><hr>
          <select class="form-select" aria-label="Default select example" name='assignment_no'>
             <option value="Assignment 1">Assignment 1</option>
             <option value="Assignment 2">Assignment 2</option>
             <option value="Assignment 3">Assignment 3</option>
             <option value="Assignment 4">Assignment 4</option>
          </select>
        </div>
        
        <button type="submit" class="btn btn-primary mt-3" name="submit" value="submit">Submit</button>
      </form>
      </div>
      
    </div>

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