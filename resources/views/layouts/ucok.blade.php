<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>OLDshop</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Adore Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<!--// css -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Ceviche+One" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>

    <!-- start-smooth-scrolling -->
            <script type="text/javascript" src="js/easing.js"></script>
            <script type="text/javascript">
                jQuery(document).ready(function($) {
                    $(".scroll").click(function(event){     
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
            </script>
    <!-- //start-smoth-scrolling -->
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
</head>
<body>
    <div class="header-w3">
            <div class="header-top-agile">
                <div class="container">
                    <div class="col-md-3 logo-agileinfo">
                        <h1><a href="index.html">OLDshop</a></h1>
                    </div>
                    <div class="col-md-9 social-icons-agileits">
                        <ul>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>              
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="header-bottom-agile">
                <div class="container">
                    <div class="col-md-9 navigation">
                        <nav class="navbar navbar-default cl-effect-16" id="cl-effect-16">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div id="navbar" class="navbar-collapse navbar-right collapse hover-effect">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="/" data-hover="HOME">HOME</a></li>
                                <li><a href="{{ url('/about') }}" data-hover="ABOUT">ABOUT</a></li>
                                <li><a href="{{ url('/galeri') }}" data-hover="GALLERY">GALLERY</a></li>
                                <li class="dropdown mega-dropdown act">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="CODES">CODES<span class="caret"></span></a>              
                                    <div class="dropdown-menu mega-dropdown-menu codes-menu">
                                        <ul>    
                                            <li><a href="icons.html">Icons</a></li>
                                            <li><a href="typography.html">Typography</a></li>
                                        </ul>             
                                    </div>              
                                </li>
                                <li><a href="contact.html" data-hover="CONTACT">CONTACT</a></li>
                            </ul>   
                        </div>
                        </nav>
                    </div>
                    <div class="col-md-3 search">
                        <div id="sb-search" class="sb-search">
                            <form action="#" method="post">
                                <input class="sb-search-input" name="search" placeholder="Enter your search term..." id="search" required="">
                                <input class="sb-search-submit" type="submit" value="">
                                <span class="sb-icon-search"> </span>
                            </form>
                            <div class="clearfix"> </div>
                            <!-- search-scripts -->
                            <script src="js/classie.js"></script>
                            <script src="js/uisearch.js"></script>
                                <script>
                                    new UISearch( document.getElementById( 'sb-search' ) );
                                </script>
                                 </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
    </div>

                                        @yield('content')



<div class="footer-agileits-w3layouts" id="footer">
        <div class="container">
            <div class="col-md-4 footer-left-agile">
                <h1><a href="#">OLDshop</a></h1>
                <p>Siap melayani dengan baik,tanpa kunjungan kalian kami bukan apa apa,senyuman dan sapaan motto utama kami.</p>
            </div>
            <div class="col-md-4 footer-middle-w3-agileits">
                <h3>Address</h3>
                <ul>
                    <li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></li>
                    <li>Jl....</li>
                </ul>
                <ul class="gap">
                    <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></li>
                    <li>+18044268943</li>
                </ul>
                <ul>
                    <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></li>
                    <li><a href="mailto:info@example.com">example@gmail.com</a></li>
                </ul>
            </div>
            
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="copy-w3-agileits">
        <div class="container">
            <p>© 2016. All Rights Reserved | Design by <a href="http://w3layouts.com/">Alif</a></p>
        </div>
    </div>
</body>
</html>