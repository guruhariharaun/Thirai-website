<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Thirai</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


  <link rel="stylesheet" href="./css/cc.css">
  <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
  <script src="main.js"></script>



  <script type="text/javascript">
    function SetCookie(c_name,value,expiredays)
  {
    var exdate=new Date()
    exdate.setDate(exdate.getDate()+expiredays)
    document.cookie=c_name+ "=" +escape(value)+
    ((expiredays==null) ? "" : ";expires="+exdate.toGMTString())
  }
  </script>
</head>


<body>

<div class="wrapper">
    <!-- HEADER -->
    <header>
      <div class="thiraiLogo">
        <a id="logo" href="./index.php"><img src="./img/logo.png" height="70%" width="70%" alt="Logo Image"></a>
      </div>      
      <nav class="main-nav">                
        
        
              
      </nav>
      <nav class="sub-nav">
       <?php session_start();
        if (isset($_SESSION['user'])): ?> 
          <a href="./php/admin_panel.php">Admin Panel</a>   
        <?php else: ?>
          <a href="./php/login.php">Admin Login</a>   
        <?php endif; ?> 
      
      </nav>      
    </header>
    <!-- END OF HEADER -->
    
    <!-- MAIN CONTAINER -->
    <section class="main-container" >
      <div >
    <h1 style="text-align: center;padding-top: 120px; font-size: 50px;">WELCOME TO THIRAI, Place for Free Movies.</h1>
      </div>
      <div class="location"  id="home">
        <div >
          <h1 id="home">Recent Uploads of Thirai</h1>
          <div class="box" >
            <?php
              require ("./php/config.php");
              $con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
              $query = "select * from movies ORDER BY id DESC";
              $result = mysqli_query($con, $query);
              while($row = mysqli_fetch_array($result))
              {
            ?>
            
            <a href="./php/movie.php" onclick="SetCookie('movie','<?php echo $row['cookie_value'];?>','1')">
                <img  src="./img/<?php echo $row['movie_image'];?>" alt="">
            </a>
            
            <?php
              }
            ?>     
          </div>
      </div>
      
  
        
    </section>
    <!-- END OF MAIN CONTAINER -->

    <!-- LINKS -->
    <section class="link" style="text-align: center;">
      <div>
        <h1 style="text-align: center;font-size: 50px;color: #686868;">ABOUT ME</h1>
        <img style="border-radius: 50%;" height="200px" width="200px" src="./img/team/1.JPG"/> 
        <h1 style="text-align: center;padding-top: 5px;color:#f2f2f2;">Guru Roxz</h1>
      </div>

     
      <div class="logos">
        <a href="https://www.facebook.com/gururoxz"><i class="fab fa-facebook-square fa-2x logo"></i></a>
        <a href="https://www.instagram.com/gururoxz_garrix/"><i class="fab fa-instagram fa-2x logo"></i></a>
        <a href="https://github.com/guruhariharaun"><i class="fab fa-github fa-2x logo"></i></a>
        <a href="https://www.linkedin.com/in/guru-hariharaun-aaa457149/"><i class="fab fa-linkedin fa-2x logo"></i></a>
      </div>
      &nbsp&nbsp&nbsp
      <div>
        <p class="large text-muted"style="color: #686868;">Show me your ❤ Guys!!</p>
        <a href="https://www.buymeacoffee.com/YwGKcxa" target="_blank"><img src="https://cdn.buymeacoffee.com/buttons/default-orange.png" alt="Buy Me A Coffee" style="height: 51px !important;width: 217px !important;" ></a>
      </div>
      <div class="sub-links">
        
      </div>
    </section>

    <!-- END OF LINKS -->

    
    <!-- Technologies -->
    <section class="link" >
      <div class="sub-links">
        <ul>
          <li>
            <a href="https://www.000webhost.com/">
              <img class="img-fluid d-block mx-auto" src="img/logos/000webhost.png" style="padding-top: 50px;"alt="" height="100" width="200">
          </a>
        </li>
          <li>
            <a href="https://www.php.net/">
              <img class="img-fluid d-block mx-auto" src="img/logos/php.png" style="padding-top: 30px;"alt=""height="170" width="230">
            </a>
          </li>

          <li>
            <a href="https://www.mysql.com/">
              <img class="img-fluid d-block mx-auto" src="img/logos/mysql.png" style="padding-top: 50px;"alt="" height="90" width="230">
            </a>
          </li>

        <li>
            <a href="https://getbootstrap.com/">
              <img class="img-fluid d-block mx-auto" src="img/logos/bootstrap.png" alt="" style="padding-top:70px;"height="80" width="220">
          </a>
        </li>

        
        </ul>
      </div>
    </section>

    <!-- FOOTER -->
    <footer >
      <p>Thirai, Inc.</p>
      <p>Designed by Guru Roxz 2020</p>
    </footer>
  </div>

</body>
</html>
