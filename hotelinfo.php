<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $dbname = 'id9561485_roommateadvweb';
    $dbuser = 'id9561485_6931';
    $dbpass = 'ait1234@!';
    $dbhost = 'localhost';
    $val = $_REQUEST['room'];
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname);
    $result = mysqli_query($conn,"SELECT * FROM room WHERE refID = $val");	
    while($row = mysqli_fetch_array($result))
    {
    ?>
    <title>	Room</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
    <script type="text/javascript" src="js.js"></script>
    <link rel="stylesheet" href="loginFormCss.css">
    <link rel="stylesheet" href="style.css">
</head>
    
<body class="bg-secondary">
     <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top bg-primary">
          <!-- Brand/logo -->
          <a class="navbar-brand" href="home.php">
            <img src="picture/logo%20web.png" alt="logo" style="width:80px;">
          </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
         <div class="search-container">
            <form action="/action_page.php">
              <input type="text" placeholder="Search.." name="search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>

          <!-- Links -->
         <div class="collapse navbar-collapse menu" id="collapsibleNavbar">
              <ul class="navbar-menu navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link text-light " href="home.php" data-toggle="tooltip" data-placement="Home" title="Home!">Home</a>
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
              </ul>
         </div>
    </nav>
    <div id="hotelcarousel" class="carousel slide" data-ride="carousel">
        <h1 class="text-center"><?php echo $row['description']; ?></h1>
      <ul class="carousel-indicators">
        <li data-target="#hotelcarousel" data-slide-to="0" class="active"></li>
        <li data-target="#hotelcarousel" data-slide-to="1"></li>
        <li data-target="#hotelcarousel" data-slide-to="2"></li>
      </ul>
 	    <?php 
            $picPath = mysqli_query($conn,"SELECT * FROM `imageStore` WHERE image_ref = ".$row['refID']."");
            while($picRow = mysqli_fetch_array($picPath))
            {
    	    ?>                                   
                 
      
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="img-fluid" src="<?php echo $picRow['img_path']?>" alt="Double Room" width="1100" height="500">
          <div class="carousel-caption">
            <h3>Double Room</h3>
          </div>   
        </div>
        <div class="carousel-item">
          <img class="img-fluid" src="<?php echo $picRow['img_path']?>" alt="Single Room" width="1100" height="500">
          <div class="carousel-caption">
            <h3>Single Room</h3>
          </div>   
        </div>
        <div class="carousel-item">
          <img class="img-fluid" src="<?php echo $picRow['img_path']?>" alt="Triple Room" width="1100" height="500">
          <div class="carousel-caption">
            <h3>Triple Room</h3>
          </div>   
        </div>
      </div>
        <?php 
        }
        ?>
  
      <a class="carousel-control-prev" href="#hotelcarousel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#hotelcarousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
    <div class="container">           
      <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th style="width: 20%">Capacity</th>
            <th style="width: 50%">Room Type</th>
            <th style="width: 30%">Price</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>2</td>
            <td>
                <div class="container">
                    <a class="text-info" data-toggle="modal" data-target="#myModal">Double Room</a>

                  <!-- The Modal -->
                  <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                              <div class="row">
                                    <div id="roompic" class="carousel slide" data-ride="carousel">
                                      <ul class="carousel-indicators">
                                        <li data-target="#roompic" data-slide-to="0" class="active"></li>
                                        <li data-target="#roompic" data-slide-to="1"></li>
                                        <li data-target="#roompic" data-slide-to="2"></li>
                                      </ul>
                                      
   	    <?php 
            $picPath = mysqli_query($conn,"SELECT * FROM `imageStore` WHERE image_ref = ".$row['refID']."");
            while($picRow = mysqli_fetch_array($picPath))
            {
    	    ?>                                   
                                      
                                      
                                      
                                      <div class="carousel-inner">
                                        <div class="carousel-item active">
                                          <img class="img-fluid" src="<?php echo $picRow['img_path']?>" alt="Double Room" width="1100" height="500"> 
                                        </div>
                                        <div class="carousel-item">
                                          <img class="img-fluid" src="<?php echo $picRow['img_path']?>" alt="Single Room" width="1100" height="500">   
                                        </div>
                                        <div class="carousel-item">
                                          <img class="img-fluid" src="<?php echo $picRow['img_path']?>" alt="Triple Room" width="1100" height="500"> 
                                        </div>
                                      </div>
                                      <a class="carousel-control-prev" href="#roompic" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                      </a>
                                      <a class="carousel-control-next" href="#roompic" data-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                      </a>
                                    </div>
                                </div>
          <?php 
            }
            ?>
                                <div class="row roominfo">
                                    <div class="container">
                                        <h5>Square:</h5> <p>"Display Square"</p><br>
                                        <h5>Facility:</h5> <p>"Display available facilities"</p><br>
                                    </div>
                                    
                              </div>
                            
                      </div>
                    </div>
                  </div>

                </div>  
            </td>
            <td><button class="btn-info">Show Price</button><p>"only show when have an account"</p></td>
          </tr>
          <tr>
            <td>1</td>
            <td>
              <div class="container">
                    <a class="text-info" data-toggle="modal" data-target="#myModal">Single Room</a>

                  <!-- The Modal -->
                  <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                              <div class="row">
                                    <div id="roompic" class="carousel slide" data-ride="carousel">
                                      <ul class="carousel-indicators">
                                        <li data-target="#roompic" data-slide-to="0" class="active"></li>
                                        <li data-target="#roompic" data-slide-to="1"></li>
                                        <li data-target="#roompic" data-slide-to="2"></li>
                                      </ul>

                                      <div class="carousel-inner">
                                        <div class="carousel-item active">
                                          <img class="img-fluid" src="picture/double%20studio%203.jpg" alt="Double Room" width="1100" height="500"> 
                                        </div>
                                        <div class="carousel-item">
                                          <img class="img-fluid" src="picture/double%20studio%203.jpg" alt="Single Room" width="1100" height="500">   
                                        </div>
                                        <div class="carousel-item">
                                          <img class="img-fluid" src="picture/double%20studio%205.jpg" alt="Triple Room" width="1100" height="500"> 
                                        </div>
                                      </div>
      

                                      <a class="carousel-control-prev" href="#roompic" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                      </a>
                                      <a class="carousel-control-next" href="#roompic" data-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                      </a>
                                    </div>
                                </div>
                                <div class="row roominfo">
                                    <div class="container">
                                        <h5>Square:</h5> <p>"Display Square"</p><br>
                                        <h5>Facility:</h5> <p>"Display available facilities"</p><br>
                                    </div>
                                    
                              </div>
                            
                      </div>
                    </div>
                  </div>

                </div> 
              </td>
            <td><button class="btn-info">Show Price</button><p>"only show when have an account"</p></td>
          </tr>
          <tr>
            <td>3</td>
            <td>
              <div class="container">
                    <a class="text-info" data-toggle="modal" data-target="#myModal">Tripple Room</a>

                  <!-- The Modal -->
                  <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                              <div class="row">
                                    <div id="roompic" class="carousel slide" data-ride="carousel">
                                      <ul class="carousel-indicators">
                                        <li data-target="#roompic" data-slide-to="0" class="active"></li>
                                        <li data-target="#roompic" data-slide-to="1"></li>
                                        <li data-target="#roompic" data-slide-to="2"></li>
                                      </ul>
                                      <div class="carousel-inner">
                                        <div class="carousel-item active">
                                          <img class="img-fluid" src="picture/double%20studio%202.jpg" alt="Double Room" width="1100" height="500"> 
                                        </div>
                                        <div class="carousel-item">
                                          <img class="img-fluid" src="picture/double%20studio%203.jpg" alt="Single Room" width="1100" height="500">   
                                        </div>
                                        <div class="carousel-item">
                                          <img class="img-fluid" src="picture/double%20studio%205.jpg" alt="Triple Room" width="1100" height="500"> 
                                        </div>
                                      </div>
                                      <a class="carousel-control-prev" href="#roompic" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                      </a>
                                      <a class="carousel-control-next" href="#roompic" data-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                      </a>
                                    </div>
                                </div>
                                <div class="row roominfo">
                                    <div class="container">
                                        <h5>Square:</h5> <p>"Display Square"</p><br>
                                        <h5>Facility:</h5> <p>"Display available facilities"</p><br>
                                    </div>
                                    
                              </div>
                            
                      </div>
                    </div>
                  </div>

                </div> 
              </td>
            <td><button class="btn-info">Show Price</button><p>"only show when have an account"</p></td>
          </tr>
        </tbody>
      </table>
    </div>
<?php
}
?>

    <script>
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</body>
</html>