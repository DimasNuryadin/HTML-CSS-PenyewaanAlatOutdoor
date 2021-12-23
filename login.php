<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Login</title>
  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <img class="logo" src="img/logo.png">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link" href="index.html">HOME <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="contac.php">CONTAC</a>
            <a class="nav-item nav-link" href="knowledge.php">KNOWLEDGE</a>
            <form class="form-inline">
              <div class="search-box">
                <input class="search-txt" type="text" placeholder="Cari apa ?">
                <a class="search-btn" href="#">
                  <img class="sr" src="icon/search.png" type="button">
                </a>
              </div>
              <img class="btn tombol" src="icon/profile.png" type="button">
              <img class="btn tombol" src="icon/cart.png" type="button">
            </form>
          </div>
        </div>
      </div>
    </nav>

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container loginbox">
        <h1>LOGIN</h1>
      	<form method="post">
      		<div>
      			<input class="textbox" type="text" placeholder="Email"/>
      		</div>
      		<div>
      			<input class="textbox" type="password" placeholder="Password"/>
      		</div>
      		<div>
      			<input class="btn1" type="submit" value="LOGIN"/>
          </div>
          <div>
            <a class="input1" href="sign.php">Create Account</a>
            <a class="input1" href="#">Forgot Password ?</a>
          </div>
          <div>

          </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
