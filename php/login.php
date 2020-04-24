<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Search</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="../css/admin_panel.css" rel="stylesheet">
    
  </head>
  <body class="body container-fluid">
  <!--Header-->
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark  static-top">
        <div class="container-fluid">
          <div class="netflixLogo">
            <a id="logo" href="../index.php"><img src="../img/logo.png" height="30px" width="" alt="Logo Image"></a>
          </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
              <div class="collapse navbar-collapse  navbar-toggleable-xs" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="../index.php">Home</a>
                  </li>
                </ul>
              </div> 
        </div>
      </nav>
    </header>

    <main role="main">

      <section class="jumbotron text-center" style="background-color: #141414; ">
        <div class="container">
           <div class="container" style="padding-top: 90px;">
            <div class="row justify-content-center ">
              <div class="col-12 ">
                <h1 class="jumbotron-heading">Admin Login</h1>
                  <div class="form-group">
                    <form action="./login_process.php" method="POST">
                      <div class="row align-items-center">
                        <div class="col mt-4">
                          <input type="text" name="password" class="form-control" placeholder="Enter the password here" >
                        </div>
                      </div>
                      <div class="col-xl-12">
                      <button class="btn btn-block btn-primary mt-4" name="submit" >Submit</button> 
                      </div>
                    </form>
                  </div>
               </div>
               <?php
              if(@$_GET['info']==true)
              {
            ?>
              <div class="text-danger text-center py-2" role="alert"><?php echo $_GET['info']; ?></div>
            <?php
              } 
            ?>

            <?php
              if(@$_GET['invalid']==true)
              {
            ?>
              <div class="text-danger text-center py-2" role="alert"><?php echo $_GET['invalid']; ?></div>
            <?php
              } 
            ?>
            </div>
          </div>
        </div>
      </section>
    </main>

 <!-- FOOTER -->
    <div style="padding-top: 70px;">
      <footer style="color: #686868;">
        <p>Thirai, Inc.</p>
        <p>Copyright &copy Guru Roxz 2020</p>
      </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </body>
</html>
