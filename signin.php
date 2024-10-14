<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Aviato | E-commerce template</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Constra HTML Template v1.0">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="assets/plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
  
  <!-- Animate css -->
  <link rel="stylesheet" href="assets/plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="assets/plugins/slick/slick.css">
  <link rel="stylesheet" href="assets/plugins/slick/slick-theme.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

  <style>
    .is-check-invalid.active{
        border:1px solid red;
    }
    .signin-page {  
      margin-top: 100px;  
     
    }  
    .form-control {  
      border-radius: 0; 
       
    }  
    .btn-main {  
      background-color: black;  
      color: white;  
      border-radius: 0;  
      padding: 10px 30px;
    }  
    .btn-main:hover {  
      background-color: #495057;  
    }  

  .form-container {  
    border: 1px solid #0000; /* Te tae me te rahi o te porowhita */  
    border-radius: 10px; /* Te porowhita o nga kokonga */  
    padding: 20px; /* Te waahi i waenga i te porowhita me te puka */  
    background-color: #fff; /* Te tae o te papanga i roto i te porowhita */  
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Te awhina i te ahua */  
  }  
  </style>

</head>

<body id="body">

<section class="signin-page account">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="block text-center form-container">
          <a class="logo" href="index.html">
          <img style="width:150px;height:80px" src="assets/images/logoKL.jpg" alt="">
          </a>
          <h2 class="text-center">Create Your Account</h2>

          <form class="text-left clearfix formSignin" method="POST">
            <div class="form-group">
              <input type="text" name="first_name" class="form-control is-check-invalid first_name"  placeholder="First Name">
            </div>
            <div class="form-group">
              <input type="text" name="last_name" class="form-control is-check-invalid last_name"  placeholder="Last Name">
            </div>
            <div class="form-group">
              <input type="text" name="username" class="form-control is-check-invalid username"  placeholder="Username">
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control is-check-invalid email"  placeholder="Email">
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control is-check-invalid password"  placeholder="Password">
            </div>
            <div class="text-center">
              <butto onclick="SigninAccount('.formSignin')" type="submit" class="btn btn-main text-center">Sign In</butto>
            </div>
          </form>
          <p class="mt-20">Already hava an account ?<a href="login.php"> Login</a></p>
         
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="assets/plugins/instafeed/instafeed.min.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="assets/plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    <!-- Count Down Js -->
    <script src="assets/plugins/syo-timer/build/jquery.syotimer.min.js"></script>

    <!-- slick Carousel -->
    <script src="assets/plugins/slick/slick.min.js"></script>
    <script src="assets/plugins/slick/slick-animation.min.js"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="assets/plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="js/script.js"></script>
    
    <script>
        const SigninAccount = (form) => {
            var allData = $(form).serializeArray();//input:file
            $.ajax({
                type: "POST",
                url: "http://localhost/BIG_PROJECT/Backend/ajax/index.php?type=signin",
                data: allData,
                dataType: "json",
                success: function (response) {
                    if(response.status == 200) {
                       window.location.href = 'http://localhost/BIG_PROJECT/Backend/login.php';  // Redirect to dashboard page
                         
                    }else{
                        var errors =response.errors;
                        $.each(errors, function(key, value){
                            $(`.${key}`).addClass('active');
                        });
                    }
                }
            });
        }
    </script>

  </body>
  </html>