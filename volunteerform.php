<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <title>Volunteer Registration</title>
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel = "stylesheet" href = "assets/css/styles1.css">
    <link rel = "stylesheet" href = "assets/css/style.css">
</head>
<body>
  <div class = "form-page-container">
  <div class="container d-flex align-items-center">

    <h1 class="logo me-auto"><a href="index.html">SAHAYOGI</a></h1>

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a class="active" href="index.html">HOME</a></li>
        <li><a class="active" href="ed_schemes.html">EDUCATION</a></li>
        <li><a class = "active" href="health_main_eng.html">HEALTHCARE</a></li>
        <li><a  class="active" href="volunteer.html"><span>GET INVOLVED</span> </a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
      
<div class="box">
    <div class="bag">
    <div class = "form">
        <h2>Register yourself as a Volunteer <br></h2>
	<form name = "volunteer" ACTION = "volunteerform.php" METHOD = "POST" >
		<div class = "input-box"> 
            <input type="text" id="fname" name="fname" required placeholder="First Name">
        </div> 
        <div class = "input-box">
              
              <input type="text" id="mname" name="mname" placeholder="Middle Name">
              </div>
              <div class = "input-box">
              <input type="text" id="lname" name="lname" placeholder="Last Name">   
              </div>
              <div class = "input-box">
              <input type="text" id="phone" name="phone" required placeholder="Mobile Number">
              </div>
              <div class = "input-box">
              <input type= "email" id="vmail" name="vmail" placeholder="Email" >
              </div>
              <div class = "input-box">
                <input type="text" id="gender" name="gender" required placeholder="Gender: M / F / O">
                </div>
                <div class = "input-box">
                    <input type = "text" id = "address" name="address" placeholder="Address ">        </div>
                    <div class = "input-box">
                    <input type = "text" id = "loc" name="loc"  placeholder="Locality">
                    </div>
                    <div class = "input-box">
                        <input type = "submit" id = "submit" name="submit" value="Register" >
                        </div>
                    </form>
                </div>
                </div>
                </div>
                </body>
                </html>