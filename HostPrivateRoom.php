<?php
		include('uploadDB.php');		
?>
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
    
<body class="bgImage">
     <nav class="navbar navbar-expand-sm bg-dark nav-custom">
          <!-- Brand/logo -->
          <a class="navbar-brand" href="home.php">
            <img src="picture/logo%20web.png" alt="logo" style="width:80px;">
          </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
         <div class="search-container ">
            <form action="/action_page.php">
              <input class=" border border-primary" type="text" placeholder="Search.." name="search">
              <button class=" border border-primary" type="submit"><i class="fa fa-search "></i></button>
            </form>
          </div>

          <!-- Links -->
         <div class="collapse navbar-collapse menu" id="collapsibleNavbar">
              <ul class="navbar-menu navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link text-primary " href="home.php" data-toggle="tooltip" data-placement="Home" title="Home!">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-primary" href="#" data-toggle="tooltip" data-placement="Host Your Room" title="Host Your Room!">Host Your Room</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-primary" href="#" data-toggle="tooltip" data-placement="About Us" title="About Us!">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-primary" href="#" data-toggle="tooltip" data-placement="Help & Contact" title="Help & Contact!">Help & Contact</a>
                </li>
              </ul>
         </div>
    </nav>
    <section>




        <div class= "row">
            <div class="col"></div>
            <div class="col">
                <h1 class="text-center">Register Private Room</h1>
                <form method="POST" name="upfrm" action="" enctype="multipart/form-data" class="was-validated">	
                <div class="form-group">
                    <label for="roomDescription">Room Description:</label>
                    <input type="text" class="form-control" id="roomDescription" placeholder="About your room!" name="roomDescription" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>

                  <div class="form-group">
                    <label for="roomAddress">Address:</label>
                    <input type="text" class="form-control" id="roomAddress" placeholder="Address" name="roomAddress" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>

                  <div class="form-group">
                    <label for="roomCity">City:</label>
                    <input type="text" class="form-control" id="roomCity" placeholder="City" name="roomCity" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  <div class="form-group">
                    <label for="pwd">Capacity:</label>
                    <select class="form-control" name="capacitySelect">
                      <option value="1">Single</option>
                      <option value="2">Double</option>
                      <option value="3">Triple ppl</option>
                    </select>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                    <div class="form-group">
                    <label for="roomPrice">Room Price:</label>
                    <input type="text" class="form-control" id="roomPrice" placeholder="Room Price" name="roomPrice" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  <input type="file" name="fileImg1" class="file_input" />
                  <input type="file" name="fileImg2" class="file_input" />
                  <input type="file" name="fileImg3" class="file_input" />
                  <input type="file" name="fileImg4" class="file_input" />
                  <input type="file" name="fileImg5" class="file_input" />
                  <div class="form-group form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" name="remember" required> I agree all information provided is true
                      <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Check this checkbox to continue.</div>
                    </label>
                  </div>
                  <button type="submit" value="Upload" name="btn_upload" class="btn btn-primary">Insert</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    
</section>
    </body>