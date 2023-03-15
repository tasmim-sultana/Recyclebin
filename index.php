<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css\bootstrap.min.css">
  <link rel="stylesheet" src="css\all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css\style.css" type="text/css">
  <title>RecycleBin</title>
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-light bg-info text-dark pl-5 fixed-top">
    <a class="navbar-brand display-3" href="index.php">RecycleBin</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav custom-nav pl-5">
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="index.php">Home </a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="#products">Products</a>
        </li>

        <li class="nav-item custom-nav-item ">
          <a class="nav-link" href="#">Services</a>
        </li>

        <li class="nav-item  custom-nav-item ">
          <a class="nav-link" data-toggle="modal" data-target="#userLoginModalCenter" href="#">Log in</a>
        </li>
        <li class="nav-item  custom-nav-item ">
          <a class="nav-link" data-toggle="modal" data-target="#userRegModalCenter
        " href="#">Sign Up</a>
        </li>
        <li class="nav-item  custom-nav-item  ">
          <a class="nav-link" href="#">Feedback</a>
        </li>
        <li class="nav-item  custom-nav-item  ">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item custom-nav-item ">
          <a class="nav-link" href="#">About us</a>
        </li>

      </ul>
    </div>
  </nav>


  <div class="container-fluid remove-vid-marg">
    <div class="div-parent">
      <img src="images\pexels-the-glorious-studio-5442472.jpg" style="height:100%; width: 100%;" alt='jewelery'>

      <div class="overlay"></div>
    </div>
    <div class="vid-content">
      <h1 class="my-content" style=" font-family: Fantasy;">Buy Or Sell your things <br>
        in most reliable way</h1>
      <p style="font-weight: bold;">RecycleBin is an online platform where one can buy a second-hand <br>product at
        shortest cost.
        And also one can sold his or her unused product.
      </p><br><br>
    </div>
  </div>
  <div class="container-fluid bg-info">
    <div class="row text-dark text center p-1">
      <div class="col-sm">
        <a class="text-white social-hover" href="#"><i class="fab fa-facebook"></i>
          Facebook</a>
      </div>
      <div class="col-sm">
        <a class="text-white social-hover" href="#"><i class="fab fa-twitter"></i>
          Twitter</a>
      </div>
      <div class="col-sm">
        <a class="text-white social-hover" href="#"><i class="fab fa-whatsapp-square"></i>
          Whatsapp</a>
      </div>
      <div class="col-sm">
        <a class="text-white social-hover" href="#"><i class="fab fa-instagram"></i>
          Instagram</a>
      </div>
    </div>
  </div>

  <?php
  include('product.php');
  ?>
  <footer class="container-fluid bg-dark text-center p-2">
    <small class="text-white"> Designed By Tasmim Sultana </small>
  </footer>

  <div class="modal fade" id="userRegModalCenter" tabindex="-1" aria-labelledby="userRegModalCenterLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="userRegModalCenter
      Label">User Registration</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="userReg.php">
            <div class="form-group">
              <i class="fas fa-user"></i>
              <label for="username" class="p1-2 font-weight-bold">Name</label>
              <input type="text" class="form-control" name="username" required>
            </div>
            <div class="form-group">
              <i class="fas fa-envelope"></i>
              <label for="useremail" class="p1-2 font-weight-bold">Email</label>
              <input type="email" class="form-control" name="useremail" required>
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
              <i class="fas fa-key"></i>
              <label for="userpass" class="p1-2 font-weight-bold">Password</label>
              <input type="password" class="form-control" name="userpass" required>

            </div>
        </div>
        <div class="modal-footer">
          <span id="successMsg"> </span>
          <input type="submit" class="btn btn-primary " name="register_user" value="submit">
        </div>

      </div>
      </form>
    </div>
  </div>
  </div>
  <div class="modal fade" id="userLoginModalCenter" tabindex="-1" aria-labelledby="userLoginModalCenterLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="userLoginModalCenterLabel">User Log in </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="userLoginForm" action="userLogin.php" method="POST">

            <div class="form-group">
              <i class="fas fa-envelope"></i>
              <label for="userlogemail" class="p1-2 font-weight-bold">Email</label>
              <input type="email" class="form-control" placeholder="Email" name="userlogemail" id="userlogemail"
                required>
            </div>

            <div class="form-group">
              <i class="fas fa-key"></i>
              <label for="userlogpass" class="p1-2 font-weight-bold">Password</label>
              <input type="password" class="form-control" placeholder="Password" name="userlogpass" id="userlogpass"
                required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" name="login_user">Log in</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="js\jquery-3.5.1.min.js"></script>
  <script src="js\popper.min.js"></script>
  <script src="js\bootstrap.min.js"> </script>
  <script src="js\all.min.js"></script>
</body>

</html>