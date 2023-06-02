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
      <title>SARATECH | @yield('titre')</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <style>
  @import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
.login-block{
    background: #01485e;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #01485e, #01485e);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #01485e, #01485e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
float:left;
width:100%;
padding : 50px 0;
}
.banner-sec{background:url(https://static.pexels.com/photos/33972/pexels-photo.jpg)  no-repeat left bottom; background-size:cover; min-height:500px; border-radius: 0 10px 10px 0; padding:0;}

.carousel-inner{border-radius:0 10px 10px 0;}
.carousel-caption{text-align:left; left:5%;}
.login-sec{padding: 50px 30px; position:relative;}
.login-sec .copy-text{position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;}
.login-sec .copy-text i{color:#f8fcfd;}
.login-sec .copy-text a{color:#f8fbfc;}
.login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: #ffffff;}
.login-sec h3{margin-bottom:30px; font-weight:400; font-size:20px; color: #ffffff;}
.login-sec h2:after{content:" "; width:100px; height:5px; background:#01485e; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
.btn-login{background: #ffffff; color:#0c0b0b; font-weight:600;}
.banner-text{width:70%; position:absolute; bottom:40px; padding-left:20px;}
.banner-text h2{color:#fff; font-weight:600;}
.banner-text h2:after{content:" "; width:100px; height:5px; background:#FFF; display:block; margin-top:20px; border-radius:3px;}
.banner-text p{color:#fff;}


</style>
      

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="client/css/bootstrap.min.css"> 
      <!-- style css -->
      <link rel="stylesheet" href="client/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="client/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="client/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="client/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="client/css/owl.carousel.min.css">
      <link rel="stylesheet" href="client/css/owl.theme.default.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">

    <!--Appel partie header dans client.includes.header-->
    <br><br>
<header>
   
            <div class="col-md-12" >
               <div class="header_information" style="background-color: rgb(8, 100, 128);">
                  <ul style="color: rgb(244, 249, 250);">
                     <li><img src="client/images/1.png" alt="#"> Niamey-Niger</li> 
                     <li><img src="client/images/2.png" alt="#"> +227 91 11 70 84</li>
                     <li><img src="client/images/3.png" alt="#"> contact@saratechniger.com</li>
                  </ul>
               </div>
            </div>
        
  
    <!-- header inner -->
    <div class="header_white_section">
       <!--<div class="header_white_section">
          <div class="container-fluid">
             <div class="row">
                <div class="col-md-12">
                   <div class="header_information">
                      <ul>
                         <li><img src="{{ asset('client/images/1.png') }}" alt="#"> Niamey-Niger</li> 
                         <li><img src="{{ asset('client/images/2.png') }}" alt="#"> +227 91 11 70 84</li>
                         <li><img src="{{ asset('client/images/3.png') }}" alt="#"> contact@saratechniger.com</li>
                      </ul>
                   </div>
                </div>
             </div>
          </div>
       </div>-->
       <div class="container">
          <div class="row">
             <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                <div class="full">
                   <div class="center-desk">
                      <div class="logo"> <a href="{{url('/')}}"><img class="w-100" src="client/images/saratech_logo1.png" alt="#" style="height: 100px"></a> </div>
                   </div> 
                </div>
             </div>
             <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                <div class="menu-area">
                   <div class="limit-box">
                      <nav class="main-menu" style="display: block;">
                        <ul class="menu-area-main">
                           <li class="active"><a href="{{url('/')}}">Accuiel</a></li>
                           <li class="active"><a href="{{url('apropos')}}">A Propos</a></li>
                           <li class="active"><a href="{{url('actualite')}}">Actualités</a></li>
                           <li class="active"><a href="{{url('service')}}">Services</a></li>
                           <li class="active"><a href="{{url('partenaire')}}">Partenaires</a></li>
                           <li class="active"><a href="{{url('contact')}}">Contact</a></li>
                       </ul>
                      </nav>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- end header inner -->
 </header>
<hr>
 

    <!--Partie variable -->
    <!------ Include the above in your HEAD tag ---------->

<section class="login-block">
    <div class="container">
	<div class="row">
		<div class="col-md-4 login-sec">
		    <h2 class="text-center">Bienvenue Chez SARATECH</h2>
            <h3 class="text-center">Saratech Niger est une jeune startup Nigérienne qui œuvre dans le domaine du numérique</h3>
		    <form class="login-form">
  
  
    <div class="form-check">
    
        <button type="submit" class="btn btn-login float-right"><a href="{{url('apropos')}}">Voir plus</a></button>
  </div>
  
</form>
<div class="copy-text"></div>
		</div>
		<div class="col-md-8 banner">
            
                 
            
    <div class="carousel-item active">
      <img class="w-100" style="height: 500px" src="client/images/ll.jpg">
      
  </div>
               
		    
		</div>
	</div>
</div>
</section>

<br><br><br><br>   
<br><br><br><br>   
<br><br><br><br> 
<br><br><br><br>   
<br><br><br><br>   
<br><br><br><br>   
<div class="row">
        <div class="col-md-12">
            <div class="titlepage">
            <h2>Actualités</h2>
            </div>
        </div>
    </div>
      

 <center> 
   
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    
                        <figure><img class="w-50" style="height: 800px" src="client/images/ww.jpg" alt="#"><br><br><br>
                            
                                <h2>Chez Saratech, nous croyons que la technologie peut changer le
                                    monde. Nous sommes passionnés par l&#39;innovation et nous nous efforçons de
                                    repousser les limites de ce qui est possible.
                                    Notre vision est de devenir un leader mondial dans ces domaines, en
                                    proposant des solutions innovantes et sur mesure qui répondent aux besoins
                                    spécifiques de nos clients. Nous voulons également contribuer à la diffusion
                                    de la connaissance et de l&#39;expertise en offrant des formations de haute qualité
                                    pour les professionnels et les étudiants.</p>
                        </figure>
                        
                        
                     </div>
                   
                    <!--<img class="w-100"  src="client/images/o.jpg" alt="Image">-->
                </div>
               
            </div>
        </div>
    </div><br>
    <!--<img class="w-100"  src="client/images/o.jpg" alt="Image">-->
    </div>
    </center>

  <center> 
      
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <video controls="controls">
                    <source src="client/images/aaa.mp4">
                    <source src="client/images/aaa.ogg">
                </video>
               
                <!--<img class="w-100"  src="client/images/o.jpg" alt="Image">-->
            </div>
           
        </div>
    </div>
</div><br>
<!--<img class="w-100"  src="client/images/o.jpg" alt="Image">-->
</div>
</center>

    <!--Appel partie footer dans client.includes.footer-->
    <footer>
    <div id="contact" class="footer">
       <div class="container">
          <div class="row pdn-top-30">
             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <ul class="location_icon">
                   <li> <a href="#"><img src="client/icon/facebook.png"></a></li>
                   <li> <a href="#"><img src="client/icon/Twitter.png"></a></li>
                   <li> <a href="#"><img src="client/icon/linkedin.png"></a></li>
                   <li> <a href="#"><img src="client/icon/instagram.png"></a></li>
                </ul>
             </div>
             <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="Follow">
                   <h3>NOUS CONTACTEZ</h3>
                   <span><i class="fa fa-map-marker mr-2"></i> Niamey, Niger</span>
                   <span><i class="fa fa-phone mr-2"></i>+227 91 1170 84</span>
                   <span>contact@saratechniger.com</span>
                   <a href="https://www.facebook.com/saratech.niger"><span><i class="fa fa-facebook-f mr-2"></i>Saratech</span></a>
                   <span><i class="fa fa-twitter mr-2"></i>Saratech</span>
                   <span><i class="fa fa-linkedin mr-2"></i>Saratech</span>
                </div>
             </div>
             <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                <div class="Follow">
                   <h3>NAVIGATION</h3>
                   <ul class="link">
                      <li> <a href="{{url('/')}}"><i class="fa fa-angle-right mr-2"></i>Accueil</a></li>
                      <li> <a href="{{url('apropos')}}"><i class="fa fa-angle-right mr-2"></i>A Propos</a></li>
                      <li> <a href="{{url('actualite')}}"><i class="fa fa-angle-right mr-2"></i>Actualités</a></li>
                      <li> <a href="{{url('service')}}"><i class="fa fa-angle-right mr-2"></i>Services</a></li>
                      <li> <a href="{{url('partenaire')}}"><i class="fa fa-angle-right mr-2"></i>Partenaires</a></li>
                      <li> <a href="{{url('contact')}}"><i class="fa fa-angle-right mr-2"></i>Contact</a></li>
                   </ul>
                </div>
             </div>
             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="Follow">
                   <h3> Contact</h3>
                   <div class="row">
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                         <input class="Newsletter" placeholder="Nom" type="text">
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                         <input class="Newsletter" placeholder="Email" type="text">
                      </div>
                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                         <textarea class="textarea" placeholder="Message" type="text"></textarea>
                      </div>
                   </div>
                   <button class="Subscribe">Envoyer</button>
                </div>
             </div>
          </div>
          <div class="copyright">
             <div class="container">
                <p>© 2023 | SARATECH | Développé par HAMIDOU DJIBO Salha</a></p>
             </div>
          </div>
       </div>
    </div>
 </footer>
     
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!-- Javascript files-->
      <script src="client/js/jquery.min.js"></script>
      <script src="client/js/popper.min.js"></script>
      <script src="client/js/bootstrap.bundle.min.js"></script>
      <script src="client/js/jquery-3.0.0.min.js"></script>
      <script src="client/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="client/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="client/s/custom.js"></script>
      <!-- javascript --> 
      <script src="client/js/owl.carousel.js"></script>
      <script>
         $(document).ready(function() {
           var owl = $('.owl-carousel');
           owl.owlCarousel({
             margin: 10,
             nav: true,
             loop: true,
             responsive: {
               0: {
                 items: 1
               },
               600: {
                 items: 2
               },
               1000: {
                 items: 3
               }
             }
           })
         })
      </script>
      
   </body>
</html>