<?php 
session_start();
if(!isset($_SESSION['user']))
{
  header('location: ./login.php');
}

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="../css/admin_panel.css" rel="stylesheet">
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    
  </head>


  <body class="body container-fluid">
    <?php require_once 'upload.php'; ?>

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
            <a class="nav-link" href="../index.php">Home
            </a>
          </li>
          <li class="nav-item active">
            <?php if (@isset($_SESSION['user'])==true)
            {?>
            <a class="nav-link" href="./logout.php?logout">LogOut
            </a> <?php } ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    </header>

    <main role="main">


      <section class="jumbotron text-center" style="background-color: #141414; ">
        <?php 
    if (isset($_SESSION['message'])): ?>
    <div class="alert alert-dark alert-dismissible fade show" role="alert">
      <?php 
        echo $_SESSION['message'];
        unset($_SESSION['message']);
      ?>
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button> 
    </div>  
    <?php endif ?>

    <?php
      $id = 0;
      $update = false;
      $movie_name ='';
      $movie_image =  '';
      $trailer_link ='';
      $storyline = '';
      $director = '';
      $cast = '';
      $download_link ='';

      require_once("./config.php");
      $con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

      if(isset($_GET['edit']))
      {
        $id = $_GET['edit'];
        $sql = "SELECT * FROM movies WHERE id=$id";
        $result = mysqli_query($con,$sql);
        $num = mysqli_num_rows($result);
        if($num == 1)
        {
          $row = mysqli_fetch_array($result); 
          $update = true;
          $movie_name = $row['movie_name'];
          $movie_image =$row['movie_image'];
          $temp_trailer_link = $row['trailer_link'];
            $temp_temp_trailer_link = substr($temp_trailer_link,30);
            $trailer_link = "https://www.youtube.com/watch?v={$temp_temp_trailer_link}";         
          $storyline = $row['storyline'];
          $director = $row['director'];
          $cast = $row['cast'];
          $download_link = $row['download_link'];
        }
      }
    ?>

        <div class="container">
           <div class="container">
            <div class="row justify-content-center ">
              <div class="col-12 ">
                <div data-aos="fade-in">
                  <h1 class="jumbotron-heading">Movie Upload Panel</h1>
                  <label style="color: #686868;">Please read the <a href="../html/doc.html">Documentation</a> before uploading any movies</label>
                </div>

                  <form data-aos="zoom-in-down" name="" action="./upload.php" method="POST"  enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo$id; ?>">
                    <div class="row align-items-center">
                      <div class="col mt-4">
                        <input type="text" name="movie_name" class="form-control" value="<?php echo$movie_name?>"placeholder="Movie Name" >
                      </div>
                    </div>
        
                    <div  class="row  align-items-center mt-4">
                      <div class="col">
                        <label style="color: #686868;">Upload Movie Image here</label>
                        <input type="file" name="movie_image" class="form-control " value="<?php echo$movie_image?>" placeholder="Movie Image" >
                      </div>
                    </div>
 
                    <div class="row align-items-center mt-4">
                      <div class="col">
                        <input type="text" name="trailer_link" class="form-control" value="<?php echo$trailer_link?>" placeholder="Trailer Link" >
                      </div>
                    </div>

                    <div class="row align-items-center mt-4">
                      <div class="col">
                        <input type="text" name="director" class="form-control" value="<?php echo$director?>"placeholder="Director" >
                      </div>
                    </div>
                
                    <div class="row align-items-center mt-4">
                      <div class="col">
                        <input type="text" name="storyline" class="form-control" value="<?php echo$storyline?>"placeholder="StoryLine" >
                      </div>
                    </div>

                    <div class="row align-items-center mt-4">
                      <div class="col">
                        <input type="text" name="cast" class="form-control" value="<?php echo$cast?>" placeholder="Cast" >
                      </div>
                    </div>

                    <div class="row align-items-center mt-4">
                      <div class="col">
                        <input type="text" name="download_link" class="form-control" value="<?php echo$download_link?>" placeholder="Download Link" >
                      </div>
                    </div>
                      
                    <?php 
                      if($update ==  true):
                    ?>
                      <button class="btn btn-info mt-4" name="update">Update</button> 
                    <?php else: ?>
                      <button class="btn btn-primary mt-4" name="submit" >Submit</button> 
                    <?php endif; ?>  
                  </form>          
               </div>
            </div>
          </div>
        </div>
      </section>


      <div  class="album py-5" style="background-color: #141414;">
        <div class="container">
          <div class="row">
    
                          <?php
                          
                          $query = "select * from movies ORDER BY id DESC";
                          $result = mysqli_query($con, $query);
                            while($row = mysqli_fetch_array($result))
                            {
                          ?>

            <div class="col-md-4" >
              <div data-aos="zoom-in" data-aos="fade-up" data-aos-offset="100" data-aos-delay="30" data-aos-duration="1000" data-aos-easing="ease-in-out" class="card mb-4 box-shadow">
                <img  class="card-img-top" <?php echo"src=../img/".$row['movie_image']."" .  " height=500px width=300px" ;?> alt="Card image cap">
                <div class="card-body" style="background-color: #121314;">
                  <h3 class="card-text"><?php echo $row['movie_name'];?></h3>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="admin_panel.php?edit=<?php echo $row['id']; ?>" 
                        class="btn  btn-outline-secondary">Edit</a>
                      <a href="upload.php?delete=<?php echo $row['id'];?>"  
                        class="btn  btn-outline-secondary">Delete</a>
                    </div> 
                    <!--<a href="?edit=<?php echo $row['id']; ?>" 
                    class "btn btn-info">Edit</a>
                  <a href="?delete=<?php echo $row['id']; ?>" 
                    class "btn btn-info">delete</a>
                      -->
                  </div>
                </div>
              </div>
            </div>

<?php
  }

?>
            
           
          </div>
        </div>
      </div>

    </main>

 <!-- FOOTER -->
    <div>
    <footer style="color: #686868;">
      <p>Thirai, Inc.</p>
      <p>Copyright &copy Guru Roxz 2020</p>
    </footer>
</div>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  </body>
</html>

