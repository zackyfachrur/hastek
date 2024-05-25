<?php include("./data/table.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Hastek | Home</title>
   <meta name="keywords" content>
   <meta name="description" content>
   <meta name="author" content>
   <!-- AOS css -->
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
   </div>
   <!-- end loader -->
   <!-- header -->
   <header>
      <!-- header inner -->
      <?php 
         include("./components/navbar-nav.php");
         ?>
      <!-- end header inner -->
   </header>
   <!-- end header -->
   <section class="slider_section h-100">
      <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">

         <div class="carousel-inner">
            <?php for ($i=0; $i < 3; $i++) { ?>
            <div class="carousel-item <?php echo $i == 0 ? "active" : ""; ?>">
               <img class="first-slide w-100" src="<?php echo $banner[$i] ?>" alt="First slide" data-aos="fade">
               <div class="container">
                  <div class="carousel-caption relative">
                     <h1>Our <br> <strong class="black_bold">Latest
                        </strong><br>
                        <strong class="yellow_bold">Product </strong>
                     </h1>
                     <p>It is a long established fact that a r <br>
                        eader will be distracted by the readable content
                        of a page </p>
                     <a href="#">see more Products</a>
                  </div>
               </div>
            </div>
            <?php } ?>


         </div>
         <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-right"></i>
         </a>
         <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-left"></i>
         </a>

      </div>

   </section>

   <!-- Lastestnews -->
   <div class="Lastestnews blog">
      <div class="container">
         <div class="row">
            <?php for($i = 0; $i < 3; $i++) { ?>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-10">
               <div class="news-box p-3">
                  <figure><img src="<?php echo $product_home["image"][$i] ?>" alt="img" /></figure>
                  <h3><?php echo $product_home["title"][$i] ?></h3>
                  <span> <?php echo $product_home["details"][$i] ?> </span>
                  <!-- <p><?php echo $product_home["desc"][$i] ?></p> -->
               </div>
            </div>
            <?php } ?>
         </div>
      </div>
   </div>
   <!-- end Lastestnews -->

   <!-- Video  -->
   <div class="about" style="margin-bottom: 200px;">
      <div class="container">
         <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
               <div class="ratio ratio-16x9 w-auto ">
                  <iframe class="w-100" height="275px"
                     src="https://www.youtube.com/embed/9qEjNogFOck?si=wBltQmovmpWwUbCB" title="YouTube video"
                     allowfullscreen></iframe>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
               <div class="about_box">
                  <h3>Who is Lighten</h3>
                  <p>It has survived not only five centuries, but also the leap into electronic typesetting,
                     remaining essentially unchanged. It was popularised in the 1960s with the release of
                     Letraset sheets containing Lorem Ipsum.</p>
                  <p>Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                     industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                     of type and scrambled it to make a type specimen book.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end Video -->

   <!-- service -->
   <!-- <div class="service">
      <div class="container">
         <div class="row">
            <div class="col-md-8 offset-md-2">
               <div class="title">
                  <h2>Service <strong class="black">Process</strong></h2>
                  <span>Easy and effective way to get your device
                     repair</span>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
               <div class="service-box">
                  <i><img src="icon/service1.png" /></i>
                  <h3>Fast service</h3>
                  <p>Exerci tation ullamcorper suscipit lobortis nisl ut
                     aliquip ex ea </p>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
               <div class="service-box">
                  <i><img src="icon/service2.png" /></i>
                  <h3>Secure payments</h3>
                  <p>Exerci tation ullamcorper suscipit lobortis nisl ut
                     aliquip ex ea </p>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
               <div class="service-box">
                  <i><img src="icon/service3.png" /></i>
                  <h3>Expert team</h3>
                  <p>Exerci tation ullamcorper suscipit lobortis nisl ut
                     aliquip ex ea </p>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
               <div class="service-box">
                  <i><img src="icon/service4.png" /></i>
                  <h3>Affordable services</h3>
                  <p>Exerci tation ullamcorper suscipit lobortis nisl ut
                     aliquip ex ea </p>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
               <div class="service-box">
                  <i><img src="icon/service5.png" /></i>
                  <h3>90 Days warranty</h3>
                  <p>Exerci tation ullamcorper suscipit lobortis nisl ut
                     aliquip ex ea </p>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
               <div class="service-box">
                  <i><img src="icon/service6.png" /></i>
                  <h3>Award winning</h3>
                  <p>Exerci tation ullamcorper suscipit lobortis nisl ut
                     aliquip ex ea </p>
               </div>
            </div>
         </div>
      </div>
   </div> -->
   <!-- end service -->

   <!-- our product -->
   <!-- <div class="product">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="title">
                  <h2>our <strong class="black">products</strong></h2>
                  <span>We package the products with best services to make
                     you a happy customer.</span>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="product-bg">
      <div class="product-bg-white">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="icon/p1.png" /></i>
                     <h3>Norton Internet Security</h3>
                     <span>$25.00</span>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="icon/p2.png" /></i>
                     <h3>Norton Internet Security</h3>
                     <span>$25.00</span>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="icon/p3.png" /></i>
                     <h3>Norton Internet Security</h3>
                     <span>$25.00</span>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="icon/p4.png" /></i>
                     <h3>Norton Internet Security</h3>
                     <span>$25.00</span>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="icon/p5.png" /></i>
                     <h3>Norton Internet Security</h3>
                     <span>$25.00</span>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="icon/p2.png" /></i>
                     <h3>Norton Internet Security</h3>
                     <span>$25.00</span>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="icon/p6.png" /></i>
                     <h3>Norton Internet Security</h3>
                     <span>$25.00</span>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="product-box">
                     <i><img src="icon/p7.png" /></i>
                     <h3>Norton Internet Security</h3>
                     <span>$25.00</span>
                  </div>
               </div>

            </div>
         </div>
      </div>
      <div class="Clients_bg_white">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h3>What Clients Say?</h3>
                  </div>
               </div>
            </div>
            <div id="client_slider" class="carousel slide banner_Client" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#client_slider" data-slide-to="0" class="active"></li>
                  <li data-target="#client_slider" data-slide-to="1"></li>
                  <li data-target="#client_slider" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="carousel-caption text-bg">
                           <div class="img_bg">
                              <i><img src="images/lllll.png" /><span>Jone
                                    Due<br><strong class="date">12/02/2019</strong></span></i>

                           </div>

                           <p>You guys rock! Thank you for making it
                              painless, pleasant and most of all hassle
                              free! I wish I would have thought of it
                              first. I am really satisfied with my first
                              laptop service.<br>
                              You guys rock! Thank you for making it
                              painless, pleasant and most of all hassle
                              free! I wish I would have thought of it
                              first. I am </p>

                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption text-bg">
                           <div class="img_bg">
                              <i><img src="images/lllll.png" /><span>Jone
                                    Due<br><strong class="date">12/02/2019</strong></span></i>

                           </div>
                           <p>You guys rock! Thank you for making it
                              painless, pleasant and most of all hassle
                              free! I wish I would have thought of it
                              first. I am really satisfied with my first
                              laptop service.<br>
                              You guys rock! Thank you for making it
                              painless, pleasant and most of all hassle
                              free! I wish I would have thought of it
                              first. I am </p>

                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption text-bg">
                           <div class="img_bg">
                              <i><img src="images/lllll.png" /><span>Jone
                                    Due<br><strong class="date">12/02/2019</strong></span></i>

                           </div>
                           <p>You guys rock! Thank you for making it
                              painless, pleasant and most of all hassle
                              free! I wish I would have thought of it
                              first. I am really satisfied with my first
                              laptop service.<br>
                              You guys rock! Thank you for making it
                              painless, pleasant and most of all hassle
                              free! I wish I would have thought of it
                              first. I am </p>

                        </div>
                     </div>
                  </div>
               </div>

            </div>

         </div>
      </div>

      <div class="container">
         <div class="yellow_bg">
            <div class="row">
               <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                  <div class="yellow-box">
                     <h3>REQUEST A FREE QUOTE<i><img src="icon/calll.png" /></i></h3>

                     <p>Get answers and advice from people you want it
                        from.</p>
                  </div>
               </div>
               <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                  <div class="yellow-box">
                     <a href="#">Get Quote</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div> -->

   <!-- end our product -->
   <!-- map -->
   <!-- <div class="container-fluid padi">
      <div class="map">
         <img src="images/mapimg.jpg" alt="img" />
      </div>
   </div> -->
   <!-- end map -->
   <!--  footer -->

   <footer>
      <?php include("./components/footer-foot.php")?>
   </footer>
   <!-- end footer -->

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
   </script>
   <!-- AOS JS -->
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   <script>
   $(document).ready(function() {

      AOS.init();
      $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
      });

      $(".zoom").hover(function() {

         $(this).addClass("transition");
      }, function() {

         $(this).removeClass("transition");
      });
   });
   </script>
</body>

</html>