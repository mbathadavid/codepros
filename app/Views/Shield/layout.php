<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themewagon.github.io/studylab/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Mar 2024 13:04:47 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <title><?= $this->renderSection('title') ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/fontawesome/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/front/css/animate.css">
    
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/front/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/front/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/front/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/front/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/front/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/front/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/front/css/style.css">
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
     <a class="navbar-brand" href="<?php echo base_url() ?>"><span>Code</span>help</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
   </button>

   <div class="collapse navbar-collapse" id="ftco-nav">
       <ul class="navbar-nav ml-auto">
       <li class="nav-item active"><a href="<?php echo base_url() ?>" class="nav-link">Home</a></li>
       <!-- <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
       <li class="nav-item"><a href="course.html" class="nav-link">Course</a></li>
       <li class="nav-item"><a href="instructor.html" class="nav-link">Instructor</a></li> -->
       <li class="nav-item btn btn-success"><a href="<?php echo base_url('register') ?>" class="nav-link">Sign Up</a></li>
       <li class="nav-item btn-info"><a href="<?php echo base_url('login') ?>" class="nav-link">Sign In</a></li>
   </ul>
 </div>
</div>
</nav>
<!-- END nav -->

<div class="hero-wrap js-fullheight" style="background-image: url('<?php echo base_url() ?>/assets/front/images/bg_1.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
      <div class="col-md-7 ftco-animate">
        <span class="subheading">Welcome to Codehelp</span>
        <h1 class="mb-4">Join us today to help or get helped with your code.</h1>
    </div>
</div>
</div>
</div>

<!-- Section Here -->
<?= $this->renderSection('main') ?>
<!-- Section Here -->

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="<?php echo base_url() ?>/assets/front/js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>/assets/front/js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?php echo base_url() ?>/assets/front/js/popper.min.js"></script>
<script src="<?php echo base_url() ?>/assets/front/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>/assets/front/js/jquery.easing.1.3.js"></script>
<script src="<?php echo base_url() ?>/assets/front/js/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url() ?>/assets/front/js/jquery.stellar.min.js"></script>
<script src="<?php echo base_url() ?>/assets/front/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url() ?>/assets/front/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url() ?>/assets/front/js/jquery.animateNumber.min.js"></script>
<script src="<?php echo base_url() ?>/assets/front/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url() ?>/assets/front/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
<script src="<?php echo base_url() ?>/assets/front/js/google-map.js"></script>
<script src="<?php echo base_url() ?>/assets/front/js/main.js"></script>

</body>

<!-- Mirrored from themewagon.github.io/studylab/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Mar 2024 13:05:12 GMT -->
</html>