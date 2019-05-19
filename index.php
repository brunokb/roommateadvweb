<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
    <script type="text/javascript" src="js.js"></script>
    <link rel="stylesheet" href="loginFormCss.css">
</head>
    
<body>
     <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top ">
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

    <section id="backgroundimg">
        <div class="row">
            <div class="banner col-sm-8">
                <div class="container">
                    <div class="banner-top">
                        <h1>For Booking</h1>
                        <div class="banner-bottom">
                            <div class="bnr-one">
                                <div class="bnr-left">
                                    <p>Check In</p>
                                </div>
                                <div class="bnr-right">
                                    <input class="date" id="datepicker" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="bnr-one">
                                <div class="bnr-left">
                                    <p>Check Out</p>
                                </div>
                                <div class="bnr-right">
                                    <input class="date" id="datepicker1" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="bnr-one">
                                <div class="bnr-left">
                                    <p>Adults</p>
                                </div>
                                <div class="bnr-right">
                                    <select>
                                        <option  class="rm" value="volvo">0</option>
                                        <option  class="rm" value="saab">1</option>
                                        <option  class="rm" value="opel">2</option>
                                        <option  class="rm" value="audi">3</option>
                                    </select>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="bnr-one">
                                <div class="bnr-left">
                                    <p>Room</p>
                                </div>
                                <div class="bnr-right">
                                    <select>
                                        <option value="volvo">Select a type</option>
                                        <option value="saab">Single</option>
                                        <option value="opel">Double</option>
                                        <option value="audi">Suite</option>
                                    </select>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="bnr-btn">
                                <form>
                                    <input type="submit" value="Book Now">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-txt col-sm-4">
                <div class="starter-template">
                    <h1>Welcome to Roommate</h1>
                    <p class="lead">Connecting Journeys</p>
                    <!-- Button to open the modal login form -->
                    <button onclick="document.getElementById('id01').style.display='block'" class="btn btn-primary">Login</button>
					<button class="btn btn-primary"><a href="register.html">Register</a></button>

                    
                    <!-- The Modal -->
                    <div id="id01" class="modal">
                      <span onclick="document.getElementById('id01').style.display='none'" 
                    class="close" title="Close Modal">&times;</span>

                      <!-- Modal Content -->
                      <form class="modal-content animate loginForm" action="check.php" method="POST">
                        <div class="imgcontainer">
                          <img src="picture/logo%20web.png" alt="Avatar" class="avatar">
                        </div>

                        <div class="container loginContainer">
                          <label for="uname"><b>Email</b></label>
                          <input class="inputLogin" type="text" placeholder="Enter Username" name="email" required>

                          <label for="psw"><b>Password</b></label>
                          <input class="inputLogin" type="password" placeholder="Enter Password" name="pswd" required>

                          <button class="loginButton" type="submit">Login</button>
                          <label>
                            <input  type="checkbox" checked="checked" name="remember"> Remember me
                          </label>
                        </div>

                        <div class="container loginContainer" style="background-color:#f1f1f1">
                          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                          <span class="psw">Forgot <a href="#">password?</a></span>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container my-3">
        <h1 class="text-center text-primary">LONDON</h1>
        <div class="row .bg-light my-3">
         


<?php
$dbname = 'id9561485_roommateadvweb';
$dbuser = 'id9561485_6931';
$dbpass = 'ait1234@!';
$dbhost = 'localhost';
$conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname);
$result = mysqli_query($conn,"SELECT * FROM room");	
while($row = mysqli_fetch_array($result))
{
$picPath = mysqli_query($conn,"SELECT * FROM `imageStore` WHERE `image_ref` = ".$row['refID']." LIMIT 1");
?>
<div class="col">
	<div>
	<?php 
    while($picRow = mysqli_fetch_array($picPath))
    {
	?>
		<img src="<?php echo $picRow['img_path']?>" class="img-fluid" />
	<?php 
    }
    ?>
	</div>              
	<h6><?php echo $row['description']; ?></h6>
	<p><?php echo $row['address']; ?></p>
	<div class="row">
		<div class="col">
			<h6>Price</h6>
			<button type="button" class="btn btn-warning">
			  <span class="glyphicon glyphicon-search"></span> <?php echo $row['price']; ?>
			</button> 
		</div>
		<div class="col text-right align-self-end">
		    <form action="/hotelinfo.php" method="get">
    			<button name="room" type="submit" class="btn btn-info btn-sx" value="<?php echo $row['roomID'];?>">More Info >></button>
            </form>

		</div>
	</div>                     
</div>
<?php
}
?>



		 
            
     
        
         </div>
    </div>
    <div class="container text-center my-3" id="about">
        <br>
        <h1>ABOUT US</h1>
        <br>
        <h5>Developed by Bruno Da Silva,Phat Truong and Jihong Guo</h5>
    </div>
    <script>
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
    </script>
    <script>
        $("#btnAbout").click(function() {
            $('html, body').animate({
                scrollTop: $("#about").offset().top
            }, 2000);
        });
    </script>
</body>
</html>