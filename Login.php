<!DOCTYPE html>
<?php
	session_start();?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> jsk appointment </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

    
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->


  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <
    <!-- ======= Services Section ======= -->
    

    <!-- ======= Contact Section ======= -->
	<?php
if(isset($_GET["log"]))
{
	$email=$_GET["name"];
	$pswd=$_GET["email"];
	$mpswd=($pswd);
	
	$con=mysqli_connect("localhost","root","","dk");
	
	$q="select * from registration where email='$email' AND password='$mpswd'";
	$c=mysqli_query($con,$q);
	$r=mysqli_num_rows($c);
	if($r==0)
	{
		?>
		<script>
			alert('Invalid username password');
			</script>
			<?php
	}
	else{
		$_SESSION['pr']=$email;
		while($row=mysqli_fetch_array($c))
		{
		    
			$_SESSION['namee']=$row['name'];
			$_SESSION['uid']=$row['id'];
			
		}
	
		
		?>
		<script>
			window.location="indexa.php";
			alert('login successfull');
			</script>
	<?php
	}
	}
?>
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">Login Here</h2>
          
        </div>

       

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
          <div class="col-xl-9 col-lg-12 mt-4">
            <form action="#" method="get" role="form" >
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Email" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="password" class="form-control" name="email" id="email" placeholder="Your Password" required>
                </div>
              </div>
			 
              
             
              <div class="text-center"><button name="log" type="submit">Login</button></div>
			  if you are not rejistred then <a href="regg.php">Sign in</a>Here
            </form>
			
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>JSK Appointment</h3>
            <p>
              <strong>Email:</strong> support@government.com<br>
            </p>
          </div>

          

   

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>