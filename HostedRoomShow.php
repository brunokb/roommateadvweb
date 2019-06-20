<!DOCTYPE html>
<html lang="en">
<head>
<?php
    include 'config.php';
    $val = $_REQUEST['roomID'];
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname);
    $result = mysqli_query($conn,"SELECT * FROM room WHERE refID = $val");
    while($row = mysqli_fetch_array($result))
    {      
      $Address = $row['address'];
      $Capacity = $row['capac'];
      $Descript = $row['description'];
    }	
    $img_array = array();
    $imgs = mysqli_query($conn,"SELECT * FROM imageStore WHERE image_ref = $val");
    while($imgPath = mysqli_fetch_array($imgs))
    {      
      array_push($img_array,$imgPath['img_path']);
    }	
?>
    <title>	Hosted Room</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
    <script type="text/javascript" src="js.js"></script>
    <link rel="stylesheet" href="styleHostedRoom.css">
</head>
    
<body id="bg-custom">
     <nav class="navbar navbar-expand-sm navbar-fixed-top nav-custom">
          <!-- Brand/logo -->
          <a class="navbar-brand" href="index.php">
            <img src="picture/logo%20web.png" alt="logo" style="width:80px;">
          </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="search-container">
            <form action="/booking.php" method="get">
              <input type="text" name="city" id="searchAC" placeholder="Search" >
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
          <!-- Links -->
         <div class="collapse navbar-collapse menu" id="collapsibleNavbar">
              <ul class="navbar-menu navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link text-light " href="index.php" data-toggle="tooltip" data-placement="Home" title="Home!">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="#" data-toggle="tooltip" data-placement="Host Your Room" title="Host Your Room!">Host Your Room</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" id="btnAbout" data-toggle="tooltip" data-placement="About Us" title="About Us!">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="#" data-toggle="tooltip" data-placement="Help & Contact" title="Help & Contact!">Help & Contact</a>
                </li>
                <li >
                   <button class="btn-primary-outline bg-transparent"><i class="fa fa-heart"></i> Interested List</button>   
                </li>
              </ul>
         </div>
    </nav>
    <div class="container">
            <div clas="row">
                <div class="col-lg-2">
                
                </div>
                <div class="col">
                    <div class="container">
                              <div class="row">
                                  <div class="col"></div>
                                  <div class="col">
                                    <div id="demo" class="carousel slide" data-ride="carousel" style=" width:100%; height: 300px !important;">
                                      <!-- Indicators -->
                                      <ul class="carousel-indicators">
                                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                                        <li data-target="#demo" data-slide-to="1"></li>
                                        <li data-target="#demo" data-slide-to="2"></li>
                                        <li data-target="#demo" data-slide-to="3"></li>
                                      </ul>

                                      <!-- The slideshow -->
                                      <div class="carousel-inner">
                                        <div class="carousel-item active">
                                          <img src="<?php echo $img_array[0] ?>" alt="PPrivateRoom1-pic1">
                                        </div>
                                        <div class="carousel-item">
                                          <img src="<?php echo $img_array[1] ?>" alt="PrivateRoom1-pic2">
                                        </div>
                                        <div class="carousel-item">
                                          <img src="<?php echo $img_array[2] ?>" alt="PrivateRoom1-pic3" >
                                        </div>
                                        <div class="carousel-item">
                                          <img src="<?php echo $img_array[3] ?>" alt="PrivateRoom1-pic4" >
                                        </div>
                                      </div>

                                      <!-- Left and right controls -->
                                      <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                      </a>
                                      <a class="carousel-control-next" href="#demo" data-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                      </a>
                                    </div>
                                  </div>
                                  <div class="col"></div>
                                </div>
                                <div class="row roominfo">
                                    <div class="container text-center">
                                      <?php
                                      echo "<h4>Address</h4>".$Address." <p></p><br>";
                                      echo  "<h4>Capacity</h4> <p>".$Capacity."</p><br>";
                                      echo  "<h4>Description</h4> ".$Descript."<p></p><br>";
                                      ?>
                                    </div>  
                                </div>
                                <div class="row">
                                    <div class="col"></div>
                                    <div class="col" id="wrapper">
                                        <a class="btn btn-large btn-info" href="index.php">Go To Homepage</a>
                                    </div>
                                    <div class="col"></div>                                                
                                    </div>
                                                    
                                </div>
                        
                    </div>
                <div class="col-lg-2"></div>
                </div>
                
            </div>
    
</body>
</html>