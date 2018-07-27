<!DOCTYPE html>
<html lang="en">    
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LOG IN Coca-Clothes</title>    
    <!-- Bootstrap CSS -->
    <link rel='stylesheet prefetch' href='https://cdn.jsdelivr.net/foundation/5.0.2/css/foundation.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" 
    integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" 
    crossorigin="anonymous">
    <!-- Customer CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Anton|Dancing+Script|Montserrat|PT+Sans|Source+Sans+Pro|Vollkorn+SC" rel="stylesheet">
  
  </head>    
  <body id="pageTop">
    <!-- Logo -->
    <div class="fixed-top">
      <div style="background-color: white;">
        <span class="myLogo">Coca-Clothes</span>
        <a href="logIn.php" class="float-right text-dark">LOG IN</a>
    </div>

    <!-- Form -->
    <div style="text-align: center">      
      <form action="create.php" method="post" style="text-align: left">
        <h5>CREATE ACCOUNT</h5>
        <hr>
        <label for="user">User Name</label>
        <input type="text" name="user" id="user" required placeholder="User Name">
        <label for="epost">E-mail</label>
        <input type="text" name="epost" id="epost" required placeholder="E-post">
        <label for="address">Address</label>
        <input type="text" name="address" id="address" required placeholder="Address">
        <label for="tel">Telephone</label>
        <input type="text" name="tel" id="tel" required placeholder="Telephone">
        <label for="password">Password</label>
        <input type="password" name="password" id="password"  required placeholder="Password"><br>   
        <button class="btn btn-info mx-3">CREATE</button>
        <hr><br>            
      </form>
      <a href='logIn.php' class='btn btn-outline-primary'>LOG IN</a>            
    </div>

    <?php

    if($_SERVER['REQUEST_METHOD']==='POST'){

    print_r($_POST);
    require('connect.php');
    $user = $_POST['user'];
    $email = $_POST['epost'];
    $address = $_POST['address'];
    $tel = $_POST['tel'];
    $password = $_POST['password'];
    $password = md5($password);

    $sql = "INSERT INTO Client VALUES ('','$user','$email','$password','$address','$tel')";
    echo $sql;
    mysqli_query($connection, $sql) 
    or die(mysqli_error($connection));
    header('Location: logIn.php');   
    }
    ?>    
    
    <!-- Footer -->    
    <footer class="row">
      <div class="large-12 columns">
        <hr />
        <div class="row">
          <div class="large-6 columns">
            <p>© Copyright 2017 Coca-Clothes</p>
          </div>
    
          <div class="large-6 columns">
            <ul class="inline-list right">
              <li><a href="#">Home</a></li>
              <li><a href="#">Men</a></li>
              <li><a href="#">Women</a></li>
            </ul>
          </div>    
        </div>
      </div>
    </footer>
    <!-- End Footer -->
    
      </div>
      </div>
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- collapse can only work with JAVASCRIPT!!! Anars inte fungera!! -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

  </body>   
</html>