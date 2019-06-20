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
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="loginFormCss.css">
    <script>
    $(function() {
        $("#searchAC").autocomplete({
            source: [ "Melbourne", "Sydney", "London", "Sao Paulo", "New York", "Xangai" ]
        });
    });
    </script>
</head>
    
<body>
     <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top ">
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
    <div class="container">
            <div clas="row">
                <div class="col-lg-2">
    </div>
    <div class="container my-3">
        <h1 class="text-center text-primary" name="cityName"></h1>
        <div class="row .bg-light my-3">
<?php
include 'config.php';
$conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname);
$INDate = $_GET["dateIn"];
$OUTDate = $_GET["dateOut"];
$BEDnum = $_GET["numBed"];
$Type = $_GET["roomType"];
$City = $_GET["city"];

$query = "SELECT coverImageStore.*,room.description,room.roomID,room.address,room.price FROM room, booking,coverImageStore WHERE coverImageStore.image_ref = room.refID AND city = '".$City."' AND 
(NOT EXISTS (SELECT booking.roomID FROM booking WHERE room.roomID = booking.bookID ) 
 OR NOT EXISTS (SELECT booking.roomID FROM booking WHERE (booking.dateIN BETWEEN '".$INDate."' AND '".$OUTDate."') OR (booking.dateOUT BETWEEN '".$INDate."' AND '".$OUTDate."')))";
$result = mysqli_query($conn, $query);
while($picRow = mysqli_fetch_array($result))
{
$refId = NULL;
if($refId != $picRow['image_ref'])
{
  $picRow['img_path']
?>
<div class="col">
	<div>
		<img src="<?php echo $picRow['img_path']?>" class="img-thumbnail" />
	</div>              
	<h6><?php echo $picRow['description']; ?></h6>
	<p><?php echo $picRow['address']; ?></p>
	<div class="row">
		<div class="col">
			<h6>Price</h6>
			<button type="button" class="btn btn-warning">
			  <span class="glyphicon glyphicon-search"></span> <?php echo $picRow['price']; ?>
			</button> 
		</div>
		<div class="col text-right align-self-end">
		    <form action="/HostedRoomShow.php" method="get">
    			<button name="roomID" type="submit" class="btn btn-info btn-sx" value="<?php echo $picRow['roomID'];?>">More Info >></button>
        </form>
        <?php 
    }
    ?>

		</div>
	</div>                     
</div>
<?php
}
?>




</div>
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
</body>
</html>