<head>

 <!-- Google Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<link href="style.css" rel="stylesheet">

</head>



<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.php">Patankar<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="about.php">About</a></li>
          <li><a class="nav-link scrollto" href="services.php">Services</a></li>
          <li class="dropdown"><a href="#"><span>Search</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="search.php">Regular Search</a></li>
              <li><a href="search-id.php">Search by Id</a></li>
              <li><a href="#">Offline biodata</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <?php 
				  if(isloggedin()){
				  	$id=$_SESSION['id'];
				  	echo "<a class='get-started-btn scrollto' href=\"userhome.php?id=$id\">User Home</a>";
				  	echo "<a class='get-started-btn scrollto' href=\"logout.php\">Logout</a>";
				  }
				  else{
				  	echo "<a class='get-started-btn scrollto' href=\"login.php\">Login</a>";
				  	echo "<a class='get-started-btn scrollto' href=\"register.php\">Register</a>";
				  }

				  ?>
    </div>
  </header><!-- End Header -->

