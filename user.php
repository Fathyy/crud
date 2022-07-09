<?php
include 'db_connect.php';
if (isset($_POST['submit'])){
    $name =($_POST['name']);
    $email=($_POST['email']);
    $mobile=($_POST['mobile']);
    $password= ($_POST['password']);

    $sql = " INSERT INTO crud (name, email, mobile, password)
    VALUES('$name', '$email', '$mobile', '$password')";

    $result = mysqli_query($con, $sql);
    if($result){
     header('location:display.php');
    }
    else{
      die(mysqli_error($con));
    }

}
?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Crud operation</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">

    <!-- Name begins -->
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control"
     placeholder="Enter your name"
     name ="name">
</div>

<!-- Name ends -->

<!-- Email begins -->
<div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control"
     placeholder="Enter your email"
     name ="email">
</div>
<!-- Email ends -->

<!-- mobile begins -->
<div class="form-group">
    <label>Mobile</label>
    <input type="tel" class="form-control"
     placeholder="Enter your mobile number"
     name ="mobile">
</div>
<!-- mobile ends -->


<!-- password begins -->
<div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control"
     placeholder="Enter your password"
     name ="password">
</div>
<!-- password ends -->


  
  <button type="submit" class="btn btn-primary" name ="submit">Submit</button>
</form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>