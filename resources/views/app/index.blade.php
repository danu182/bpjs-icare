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
      <title>sbs</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      {{-- <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css')}}"> --}}
      <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ asset('asset/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('asset/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('asset/images/fevicon.png')}}" type="image/gif" />
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{ asset('asset/images/loading.gif')}}" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->

      @include('app.layout.header')
      
      <!-- end header inner -->
      <!-- end header -->
      <!-- top -->

      @include('app.layout.top')
      
      <!-- end banner -->
      <!-- our class -->
      <div class="class">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center">
                     <h2>Our Skating Class</h2>
                     <p>There are many variations of passages of Lorem</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 margi_bottom">
                  <div class="class_box text_align_center">
                     <i><img src="{{ asset('asset/images/class1.png')}}" alt="#"/></i>
                     <h3>Skateboard</h3>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alterationThere are many variations </p>
                  </div>
                  <a class="read_more" href="Javascript:void(0)">Read More</a>
               </div>
               <div class="col-md-4 margi_bottom">
                  <div class="class_box blue text_align_center">
                     <i><img src="{{ asset('asset/images/class2.png')}}" alt="#"/></i>
                     <h3>Skateboard</h3>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alterationThere are many variations </p>
                  </div>
                  <a class="read_more" href="Javascript:void(0)">Read More</a>
               </div>
               <div class="col-md-4 margi_bottom">
                  <div class="class_box text_align_center">
                     <i><img src="{{ asset('asset/images/class3.png')}}" alt="#"/></i>
                     <h3>Skateboard</h3>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alterationThere are many variations </p>
                  </div>
                  <a class="read_more" href="Javascript:void(0)">Read More</a>
               </div>
            </div>
         </div>
      </div>
      <!-- end our class -->
      <!-- about -->
      <div class="about">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-md-6">
                  <div class="titlepage text_align_left">
                     <h2>About <br>Skating <br> school</h2>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alterationThere are many variatioThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alterationThere are many variationsns
                     </p>
                     <div class="link_btn">
                        <a class="read_more" href="about.html">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="about_img text_align_center">
                     <figure><img src="{{ asset('asset/images/about.png')}}" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- skating -->
      <div class="skating">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center">
                     <h2>Skating  Video</h2>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                     </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="skating-box ">
                     <figure><img src="{{ asset('asset/images/sakt1.png')}}" alt="#"/></figure>
                     <div class="link_btn">
                        <a class="read_more" href="Javascript:void(0)">See More</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="skating-box">
                     <figure><img src="{{ asset('asset/images/sakt2.png')}}" alt="#"/></figure>
                     <div class="link_btn">
                        <a class="read_more" href="Javascript:void(0)">See More</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="skating-box">
                     <figure><img src="{{ asset('asset/images/sakt3.png')}}" alt="#"/></figure>
                     <div class="link_btn">
                        <a class="read_more" href="Javascript:void(0)">See More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end skating -->
      <!-- shop -->
      <div class="shop">
         <div class="container-fluid">
            <div class="row d_flex d_grid">
               <div class="col-md-7">
                  <div class="shop_img text_align_center" data-aos="fade-right">
                     <figure><img class="img_responsive" src="{{ asset('asset/images/shop.png')}}" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-5 order_1_mobile">
                  <div class="titlepage text_align_left ">
                     <h2>Our  Skate <br>Shop</h2>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alterationThere are many variatioThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alterationThere are many variationsns
                     </p>
                     <a class="read_more" href="shop.html">Buy Now</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end shop -->
      <!-- testimonial -->
      <div class="testimonial">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="titlepage text_align_center">
                     <h2>Testimonial</h2>
                  </div>
               </div>
            </div>
            <!-- start slider section -->
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container-fluid">
                              <div class="carousel-caption relative">
                                 <div class="row d_flex">
                                    <div class="col-md-3">
                                       <div class="test_box text_align_center">
                                          <span><img src="{{ asset('asset/images/test1.png')}}" alt="#"/></span>
                                          <h4>Jone Lo</h4>
                                          <img class="img_responsive" src="{{ asset('asset/images/te.png')}}" alt="#"/>
                                          <p>humour, or randomised words which don't look even slightly believable. If you are</p>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="test_box white_bg text_align_center">
                                          <span><img src="{{ asset('asset/images/test2.png')}}" alt="#"/></span>
                                          <h4>Michale</h4>
                                          <img class="img_responsive" src="{{ asset('asset/images/te2.png')}}" alt="#"/>
                                          <p>humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure</p>
                                       </div>
                                    </div>
                                    <div class="col-md-3">
                                       <div class="test_box text_align_center">
                                          <span><img src="{{ asset('asset/images/test3.png')}}" alt="#"/></span>
                                          <h4>Disol</h4>
                                          <img class="img_responsive" src="{{ asset('asset/images/te.png')}}" alt="#"/>
                                          <p>humour, or randomised words which don't look even slightly believable. If you are</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container-fluid">
                              <div class="carousel-caption relative">
                                 <div class="row d_flex">
                                    <div class="col-md-3">
                                       <div class="test_box text_align_center">
                                          <span><img src="{{ asset('asset/images/test2.png')}}" alt="#"/></span>
                                          <h4>Michale</h4>
                                          <img class="img_responsive" src="{{ asset('asset/images/te.png')}}" alt="#"/>
                                          <p>humour, or randomised words which don't look even slightly believable. If you are</p>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="test_box white_bg text_align_center">
                                          <span><img src="{{ asset('asset/images/test3.png')}}" alt="#"/></span>
                                          <h4>Disol</h4>
                                          <img class="img_responsive" src="{{ asset('asset/images/te2.png')}}" alt="#"/>
                                          <p> humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure</p>
                                       </div>
                                    </div>
                                    <div class="col-md-3">
                                       <div class="test_box text_align_center">
                                          <span><img src="{{ asset('asset/images/test1.png')}}" alt="#"/></span>
                                          <h4>Jone Lo</h4>
                                          <img class="img_responsive" src="{{ asset('asset/images/te.png')}}" alt="#"/>
                                          <p>humour, or randomised words which don't look even slightly believable. If you are</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container-fluid">
                              <div class="carousel-caption relative">
                                 <div class="row d_flex">
                                    <div class="col-md-3">
                                       <div class="test_box text_align_center">
                                          <span><img src="{{ asset('asset/images/test3.png')}}" alt="#"/></span>
                                          <h4>Disol</h4>
                                          <img class="img_responsive" src="{{ asset('asset/images/te.png')}}" alt="#"/>
                                          <p>humour, or randomised words which don't look even slightly believable. If you are</p>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="test_box  white_bg text_align_center">
                                          <span><img src="{{ asset('asset/images/test1.png')}}" alt="#"/></span>
                                          <h4>Jone Lo</h4>
                                          <img class="img_responsive" src="{{ asset('asset/images/te2.png')}}" alt="#"/>
                                          <p> humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure</p>
                                       </div>
                                    </div>
                                    <div class="col-md-3">
                                       <div class="test_box text_align_center">
                                          <span><img src="{{ asset('asset/images/test2.png')}}" alt="#"/></span>
                                          <h4>Michale</h4>
                                          <img class="img_responsive" src="{{ asset('asset/images/te.png')}}" alt="#"/>
                                          <p>humour, or randomised words which don't look even slightly believable. If you are</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end testimonial -->
      <!--  footer -->
      @include('app.layout.footer')
      <!-- end footer -->
      
      <!-- Javascript files-->
      <script src="{{ asset('asset/js/jquery.min.js')}}"></script>
      <script src="{{ asset('asset/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{ asset('asset/js/jquery-3.0.0.min.js')}}"></script>
      <!-- sidebar -->
      <script src="{{ asset('asset/js/custom.js')}}"></script>
      <script>
         AOS.init();
      </script>
   </body>
</html>