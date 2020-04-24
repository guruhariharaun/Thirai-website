<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php
  require('config.php');
  $cookie = $_COOKIE["movie"];
  $con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME); //establishing connection to MySQL DataBase
  $s = "select * FROM movies WHERE cookie_value = '$cookie'"; 
  $result = mysqli_query($con, $s); 
  while($row = mysqli_fetch_array($result))
  {
  ?> 
  <title>
    <?php echo $row['movie_name']; ?>
  </title>
  <?php
  }
?>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/movie.css">
  <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
  <script src="main.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script>
    AOS.init();
</script>

  <!--BootStrap CDN -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>


<body class="body container-fluid">

  <nav class="navbar navbar-expand-lg navbar-dark  static-top">
    <div class="container-fluid">
       <div class="netflixLogo">
        <a id="logo" href="../index.php"><img src="../img/logo.png" height="30px" width=""  alt="Logo Image"></a>
      </div> 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse  navbar-toggleable-xs" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../index.php">Home
            </a>
          </li>
          <li class="nav-item active">
            <?php session_start();
        if (isset($_SESSION['user'])): ?> 
          <a class="nav-link" href="./admin_panel.php">Admin Panel </a>  
        <?php else: ?>
          <a class="nav-link" href="./login.php">Admin Login  
        <?php endif; ?> 
            
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<?php

 //establishing connection to MySQL DataBase
if(!$con)
        {
          die('Could not Connect MySql Server:' .mysql_error());
        }

if(isset($_COOKIE["movie"]))
{ 
  $cookie = $_COOKIE["movie"]; 
  $s = "select * FROM movies WHERE cookie_value = '$cookie'"; 
  $result = mysqli_query($con, $s); 
  while($row = mysqli_fetch_array($result))
  {
?>
<div class="container text-center">
  <div class="row" >
    <!-- Post Content Column -->
    <div class="col-md-12">
        <hr><hr><hr>
        <span><!-- Title -->
        <h1 class="mt-4"><?php echo $row['movie_name']; ?></h1></span>    
        <p class="lead">Uploaded by Admin</p>
        <!-- Date/Time -->
        <p>Posted on <?php  
        $time = $row['time'];
        $fin = date('d-m-Y g:i:s a',strtotime($time));
        echo $fin;
        ?>.</p>
        
        <div>
        <!-- Preview Image -->
        <img class="img-fluid rounded" <?php echo"src=../img/".$row['movie_image']."" .  " height=500px width=300px" ;?>>
        </div>
        <hr><hr>
        
        <h1>Trailer</h1>
        <div class="iframe-container">
          <iframe width="300" height="500" <?php echo"src=".$row['trailer_link'].""; ?> frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <hr><hr>
          
        <h1>Storyline</h1>
        <div>
          <h3 style="color: #686868; font-size: 20px;"><?php echo $row['storyline']; ?></h3>
        </div>
        <hr><hr>


        <h1>Director:</h1><h1 style="color: #686868; font-size: 35px;"> <?php echo $row['director']; ?></h1>
        <hr><hr>

        <h1>Cast</h1>
        <h1 style="color: #686868; font-size: 25px;"><?php echo $row['cast'];?></h1>
        <hr><hr>
        <a href="../html/caution.html" class="btn  btn-outline-secondary">Click Here To download Torrent!
        </a>
<!--        <a href="../torrent/<?php //echo $row['download_link']; ?>" 
            class="btn  btn-outline-secondary">Click Here To download Torrent!
        </a> 
-->       
        <hr><hr><hr><hr>



          
    </div>
  </div>
<div>
    <!-- FOOTER -->
    <footer style="color: #686868;">
      <p>&copy 2020 Thirai, Inc.</p>
      <p>Guru Roxz &copy 2020</p>
    </footer>
</div>

</body>
</html>

    
    
      <br> 
<?php
  }
}
?>
