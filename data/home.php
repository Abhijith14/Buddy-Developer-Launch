<?php

include('db.php');


$sqlupdate = "UPDATE stats SET VISITORS = VISITORS + 1 WHERE id = 1";
mysqli_query($conn, $sqlupdate);

$sqlcheck = "SELECT * FROM stats WHERE id = 1";
$resultsc = mysqli_query($conn, $sqlcheck);
$visitorsc = 0;
if (mysqli_num_rows($resultsc)==1) {

	while ($row = $resultsc-> fetch_assoc()) {
		$visitorsc = $row['VISITORS'];
	}
}

?>
<html class="wide wow-animation desktop landscape js csstransforms rd-navbar-fullwidth-linked" lang="en">
<head>
	<!-- Site Title-->
	<title>Create With BUDDY | HOME
	</title>
	<meta charset="utf-8"/>
	<meta content="width=device-width, height=device-height, initial-scale=1.0" name="viewport"/>
	<meta content="IE=edge" http-equiv="X-UA-Compatible"/>
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="HOME | BUDDY Developer" />
	<meta property="og:url" content="https://www.buddywebdeveloper.live" />
	<meta property="og:site_name" content="BUDDY Developer" />
	<meta
	 name="description"
	 content="Our Aim is your big smile when your imagination comes to the screen while assuring you the best quality service at the minimum cost. Come and Create with BUDDY and give your thoughts a home screen.">
	<meta property="article:publisher" content="https://www.facebook.com/buddywebdeveloper" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:creator" content="@buddywebdeveloper" />
	<meta name="twitter:site" content="@buddywebdeveloper" />
	
	<script src="js/3ts2ksMwXvKRuG480KNifJ2_JNM.js">
	</script>
	<script src="js/4o300efCt-CXoq1JEC-sVReFz48.js">
	</script>
	<link href="assets/log1.png" rel="icon" type="image/x-icon"/>
	<link href="https://fonts.googleapis.com/css?family=Oswald:200,400%7CLato:300,400,300italic,700%7CMontserrat:900" rel="stylesheet" type="text/css"/>
	<link href="css/bootstrap.css" rel="stylesheet"/>
	<link href="css/style.css" rel="stylesheet"/>
	<link href="css/fonts.css" rel="stylesheet"/>
	<style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}
</style>
<style type="text/css">
	@media screen and (max-width: 1200px) {
	  .hid_mobile {
	    visibility: hidden;
	    display: none;
	  }
}
</style>
<style type="text/css">
    	.flip-clock-wrapper 
    		a{
	    		cursor:pointer;
	    		text-decoration:none;
	    		color:#ccc
    		}
    	.flip-clock-wrapper 
    		a:hover{
    			color:#fff
    		}
    	.flip-clock-wrapper 
    		ul{
    			list-style:none
    		}
    	.flip-clock-wrapper.clearfix:after,.flip-clock-wrapper.clearfix:before{content:" ";display:table}.flip-clock-wrapper.clearfix:after{clear:both}.flip-clock-wrapper{font:normal 11px "Helvetica Neue",Helvetica,sans-serif;-webkit-user-select:none}.flip-clock-meridium{background:0 0!important;box-shadow:0 0 0!important}.flip-clock-meridium a{color:#313333}.flip-clock-wrapper{text-align:center;position:relative;width:100%;margin:1em}.flip-clock-wrapper:after,.flip-clock-wrapper:before{content:" ";display:table}.flip-clock-wrapper:after{clear:both}.flip-clock-wrapper ul{position:relative;float:left;margin:10px;width:70px;height:135px;font-weight:700;line-height:87px;border-radius:6px;background:#000}.flip-clock-wrapper ul li{z-index:1;position:absolute;left:0;top:0;width:100%;height:100%;line-height:87px;text-decoration:none!important}.flip-clock-wrapper ul li:first-child{z-index:2}.flip-clock-wrapper ul li a{display:block;height:100%;-webkit-perspective:200px;-moz-perspective:200px;perspective:200px;margin:0!important;overflow:visible!important;cursor:default!important}.flip-clock-wrapper ul li a div{z-index:1;position:absolute;left:0;width:100%;height:50%;font-size:80px;overflow:hidden;outline:1px solid transparent}.flip-clock-wrapper ul li a div .shadow{position:absolute;width:100%;height:100%;z-index:2}.flip-clock-wrapper ul li a div.up{-webkit-transform-origin:50% 100%;-moz-transform-origin:50% 100%;-ms-transform-origin:50% 100%;-o-transform-origin:50% 100%;transform-origin:50% 100%;top:0}.flip-clock-wrapper ul li a div.up:after{content:"";position:absolute;top:65px;left:0;z-index:5;width:100%;height:3px;background-color:#000;background-color:rgba(0,0,0,.4)}.flip-clock-wrapper ul li a div.down{-webkit-transform-origin:50% 0;-moz-transform-origin:50% 0;-ms-transform-origin:50% 0;-o-transform-origin:50% 0;transform-origin:50% 0;bottom:0;border-bottom-left-radius:6px;border-bottom-right-radius:6px}.flip-clock-wrapper ul li a div div.inn{position:absolute;left:0;z-index:1;width:100%;height:200%;color:#ccc;text-shadow:0 1px 2px #000;text-align:center;line-height:130px;background-color:#333;border-radius:6px;font-size:120px}.flip-clock-wrapper ul li a div.up div.inn{top:0}.flip-clock-wrapper ul li a div.down div.inn{bottom:0}.flip-clock-wrapper ul.play li.flip-clock-before{z-index:3}.flip-clock-wrapper .flip{box-shadow:0 2px 5px rgba(0,0,0,.7)}.flip-clock-wrapper ul.play li.flip-clock-active{-webkit-animation:asd .5s .5s linear both;-moz-animation:asd .5s .5s linear both;animation:asd .5s .5s linear both;z-index:5}.flip-clock-divider{float:left;display:inline-block;position:relative;width:20px;height:100px}.flip-clock-divider:first-child{width:0}.flip-clock-dot{display:block;background:#323434;width:10px;height:10px;position:absolute;border-radius:50%;box-shadow:0 0 5px rgba(0,0,0,.5);left:5px}.flip-clock-divider .flip-clock-label{position:absolute;top:-1.5em;right:-86px;color:#000;text-shadow:none}.flip-clock-divider.minutes .flip-clock-label{right:-88px}.flip-clock-divider.seconds .flip-clock-label{right:-91px}.flip-clock-dot.top{top:30px}.flip-clock-dot.bottom{bottom:30px}@-webkit-keyframes asd{0%{z-index:2}20%{z-index:4}100%{z-index:4}}@-moz-keyframes asd{0%{z-index:2}20%{z-index:4}100%{z-index:4}}@-o-keyframes asd{0%{z-index:2}20%{z-index:4}100%{z-index:4}}@keyframes asd{0%{z-index:2}20%{z-index:4}100%{z-index:4}}.flip-clock-wrapper ul.play li.flip-clock-active .down{z-index:2;-webkit-animation:turn .5s .5s linear both;-moz-animation:turn .5s .5s linear both;animation:turn .5s .5s linear both}@-webkit-keyframes turn{0%{-webkit-transform:rotateX(90deg)}100%{-webkit-transform:rotateX(0)}}@-moz-keyframes turn{0%{-moz-transform:rotateX(90deg)}100%{-moz-transform:rotateX(0)}}@-o-keyframes turn{0%{-o-transform:rotateX(90deg)}100%{-o-transform:rotateX(0)}}@keyframes turn{0%{transform:rotateX(90deg)}100%{transform:rotateX(0)}}.flip-clock-wrapper ul.play li.flip-clock-before .up{z-index:2;-webkit-animation:turn2 .5s linear both;-moz-animation:turn2 .5s linear both;animation:turn2 .5s linear both}@-webkit-keyframes turn2{0%{-webkit-transform:rotateX(0)}100%{-webkit-transform:rotateX(-90deg)}}@-moz-keyframes turn2{0%{-moz-transform:rotateX(0)}100%{-moz-transform:rotateX(-90deg)}}@-o-keyframes turn2{0%{-o-transform:rotateX(0)}100%{-o-transform:rotateX(-90deg)}}@keyframes turn2{0%{transform:rotateX(0)}100%{transform:rotateX(-90deg)}}.flip-clock-wrapper ul li.flip-clock-active{z-index:3}.flip-clock-wrapper ul.play li.flip-clock-before .up .shadow{background:-moz-linear-gradient(top,rgba(0,0,0,.1) 0,#000 100%);background:-webkit-gradient(linear,left top,left bottom,color-stop(0,rgba(0,0,0,.1)),color-stop(100%,#000));background:linear,top,rgba(0,0,0,.1) 0,#000 100%;background:-o-linear-gradient(top,rgba(0,0,0,.1) 0,#000 100%);background:-ms-linear-gradient(top,rgba(0,0,0,.1) 0,#000 100%);background:linear,to bottom,rgba(0,0,0,.1) 0,#000 100%;-webkit-animation:show .5s linear both;-moz-animation:show .5s linear both;animation:show .5s linear both}.flip-clock-wrapper ul.play li.flip-clock-active .up .shadow{background:-moz-linear-gradient(top,rgba(0,0,0,.1) 0,#000 100%);background:-webkit-gradient(linear,left top,left bottom,color-stop(0,rgba(0,0,0,.1)),color-stop(100%,#000));background:linear,top,rgba(0,0,0,.1) 0,#000 100%;background:-o-linear-gradient(top,rgba(0,0,0,.1) 0,#000 100%);background:-ms-linear-gradient(top,rgba(0,0,0,.1) 0,#000 100%);background:linear,to bottom,rgba(0,0,0,.1) 0,#000 100%;-webkit-animation:hide .5s .3s linear both;-moz-animation:hide .5s .3s linear both;animation:hide .5s .3s linear both}.flip-clock-wrapper ul.play li.flip-clock-before .down .shadow{background:-moz-linear-gradient(top,#000 0,rgba(0,0,0,.1) 100%);background:-webkit-gradient(linear,left top,left bottom,color-stop(0,#000),color-stop(100%,rgba(0,0,0,.1)));background:linear,top,#000 0,rgba(0,0,0,.1) 100%;background:-o-linear-gradient(top,#000 0,rgba(0,0,0,.1) 100%);background:-ms-linear-gradient(top,#000 0,rgba(0,0,0,.1) 100%);background:linear,to bottom,#000 0,rgba(0,0,0,.1) 100%;-webkit-animation:show .5s linear both;-moz-animation:show .5s linear both;animation:show .5s linear both}.flip-clock-wrapper ul.play li.flip-clock-active .down .shadow{background:-moz-linear-gradient(top,#000 0,rgba(0,0,0,.1) 100%);background:-webkit-gradient(linear,left top,left bottom,color-stop(0,#000),color-stop(100%,rgba(0,0,0,.1)));background:linear,top,#000 0,rgba(0,0,0,.1) 100%;background:-o-linear-gradient(top,#000 0,rgba(0,0,0,.1) 100%);background:-ms-linear-gradient(top,#000 0,rgba(0,0,0,.1) 100%);background:linear,to bottom,#000 0,rgba(0,0,0,.1) 100%;-webkit-animation:hide .5s .3s linear both;-moz-animation:hide .5s .3s linear both;animation:hide .5s .2s linear both}@-webkit-keyframes show{0%{opacity:0}100%{opacity:1}}@-moz-keyframes show{0%{opacity:0}100%{opacity:1}}@-o-keyframes show{0%{opacity:0}100%{opacity:1}}@keyframes show{0%{opacity:0}100%{opacity:1}}@-webkit-keyframes hide{0%{opacity:1}100%{opacity:0}}@-moz-keyframes hide{0%{opacity:1}100%{opacity:0}}@-o-keyframes hide{0%{opacity:1}100%{opacity:0}}@keyframes hide{0%{opacity:1}100%{opacity:0}}
    </style>
<link href="css/dataurl.css" rel="stylesheet"/>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="flip.js"></script>
</head>
<body class="">
	<div class="ie-panel">
		<a href="https://windows.microsoft.com/en-US/internet-explorer/">
			<img alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." height="42" src="assets/warning_bar_0000_us.jpg" width="820"/>
		</a>
	</div>
	<!-- Page preloader-->
	<div class="page-loader">
		<div class="page-loader-logo-name">Create With BUDDY &#128151;
		</div>
		<div class="preloader-wrapper preloader-big active">
			<div class="spinner-layer spinner-blue">
				<div class="circle-clipper left">
					<div class="circle">
					</div>
				</div>
				<div class="gap-patch">
					<div class="circle">
					</div>
				</div>
				<div class="circle-clipper right">
					<div class="circle">
					</div>
				</div>
			</div>
			<div class="spinner-layer spinner-red">
				<div class="circle-clipper left">
					<div class="circle">
					</div>
				</div>
				<div class="gap-patch">
					<div class="circle">
					</div>
				</div>
				<div class="circle-clipper right">
					<div class="circle">
					</div>
				</div>
			</div>
			<div class="spinner-layer spinner-yellow">
				<div class="circle-clipper left">
					<div class="circle">
					</div>
				</div>
				<div class="gap-patch">
					<div class="circle">
					</div>
				</div>
				<div class="circle-clipper right">
					<div class="circle">
					</div>
				</div>
			</div>
			<div class="spinner-layer spinner-green">
				<div class="circle-clipper left">
					<div class="circle">
					</div>
				</div>
				<div class="gap-patch">
					<div class="circle">
					</div>
				</div>
				<div class="circle-clipper right">
					<div class="circle">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Page-->
	<div class="page">
		<!-- Page Header-->
		<header class="section page-header breadcrumbs-custom-wrap bg-gradient bg-secondary-2">
			<!-- RD Navbar-->
			<div class="rd-navbar-wrap rd-navbar-default" style="height: 155.75px;">
				<nav class="rd-navbar rd-navbar--is-touch rd-navbar-original rd-navbar-static" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fullwidth" data-xl-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxxl-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fullwidth" data-xl-device-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-xxxl-device-layout="rd-navbar-static" data-stick-up-offset="1px" data-sm-stick-up-offset="1px" data-md-stick-up-offset="1px" data-lg-stick-up-offset="1px" data-xl-stick-up-offset="1px" data-xxl-stick-up-offset="1px" data-xxx-lstick-up-offset="1px" data-stick-up="true">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle toggle-original" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand">
                  <!--Brand--><a class="brand-name" href=""><img class="logo-default" src="assets/logo.png" alt="" width="150" height="51"><img class="logo-inverse" src="assets/logo.png" alt="" width="150" height="51"></a>
                </div>
              </div>
              <div class="rd-navbar-aside-right">
                <div class="rd-navbar-nav-wrap toggle-original-elements">
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="">Home</a>
                    </li>
                    <li class="rd-nav-item "><a class="rd-nav-link" href="#" data-custom-scroll-to="#main-features">Services</a>
                    </li>
                    <li class="rd-nav-item "><a class="rd-nav-link" href="#" data-custom-scroll-to="#events">Events</a>
                    </li>
                    <li class="rd-nav-item "><a class="rd-nav-link" href="503.php">Our Team</a>
                    </li>
                    <li class="rd-nav-item "><a class="rd-nav-link" href="gallery.php">Gallery</a>
                    </li>
                    <li class="rd-nav-item "><a class="rd-nav-link" href="contact.php">Contact Us</a>
                    </li>
                  </ul>
                </div>
                <div class="rd-navbar-aside-right-inner">
                  <!-- RD Navbar Search-->
                  <div class="rd-navbar-search toggle-original-elements"><a class="rd-navbar-search-toggle toggle-original" data-rd-navbar-toggle=".rd-navbar-search" href="https://livedemo00.template-help.com/wt_62466_v3/landing-default.html#"><span></span></a>
                    <form class="rd-search" action="" data-search-live="rd-search-results-live">
                      <div class="form-wrap">
                        <!-- <label class="form-label form-label" for="rd-navbar-search-form-input">Search...</label> -->
                        <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" placeholder="Search..." type="text" name="s" autocomplete="off">
                        <div class="rd-search-results-live cleared" id="rd-search-results-live"></div>
                      </div>
                      <button class="rd-search-form-submit mdi mdi-magnify"></button>
                    </form>
                  </div>
                  <!-- <div class="rd-navbar-shop"><a class="rd-navbar-shop-icon mdi mdi-cart" href="https://livedemo00.template-help.com/wt_62466_v3/shopping-cart.html"><span>2</span></a></div> -->
                </div>
              </div>
            </div>
          </nav>
			</div>
			<section class="breadcrumbs-custom-svg text-center">
          <!-- Swiper-->
          <div class="swiper-container swiper-slider swiper-slider_height-1 swiper-main" data-loop="false" data-autoplay="5500" data-simulate-touch="false" data-slide-effect="fade">
            <div class="swiper-wrapper">
              <div class="swiper-slide" data-slide-bg="">
                <div class="swiper-slide-caption">
                  <div class="container-wide swiper-main-section">
                    <div class="row justify-content-sm-center">
                      <div class="col-md-10 col-xl-10">
                        <p class="breadcrumbs-custom-subtitle" data-caption-animate="fxRotateInUp" data-caption-delay="550">Come and Create with BUDDY and give your thoughts a home screen.</p>
                        <p class="heading-1 breadcrumbs-custom-title" data-caption-animate="blurIn" data-caption-delay="50">Create with BUDDY</p>
                        <!-- <p class="heading-2" data-caption-animate="fxRotateInDown" data-caption-delay="550">A project under BUDDY Developer</p> -->
                        <div class="group-md button-group"><a class="button button-secondary button-nina button-lg" href="#" data-custom-scroll-to="#start" data-caption-animate="fxRotateInDown" data-caption-delay="550"><span style="transition: opacity 0.22s ease 0s, transform 0.22s ease 0s, color 0.22s ease 0s;"></span><span style="transition: opacity 0.22s ease 0.03s, transform 0.22s ease 0.03s, color 0.22s ease 0s;">s</span><span style="transition: opacity 0.22s ease 0.06s, transform 0.22s ease 0.06s, color 0.22s ease 0s;">t</span><span style="transition: opacity 0.22s ease 0.09s, transform 0.22s ease 0.09s, color 0.22s ease 0s;">a</span><span style="transition: opacity 0.22s ease 0.12s, transform 0.22s ease 0.12s, color 0.22s ease 0s;">r</span><span style="transition: opacity 0.22s ease 0.15s, transform 0.22s ease 0.15s, color 0.22s ease 0s;">t</span><span style="transition: opacity 0.22s ease 0.18s, transform 0.22s ease 0.18s, color 0.22s ease 0s;"></span><span style="transition: opacity 0.22s ease 0.21s, transform 0.22s ease 0.21s, color 0.22s ease 0s;">a</span><span style="transition: opacity 0.22s ease 0.24s, transform 0.22s ease 0.24s, color 0.22s ease 0s;"></span><span style="transition: opacity 0.22s ease 0.27s, transform 0.22s ease 0.27s, color 0.22s ease 0s;">j</span><span style="transition: opacity 0.22s ease 0.3s, transform 0.22s ease 0.3s, color 0.22s ease 0s;">o</span><span style="transition: opacity 0.22s ease 0.33s, transform 0.22s ease 0.33s, color 0.22s ease 0s;">u</span><span style="transition: opacity 0.22s ease 0.36s, transform 0.22s ease 0.36s, color 0.22s ease 0s;">r</span><span style="transition: opacity 0.22s ease 0.39s, transform 0.22s ease 0.39s, color 0.22s ease 0s;">n</span><span style="transition: opacity 0.22s ease 0.42s, transform 0.22s ease 0.42s, color 0.22s ease 0s;">e</span><span style="transition: opacity 0.22s ease 0.45s, transform 0.22s ease 0.45s, color 0.22s ease 0s;">y</span><span class="button-original-content" style="transition: background 0.22s ease 0s, color 0.22s ease 0s, transform 0.22s ease 0.48s;">start a journey</span></a><a class="button button-default-outline button-nina button-lg" href="#" data-custom-scroll-to="#main-features" data-caption-animate="fxRotateInDown" data-caption-delay="550"><span style="transition: opacity 0.22s ease 0s, transform 0.22s ease 0s, color 0.22s ease 0s;"></span><span style="transition: opacity 0.22s ease 0.03s, transform 0.22s ease 0.03s, color 0.22s ease 0s;">w</span><span style="transition: opacity 0.22s ease 0.06s, transform 0.22s ease 0.06s, color 0.22s ease 0s;">h</span><span style="transition: opacity 0.22s ease 0.09s, transform 0.22s ease 0.09s, color 0.22s ease 0s;">a</span><span style="transition: opacity 0.22s ease 0.12s, transform 0.22s ease 0.12s, color 0.22s ease 0s;">t</span><span style="transition: opacity 0.22s ease 0.15s, transform 0.22s ease 0.15s, color 0.22s ease 0s;"></span><span style="transition: opacity 0.22s ease 0.18s, transform 0.22s ease 0.18s, color 0.22s ease 0s;">w</span><span style="transition: opacity 0.22s ease 0.18s, transform 0.22s ease 0.18s, color 0.22s ease 0s;">e</span><span style="transition: opacity 0.22s ease 0.21s, transform 0.22s ease 0.21s, color 0.22s ease 0s;"></span><span style="transition: opacity 0.22s ease 0.24s, transform 0.22s ease 0.24s, color 0.22s ease 0s;">d</span><span style="transition: opacity 0.22s ease 0.27s, transform 0.22s ease 0.27s, color 0.22s ease 0s;">o</span><!-- <span style="transition: opacity 0.22s ease 0.3s, transform 0.22s ease 0.3s, color 0.22s ease 0s;">?</span><span style="transition: opacity 0.22s ease 0.33s, transform 0.22s ease 0.33s, color 0.22s ease 0s;">i</span><span style="transition: opacity 0.22s ease 0.36s, transform 0.22s ease 0.36s, color 0.22s ease 0s;">c</span><span style="transition: opacity 0.22s ease 0.39s, transform 0.22s ease 0.39s, color 0.22s ease 0s;">e</span> --><!-- <span style="transition: opacity 0.22s ease 0.42s, transform 0.22s ease 0.42s, color 0.22s ease 0s;">e</span><span style="transition: opacity 0.22s ease 0.45s, transform 0.22s ease 0.45s, color 0.22s ease 0s;">s</span> --><span class="button-original-content" style="transition: background 0.22s ease 0s, color 0.22s ease 0s, transform 0.22s ease 0.48s;">What we do</span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="parallax-scene-js parallax-scene" data-scalar-x="5" data-scalar-y="10" style="transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden;"><div class="layer-01"><div class="layer" data-depth="0.25" style="transform: translate3d(6.09696px, -11.6262px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"><img src="assets/parallax-scene-01-132x133.png" alt="" width="132" height="133"></div></div><div class="layer-02"><div class="layer" data-depth=".55" style="transform: translate3d(13.4133px, -25.5777px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><img src="assets/parallax-scene-02-186x208.png" alt="" width="186" height="208"></div></div><div class="layer-03"><div class="layer" data-depth="0.1" style="transform: translate3d(2.43878px, -4.65049px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><img src="assets/parallax-scene-03-108x120.png" alt="" width="108" height="120"></div></div><div class="layer-04"><div class="layer" data-depth="0.25" style="transform: translate3d(6.09696px, -11.6262px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><img src="assets/parallax-scene-04-124x145.png" alt="" width="124" height="145"></div></div><div class="layer-05"><div class="layer" data-depth="0.15" style="transform: translate3d(3.65818px, -6.97573px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><img src="assets/parallax-scene-05-100x101.png" alt="" width="100" height="101"></div></div><div class="layer-06"><div class="layer" data-depth="0.65" style="transform: translate3d(15.8521px, -30.2282px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><img src="assets/parallax-scene-06-240x243.png" alt="" width="240" height="243"></div></div></div>
        </section>
		</header>
		<!-- OUR STORY-->
		<section class="section section-variant-1 bg-default text-left" id="start">
			<!-- section wave-->
			<div class="section-wave">
				<svg height="46px" preserveaspectratio="none" viewbox="0 0 1920 46" width="1920px" x="0px" y="0px">
					<path d="M1920,0.5c-82.8,0-109.1,44-192.3,44c-78.8,0-116.2-44-191.7-44c-77.1,0-115.9,44-192,44c-78.2,0-114.6-44-192-44c-78.4,0-115.3,44-192,44c-76.9-0.1-119-44-192-44c-77,0-115.2,44-192,44c-73.6,0-114-44-190.9-44c-78.5,0-117.2,44-194.1,44c-75.9,0-113-44-191-44V46h1920V0.5z">
					</path>
				</svg>
			</div>
			<div class="container-wide">
				<div class="row justify-content-xl-end row-50">
					<div class="col-xl-6">
						<div class="parallax-text-wrap">
							<h3>our story
							</h3>
							<span class="parallax-text" style="transform: translate3d(0px, -59.9343%, 0px); top:-100px;">about us
							</span>
						</div>
						<hr class="divider divider-left divider-default"/>
						<div class="row">
							<div class="col-xl-11">
								<div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
									<!-- Nav tabs-->
									<ul class="list-fix nav nav-tabs">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#tabs-1-1">Overview
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#tabs-1-2">BUDDY AI
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#tabs-1-3">Mission
											</a>
										</li>
									</ul>
									<!-- Tab panes-->
									<div class="tab-content">
										<div class="tab-pane fade show active" id="tabs-1-1">
											<h5 class = "hid_mobile" style="text-transform: uppercase;">It is Important to Follow your Dreams and Heart. Do something that Excites you !!
											</h5>
											<h5 class = "hid_mobile" style="margin-left: 350px;">- Sundar Pichai</h5>
											<p>Problems are undoubtedly the definite part of our life and solutions are what we need to seek & merge with it .To simplify your search we welcome you to BUDDY where we bring to you hammers to break all the technical trouble heads that pops up while you work, learn or enjoy.
											</p><a class="button button-default-outline button-nina" href="#"><span style="transition: opacity 0.22s ease 0s, transform 0.22s ease 0s, color 0.22s ease 0s;">l</span><span style="transition: opacity 0.22s ease 0.03s, transform 0.22s ease 0.03s, color 0.22s ease 0s;">e</span><span style="transition: opacity 0.22s ease 0.06s, transform 0.22s ease 0.06s, color 0.22s ease 0s;">a</span><span style="transition: opacity 0.22s ease 0.09s, transform 0.22s ease 0.09s, color 0.22s ease 0s;">r</span><span style="transition: opacity 0.22s ease 0.12s, transform 0.22s ease 0.12s, color 0.22s ease 0s;">n</span><span style="transition: opacity 0.22s ease 0.15s, transform 0.22s ease 0.15s, color 0.22s ease 0s;"></span><span style="transition: opacity 0.22s ease 0.18s, transform 0.22s ease 0.18s, color 0.22s ease 0s;">m</span><span style="transition: opacity 0.22s ease 0.21s, transform 0.22s ease 0.21s, color 0.22s ease 0s;">o</span><span style="transition: opacity 0.22s ease 0.24s, transform 0.22s ease 0.24s, color 0.22s ease 0s;">r</span><span style="transition: opacity 0.22s ease 0.27s, transform 0.22s ease 0.27s, color 0.22s ease 0s;">e</span><span class="button-original-content" style="transition: background 0.22s ease 0s, color 0.22s ease 0s, transform 0.22s ease 0.3s;">learn more</span></a>
										</div>
										<div class="tab-pane fade" id="tabs-1-2">
											<!-- Card info-->
											<article class="card-info">
												<div class="card-info-aside">
													<img alt="" class="card-info-image" height="150" src="assets/buddy.png" width="150"/>
												</div>
												<div class="card-info-main">
													<h5 class="card-info-title">BUDDY AI
													</h5>
													<p class="card-info-subtitle">Personal Assistant
													</p>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
													</p><a class="button button-default-outline button-nina" href="#"><span style="transition: opacity 0.22s ease 0s, transform 0.22s ease 0s, color 0.22s ease 0s;">l</span><span style="transition: opacity 0.22s ease 0.03s, transform 0.22s ease 0.03s, color 0.22s ease 0s;">e</span><span style="transition: opacity 0.22s ease 0.06s, transform 0.22s ease 0.06s, color 0.22s ease 0s;">a</span><span style="transition: opacity 0.22s ease 0.09s, transform 0.22s ease 0.09s, color 0.22s ease 0s;">r</span><span style="transition: opacity 0.22s ease 0.12s, transform 0.22s ease 0.12s, color 0.22s ease 0s;">n</span><span style="transition: opacity 0.22s ease 0.15s, transform 0.22s ease 0.15s, color 0.22s ease 0s;"></span><span style="transition: opacity 0.22s ease 0.18s, transform 0.22s ease 0.18s, color 0.22s ease 0s;">m</span><span style="transition: opacity 0.22s ease 0.21s, transform 0.22s ease 0.21s, color 0.22s ease 0s;">o</span><span style="transition: opacity 0.22s ease 0.24s, transform 0.22s ease 0.24s, color 0.22s ease 0s;">r</span><span style="transition: opacity 0.22s ease 0.27s, transform 0.22s ease 0.27s, color 0.22s ease 0s;">e</span><span class="button-original-content" style="transition: background 0.22s ease 0s, color 0.22s ease 0s, transform 0.22s ease 0.3s;">learn more</span></a>
												</div>
											</article>
										</div>
										<div class="tab-pane fade" id="tabs-1-3">
											<div class="box-width-2">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.
												</p>
												<!-- Quote minimal-->
												<article class="quote-minimal">
													<p class="quote-minimal-text">Our Aim is your big smile when your imagination comes to the screen while assuring you the best quality service at the minimum cost.
													</p>
												</article>
												<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
												</p> --><a class="button button-default-outline button-nina" href="#"><span style="transition: opacity 0.22s ease 0s, transform 0.22s ease 0s, color 0.22s ease 0s;">l</span><span style="transition: opacity 0.22s ease 0.03s, transform 0.22s ease 0.03s, color 0.22s ease 0s;">e</span><span style="transition: opacity 0.22s ease 0.06s, transform 0.22s ease 0.06s, color 0.22s ease 0s;">a</span><span style="transition: opacity 0.22s ease 0.09s, transform 0.22s ease 0.09s, color 0.22s ease 0s;">r</span><span style="transition: opacity 0.22s ease 0.12s, transform 0.22s ease 0.12s, color 0.22s ease 0s;">n</span><span style="transition: opacity 0.22s ease 0.15s, transform 0.22s ease 0.15s, color 0.22s ease 0s;"></span><span style="transition: opacity 0.22s ease 0.18s, transform 0.22s ease 0.18s, color 0.22s ease 0s;">m</span><span style="transition: opacity 0.22s ease 0.21s, transform 0.22s ease 0.21s, color 0.22s ease 0s;">o</span><span style="transition: opacity 0.22s ease 0.24s, transform 0.22s ease 0.24s, color 0.22s ease 0s;">r</span><span style="transition: opacity 0.22s ease 0.27s, transform 0.22s ease 0.27s, color 0.22s ease 0s;">e</span><span class="button-original-content" style="transition: background 0.22s ease 0s, color 0.22s ease 0s, transform 0.22s ease 0.3s;">learn more</span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-5 text-center">
						<div class="image-position-01">
							<div class="blick-wrap">
								<img alt="" class="image-wrap" height="852" src="assets/ipad-01-940x852.png" width="940"/>
								<div class="blick-overlay" data-blick-overlay="ipad">
								</div>
								<div class="blick-content">
									<img alt="" src="assets/blick-content-01.png"/>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Main features-->
		<section class="section section-variant-2 bg-secondary-2 section-way-point" id="main-features">
			<div class="way-point" data-custom-scroll-to="#main-features">
				<svg enable-background="new 0 0 253 38" height="38px" version="1.1" width="253px" x="0px" xml:space="preserve" y="0px">
					<path clip-rule="evenodd" d="M252,36.001C199.397,36.001,176,0,125.815,0C76,0,52.988,36.001,0,36.001C4.336,40.465,273.563,36.001,252,36.001z" fill-rule="evenodd" style="clip-path: url(#gel)">
					</path>
				</svg>
				<span class="icon mdi mdi-chevron-down">
				</span>
			</div>
			<div class="container-wide">
				<div class="row text-center">
					<div class="col-sm-12">
						<h3>what we do
						</h3>
						<div class="divider divider-default">
						</div>
					</div>
				</div>
				<div class="row row-50 row-xxl-90 offset-custom-2">
					<div class="col-sm-10 col-md-6 col-xl-3">
						<article class="box-minimal">
							<div class="box-minimal-header">
								<div class="box-minimal-icon box-minimal-icon-md fl-bigmug-line-monitor74">
								</div>
								<h6 class="box-minimal-title">websites
								</h6>
							</div>
							<div class="box-minimal-text">Our expert team can design a website of any complexity, from a landing page to a corporate multipage website. Everything depends on what you are looking for.
							</div>
						</article>
					</div>
					<div class="col-sm-10 col-md-6 col-xl-3">
						<article class="box-minimal">
							<div class="box-minimal-header">
								<div class="box-minimal-icon box-minimal-icon-md fl-bigmug-line-cellphone55">
								</div>
								<h6 class="box-minimal-title">apps
								</h6>
							</div>
							<div class="box-minimal-text">At BUDDY, we work for our customers every day to deliver the best mobile applications for any purposes. We work both with individual and corporate customers.
							</div>
						</article>
					</div>
					<div class="col-sm-10 col-md-6 col-xl-3">
						<article class="box-minimal">
							<div class="box-minimal-header">
								<div class="box-minimal-icon box-minimal-icon-md fl-bigmug-line-gear30">
								</div>
								<h6 class="box-minimal-title">softwares
								</h6>
							</div>
							<div class="box-minimal-text">We are passionate about creating outstanding software solutions that create value for your business and lead to SUCCESS.
							</div>
						</article>
					</div>
					<div class="col-sm-10 col-md-6 col-xl-3">
						<article class="box-minimal">
							<div class="box-minimal-header">
								<div class="box-minimal-icon box-minimal-icon-md fl-bigmug-line-code30">
								</div>
								<h6 class="box-minimal-title">Automation
								</h6>
							</div>
							<div class="box-minimal-text">The developers at BUDDY make every effort to enable our templates with unparalleled functionality based on Bootstrap Framework and Advanced UI Kit.
							</div>
						</article>
					</div>
					<div class="col-sm-10 col-md-6 col-xl-3">
						<article class="box-minimal">
							<div class="box-minimal-header">
								<div class="box-minimal-icon box-minimal-icon-md fl-bigmug-line-square160">
								</div>
								<h6 class="box-minimal-title">Designing
								</h6>
							</div>
							<div class="box-minimal-text">Brave uses brilliantly looking images to reflect how a customer can use the potential of the template to reach their clients attention. All premium images are included with the template.
							</div>
						</article>
					</div>
					<div class="col-sm-10 col-md-6 col-xl-3">
						<article class="box-minimal">
							<div class="box-minimal-header">
								<div class="box-minimal-icon box-minimal-icon-md fl-bigmug-line-graphical8">
								</div>
								<h6 class="box-minimal-title">project support
								</h6>
							</div>
							<div class="box-minimal-text">Brave is the leader in the way of easy delivery and installation. All you have to do is unpack your purchase, and the template youve just bought is ready to be used!
							</div>
						</article>
					</div>
					<div class="col-sm-10 col-md-6 col-xl-3">
						<article class="box-minimal">
							<div class="box-minimal-header">
								<div class="box-minimal-icon box-minimal-icon-md fl-bigmug-line-chat55">
								</div>
								<h6 class="box-minimal-title">workshops-webinars
								</h6>
							</div>
							<div class="box-minimal-text">Our support service is known for its 24/7 availability and customer-friendly mood. We  are always ready to answer your questions and provide a quick fix for any issue.
							</div>
						</article>
					</div>
					<div class="col-sm-10 col-md-6 col-xl-3">
						<article class="box-minimal">
							<div class="box-minimal-header">
								<div class="box-minimal-icon box-minimal-icon-md fl-bigmug-line-checkmark16">
								</div>
								<h6 class="box-minimal-title">much more !!
								</h6>
							</div>
							<div class="box-minimal-text">Our templates differ from those of our competitors not only in exceptional design and features but also in the sound design reflected in every video/audio presentation we make.
							</div>
						</article>
					</div>
					<div class="container-wide">
					<a class="button button-xs button-secondary button-nina" href="services.php"><span style="transition: opacity 0.22s ease 0s, transform 0.22s ease 0s, color 0.22s ease 0s;">B</span><span style="transition: opacity 0.22s ease 0.03s, transform 0.22s ease 0.03s, color 0.22s ease 0s;">o</span><span style="transition: opacity 0.22s ease 0.06s, transform 0.22s ease 0.06s, color 0.22s ease 0s;">o</span><span style="transition: opacity 0.22s ease 0.09s, transform 0.22s ease 0.09s, color 0.22s ease 0s;">k</span><span style="transition: opacity 0.22s ease 0.12s, transform 0.22s ease 0.12s, color 0.22s ease 0s;"> </span><span style="transition: opacity 0.22s ease 0.15s, transform 0.22s ease 0.15s, color 0.22s ease 0s;">a</span><span style="transition: opacity 0.22s ease 0.18s, transform 0.22s ease 0.18s, color 0.22s ease 0s;"></span><span style="transition: opacity 0.22s ease 0.21s, transform 0.22s ease 0.21s, color 0.22s ease 0s;">s</span><span style="transition: opacity 0.22s ease 0.24s, transform 0.22s ease 0.24s, color 0.22s ease 0s;">e</span><span style="transition: opacity 0.22s ease 0.27s, transform 0.22s ease 0.27s, color 0.22s ease 0s;">r</span><span style="transition: opacity 0.22s ease 0.3s, transform 0.22s ease 0.3s, color 0.22s ease 0s;">v</span><span style="transition: opacity 0.22s ease 0.33s, transform 0.22s ease 0.33s, color 0.22s ease 0s;">i</span><span style="transition: opacity 0.22s ease 0.39s, transform 0.22s ease 0.39s, color 0.22s ease 0s;">c</span><span style="transition: opacity 0.22s ease 0.42s, transform 0.22s ease 0.42s, color 0.22s ease 0s;">e</span><span class="button-original-content" style="transition: background 0.22s ease 0s, color 0.22s ease 0s, transform 0.22s ease 0.48s;">Book a Service</span></a>
				</div>
				</div>
			</div>
		</section>
		<!-- Statistics & Frequently asked questions-->
		<section class="section section-variant-2 bg-gray-lighter" id="faq">
			<div class="container container-bigger">
				<div class="row row-ten row-50 justify-content-md-center justify-content-xl-between flex-lg-row-reverse">
					<div class="col-md-9 col-lg-5 col-xxl-4 hid_mobile">
						<h3>Statistics
						</h3>
						<div class="divider divider-default">
						</div>
						<input type="hidden" id="curr_stats" name="curr_stats" value="<?php echo ($visitorsc - 5); ?>">
<!-- 						<div class="d3-chart-wrap">
							<div class="d3-chart c3" id="line-chart" style="width:100%; height: 420px;"> -->
								<div class="clock" style="margin-left: 200px; margin-top: 150px;"></div>
								<span style="margin-left: 300px; margin-top: 150px;">Update on Website Visitors</span>
							<!-- </div>
						</div> -->
					</div>
					<div class="col-md-9 col-lg-5">
						<h3>Frequently asked questions
						</h3>
						<div class="divider divider-default">
						</div>
						<!-- Bootstrap collapse-->
						<div aria-multiselectable="false" class="card-group card-group-custom card-group-corporate" id="accordion1" role="tablist">
							<!--Bootstrap card-->
							<article class="card card-custom card-corporate">
								<div class="card-heading" role="tab">
									<div class="card-title">
										<a aria-controls="accordion1-card-body-eatrmlug" aria-expanded="false" class="collapsed" data-parent="#accordion1" data-toggle="collapse" href="#accordion1-card-body-eatrmlug" id="accordion1-card-head-igdviifi" role="button">What do I do after booking a Service?                        
											<div class="card-arrow">
											</div>
										</a>
									</div>
								</div>
								<div aria-labelledby="accordion1-card-head-igdviifi" class="card-collapse collapse" data-parent="#accordion1" id="accordion1-card-body-eatrmlug" role="tabpanel">
									<div class="card-body">
										<p>After you complete the <span style="color: red; cursor: pointer;" onclick="location.href = 'services.php';">Book a Service</span> form, you will receive a mail within 1 or 2 hours regarding the project details. In case the description is not clear, we will request for further clarification. 
										</p>
									</div>
								</div>
							</article>
							<!--Bootstrap card-->
							<article class="card card-custom card-corporate">
								<div class="card-heading" role="tab">
									<div class="card-title">
										<a aria-controls="accordion1-card-body-fdpphtim" ria-expanded="false" class="collapsed"" data-parent="#accordion1" data-toggle="collapse" href="#accordion1-card-body-fdpphtim" id="accordion1-card-head-qmprwsyl" role="button">What are the advantages of our Services?                        
											<div class="card-arrow">
											</div>
										</a>
									</div>
								</div>
								<div aria-labelledby="accordion1-card-head-qmprwsyl" class="card-collapse collapse" data-parent="#accordion1" id="accordion1-card-body-fdpphtim" role="tabpanel">
									<div class="card-body">
										<p>The major advantage is quality and price: You get a high quality work for just as half of the price. You dont have to worry about the SEO, since we complete each project with 100% SEO.<br> Second advantage is time frame: Total time for a project can vary depending upon 2 factors. Project Type and Project Content. But when a time is finalised, we will be delivering the best work before the estimated time period. 
										</p>
									</div>
								</div>
							</article>
							<!--Bootstrap card-->
							<!-- <article class="card card-custom card-corporate">
								<div class="card-heading" role="tab">
									<div class="card-title">
										<a aria-controls="accordion1-card-body-cuvsurpy" aria-expanded="false" class="collapsed" data-parent="#accordion1" data-toggle="collapse" href="#accordion1-card-body-cuvsurpy" id="accordion1-card-head-txpphqxv" role="button">What about SEO's and performance issues in websites?                        
											<div class="card-arrow">
											</div>
										</a>
									</div>
								</div>
								<div aria-labelledby="accordion1-card-head-txpphqxv" class="card-collapse collapse" data-parent="#accordion1" id="accordion1-card-body-cuvsurpy" role="tabpanel">
									<div class="card-body">
										<p>We deliver each product after finishing Google's Lightroom Tests. Each websites are created in a way that it is shown among the first results in all search engines.
										</p>
									</div>
								</div>
							</article> -->
							<!--Bootstrap card-->
							<!-- <article class="card card-custom card-corporate">
								<div class="card-heading" role="tab">
									<div class="card-title">
										<a aria-controls="accordion1-card-body-uxykagee" aria-expanded="false" class="collapsed" data-parent="#accordion1" data-toggle="collapse" href="#accordion1-card-body-uxykagee" id="accordion1-card-head-ttpwoofw" role="button">Will there be any maintenance work after a work is done ?                        
											<div class="card-arrow">
											</div>
										</a>
									</div>
								</div>
								<div aria-labelledby="accordion1-card-head-ttpwoofw" class="card-collapse collapse" data-parent="#accordion1" id="accordion1-card-body-uxykagee" role="tabpanel">
									<div class="card-body">
										<p>Sadly, Our work do not include future maintenance. A work will be completed based on the latest technologies present at that time. As time moves by, newer versions will be released, which makes the work never finishing.
										</p>
									</div>
								</div>
							</article> -->
						</div>
					</div>
					
				</div>
			</div>
		</section>
		<!-- Upcoming Events-->
		<section class="section section-variant-1 bg-default" id="events">
			<div class="container-wide">
				<div class="row justify-content-xl-end row-30">
					<div class="col-xl-8">
						<div class="parallax-text-wrap">
							<h3>Upcoming Events
							</h3>
							<span class="parallax-text" style="transform: translate3d(0px, -312.266%, 0px); top:-100px;">events
							</span>
						</div>
						<hr class="divider divider-default"/>
					</div>
					<div class="col-xl-3 text-xl-right"><a class="button button-secondary button-nina" href="events.php"><span style="transition: opacity 0.22s ease 0s, transform 0.22s ease 0s, color 0.22s ease 0s;">v</span><span style="transition: opacity 0.22s ease 0.03s, transform 0.22s ease 0.03s, color 0.22s ease 0s;">i</span><span style="transition: opacity 0.22s ease 0.06s, transform 0.22s ease 0.06s, color 0.22s ease 0s;">e</span><span style="transition: opacity 0.22s ease 0.09s, transform 0.22s ease 0.09s, color 0.22s ease 0s;">w</span><span style="transition: opacity 0.22s ease 0.12s, transform 0.22s ease 0.12s, color 0.22s ease 0s;"></span><span style="transition: opacity 0.22s ease 0.15s, transform 0.22s ease 0.15s, color 0.22s ease 0s;">a</span><span style="transition: opacity 0.22s ease 0.18s, transform 0.22s ease 0.18s, color 0.22s ease 0s;">l</span><span style="transition: opacity 0.22s ease 0.21s, transform 0.22s ease 0.21s, color 0.22s ease 0s;">l</span><span style="transition: opacity 0.22s ease 0.24s, transform 0.22s ease 0.24s, color 0.22s ease 0s;"></span><span style="transition: opacity 0.22s ease 0.27s, transform 0.22s ease 0.27s, color 0.22s ease 0s;">e</span><span style="transition: opacity 0.22s ease 0.3s, transform 0.22s ease 0.3s, color 0.22s ease 0s;">v</span><span style="transition: opacity 0.22s ease 0.33s, transform 0.22s ease 0.33s, color 0.22s ease 0s;">e</span><span style="transition: opacity 0.22s ease 0.36s, transform 0.22s ease 0.36s, color 0.22s ease 0s;">n</span><span style="transition: opacity 0.22s ease 0.39s, transform 0.22s ease 0.39s, color 0.22s ease 0s;">t</span><span style="transition: opacity 0.22s ease 0.42s, transform 0.22s ease 0.42s, color 0.22s ease 0s;">s</span><span class="button-original-content" style="transition: background 0.22s ease 0s, color 0.22s ease 0s, transform 0.22s ease 0.45s;">view all events</span></a>
					</div>
				</div>
				<div class="row row-50">
            <div class="col-md-6 col-xl-4">
              <article class="event-default-wrap">
                <div class="event-default">
                  <figure class="event-default-image"><img src="assets/Ethical_Hacking.png" alt="" width="570" height="370">
                  </figure>
                  <!-- <div class="event-default-date-wrap">
                    <time datetime="2019"><span class="event-default-date">31</span><span class="event-default-month">Mar</span><span class="event-default-time">10:00 am</span></time>
                  </div> -->
                  <div class="event-default-caption"><a class="button button-xs button-secondary button-nina" href="assets/Ethical_Hacking.png"><span style="transition: opacity 0.22s ease 0s, transform 0.22s ease 0s, color 0.22s ease 0s;">v</span><span style="transition: opacity 0.22s ease 0.03s, transform 0.22s ease 0.03s, color 0.22s ease 0s;">i</span><span style="transition: opacity 0.22s ease 0.06s, transform 0.22s ease 0.06s, color 0.22s ease 0s;">e</span><span style="transition: opacity 0.22s ease 0.09s, transform 0.22s ease 0.09s, color 0.22s ease 0s;">w</span><span style="transition: opacity 0.22s ease 0.12s, transform 0.22s ease 0.12s, color 0.22s ease 0s;"></span><span style="transition: opacity 0.22s ease 0.15s, transform 0.22s ease 0.15s, color 0.22s ease 0s;">e</span><span style="transition: opacity 0.22s ease 0.18s, transform 0.22s ease 0.18s, color 0.22s ease 0s;">v</span><span style="transition: opacity 0.22s ease 0.21s, transform 0.22s ease 0.21s, color 0.22s ease 0s;">e</span><span style="transition: opacity 0.22s ease 0.18s, transform 0.22s ease 0.18s, color 0.22s ease 0s;">n</span><span style="transition: opacity 0.22s ease 0.21s, transform 0.22s ease 0.21s, color 0.22s ease 0s;">t</span><span class="button-original-content" style="transition: background 0.22s ease 0s, color 0.22s ease 0s, transform 0.22s ease 0.24s;">view event</span></a></div>
                </div>
                <div class="event-default-inner">
                  <div class="box-inline"><span class="icon novi-icon icon-md-middle icon-secondary mdi mdi-map-marker"></span><a class="event-default-link" href="#">Google Meet</a></div>
                  <h5><a class="event-default-title" href="#">A Course on Ethical Hacking - Buddy Team</a></h5>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-xl-4">
              <article class="event-default-wrap">
                <div class="event-default">
                  <figure class="event-default-image"><img src="assets/event-03-570x370.jpg" alt="" width="570" height="370">
                  </figure>
                  <div class="event-default-date-wrap">
                    <time datetime="2019"><span class="event-default-date">2</span><span class="event-default-month">Apr</span><span class="event-default-time">10:00 am</span></time>
                  </div>
                  <div class="event-default-caption"><a class="button button-xs button-secondary button-nina" href="#"><span style="transition: opacity 0.22s ease 0s, transform 0.22s ease 0s, color 0.22s ease 0s;">v</span><span style="transition: opacity 0.22s ease 0.03s, transform 0.22s ease 0.03s, color 0.22s ease 0s;">i</span><span style="transition: opacity 0.22s ease 0.06s, transform 0.22s ease 0.06s, color 0.22s ease 0s;">e</span><span style="transition: opacity 0.22s ease 0.09s, transform 0.22s ease 0.09s, color 0.22s ease 0s;">w</span><span style="transition: opacity 0.22s ease 0.12s, transform 0.22s ease 0.12s, color 0.22s ease 0s;"></span><span style="transition: opacity 0.22s ease 0.15s, transform 0.22s ease 0.15s, color 0.22s ease 0s;">e</span><span style="transition: opacity 0.22s ease 0.18s, transform 0.22s ease 0.18s, color 0.22s ease 0s;">v</span><span style="transition: opacity 0.22s ease 0.21s, transform 0.22s ease 0.21s, color 0.22s ease 0s;">e</span><span style="transition: opacity 0.22s ease 0.18s, transform 0.22s ease 0.18s, color 0.22s ease 0s;">n</span><span style="transition: opacity 0.22s ease 0.21s, transform 0.22s ease 0.21s, color 0.22s ease 0s;">t</span><span class="button-original-content" style="transition: background 0.22s ease 0s, color 0.22s ease 0s, transform 0.22s ease 0.24s;">view event</span></a></div>
                </div>
                <div class="event-default-inner">
                  <div class="box-inline"><span class="icon novi-icon icon-md-middle icon-secondary mdi mdi-map-marker"></span><a class="event-default-link" href="#">Google Meet</a></div>
                  <h5><a class="event-default-title" href="#">Chief Learning Officer Forum USA 2019</a></h5>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-xl-4">
              <article class="event-default-wrap">
                <div class="event-default">
                  <figure class="event-default-image"><img src="assets/ShowinstaAwareness.png" alt="" width="570" height="370">
                  </figure>
                  <div class="event-default-date-wrap">
                    <time datetime="2019"><span class="event-default-date">08</span><span class="event-default-month">Dec</span><span class="event-default-time">11:00 am</span></time>
                  </div>
                  <div class="event-default-caption"><a class="button button-xs button-secondary button-nina" href="assets/instaAwareness.png"><span style="transition: opacity 0.22s ease 0s, transform 0.22s ease 0s, color 0.22s ease 0s;">v</span><span style="transition: opacity 0.22s ease 0.03s, transform 0.22s ease 0.03s, color 0.22s ease 0s;">i</span><span style="transition: opacity 0.22s ease 0.06s, transform 0.22s ease 0.06s, color 0.22s ease 0s;">e</span><span style="transition: opacity 0.22s ease 0.09s, transform 0.22s ease 0.09s, color 0.22s ease 0s;">w</span><span style="transition: opacity 0.22s ease 0.12s, transform 0.22s ease 0.12s, color 0.22s ease 0s;"></span><span style="transition: opacity 0.22s ease 0.15s, transform 0.22s ease 0.15s, color 0.22s ease 0s;">e</span><span style="transition: opacity 0.22s ease 0.18s, transform 0.22s ease 0.18s, color 0.22s ease 0s;">v</span><span style="transition: opacity 0.22s ease 0.21s, transform 0.22s ease 0.21s, color 0.22s ease 0s;">e</span><span style="transition: opacity 0.22s ease 0.18s, transform 0.22s ease 0.18s, color 0.22s ease 0s;">n</span><span style="transition: opacity 0.22s ease 0.21s, transform 0.22s ease 0.21s, color 0.22s ease 0s;">t</span><span class="button-original-content" style="transition: background 0.22s ease 0s, color 0.22s ease 0s, transform 0.22s ease 0.24s;">view event</span></a></div>
                </div>
                <div class="event-default-inner">
                  <div class="box-inline"><span class="icon novi-icon icon-md-middle icon-secondary mdi mdi-map-marker"></span><a class="event-default-link" href="assets/instaAwareness.png">Google Meet</a></div>
                  <h5><a class="event-default-title" href="assets/instaAwareness.png">Instagram Algorithm & Dangers - ash_scrbbles | Buddy</a></h5>
                </div>
              </article>
            </div>
          </div>
        </div>
		</section>
		<!-- lets start cooperating-->
		<section class="section section-md bg-secondary-2 text-center text-md-left section-way-point" id="people">
			<div class="way-point" data-custom-scroll-to="#people">
				<svg enable-background="new 0 0 253 38" height="38px" version="1.1" width="253px" x="0px" xml:space="preserve" y="0px">
					<path clip-rule="evenodd" d="M252,36.001C199.397,36.001,176,0,125.815,0C76,0,52.988,36.001,0,36.001C4.336,40.465,273.563,36.001,252,36.001z" fill-rule="evenodd" style="clip-path: url(#gel)">
					</path>
				</svg>
				<span class="icon mdi mdi-chevron-down">
				</span>
			</div>
			<div class="container container-bigger">
				<div class="box-cta box-cta-inline">
					<div class="box-cta-inner">
						<h3 class="box-cta-title">lets start cooperating
						</h3>
						<p>Buddy has lots of advantages, from which you will surely benefit.
						</p>
					</div>
					<div class="box-cta-inner"><a class="button button-default-outline button-nina" href="" data-custom-scroll-to="#advantages"><span style="transition: opacity 0.22s ease 0s, transform 0.22s ease 0s, color 0.22s ease 0s;">V</span><span style="transition: opacity 0.22s ease 0.03s, transform 0.22s ease 0.03s, color 0.22s ease 0s;">i</span><span style="transition: opacity 0.22s ease 0.06s, transform 0.22s ease 0.06s, color 0.22s ease 0s;">e</span><span style="transition: opacity 0.22s ease 0.09s, transform 0.22s ease 0.09s, color 0.22s ease 0s;">w</span><span style="transition: opacity 0.22s ease 0.12s, transform 0.22s ease 0.12s, color 0.22s ease 0s;"></span><span style="transition: opacity 0.22s ease 0.15s, transform 0.22s ease 0.15s, color 0.22s ease 0s;">a</span><span style="transition: opacity 0.22s ease 0.18s, transform 0.22s ease 0.18s, color 0.22s ease 0s;">d</span><span style="transition: opacity 0.22s ease 0.21s, transform 0.22s ease 0.21s, color 0.22s ease 0s;">v</span><span style="transition: opacity 0.22s ease 0.24s, transform 0.22s ease 0.24s, color 0.22s ease 0s;">a</span><span style="transition: opacity 0.22s ease 0.27s, transform 0.22s ease 0.27s, color 0.22s ease 0s;">n</span><span style="transition: opacity 0.22s ease 0.3s, transform 0.22s ease 0.3s, color 0.22s ease 0s;">t</span><span style="transition: opacity 0.22s ease 0.33s, transform 0.22s ease 0.33s, color 0.22s ease 0s;">a</span><span style="transition: opacity 0.22s ease 0.36s, transform 0.22s ease 0.36s, color 0.22s ease 0s;">g</span><span style="transition: opacity 0.22s ease 0.39s, transform 0.22s ease 0.39s, color 0.22s ease 0s;">e</span><span style="transition: opacity 0.22s ease 0.42s, transform 0.22s ease 0.42s, color 0.22s ease 0s;">s</span><span class="button-original-content" style="transition: background 0.22s ease 0s, color 0.22s ease 0s, transform 0.22s ease 0.45s;">View advantages</span></a></div>
				</div>
			</div>
		</section>
		<!-- Icon carousel-->
		<section class="section bg-gray-lighter bg-additional-image bg-additional-pattern-dark" id="testimonial">
        <div class="container-custom">
          <div class="row justify-content-md-center align-items-lg-center justify-content-xl-start row-0">
            <div class="col-md-10 col-lg-6">
              <div class="section-lg">
                <div class="container-custom-inner">
                  <h3>What people say</h3>
                  <hr class="divider divider-default">
                  <!-- Slick Carousel-->
                  <div class="slider-widget">
                    <!-- Slick Carousel-->
                    <div class="slick-vertical slick-initialized slick-slider" id="slick-1" data-vertical="true" data-arrows="true" data-loop="false" data-dots="false" data-swipe="false" data-items="1" data-custom-arrows="true">
                      
                      
                      
                    <div aria-live="polite" class="slick-list draggable" style="height: 271.969px;"><div class="slick-track" role="listbox" style="opacity: 1; height: 816px; transform: translate3d(0px, 0px, 0px);"><div class="item slick-slide slick-current slick-active" style="width: 610px;" tabindex="-1" role="option" aria-describedby="slick-slide00" data-slick-index="0" aria-hidden="false">
                        <article class="quote-classic">
                          <div class="quote-classic-header"><img class="quote-classic-image" src="assets/quote-user-8-70x70.jpg" alt="" width="70" height="70">
                            <div class="quote-classic-meta">
                              <p class="quote-classic-cite">Jane Smith</p>
                              <p class="quote-classic-small">Entrepreneur</p>
                            </div>
                          </div>
                          <div class="quote-classic-text">
                            <p>My company needed a new design for our new website and we decided to stop on Brave. No HTML template that we’ve seen before hasn’t even come close to what your designers and developers done. It’s a truly amazing solution, and I recommend it.</p>
                          </div>
                        </article>
                      </div><div class="item slick-slide" style="width: 610px;" tabindex="-1" role="option" aria-describedby="slick-slide01" data-slick-index="1" aria-hidden="true">
                        <article class="quote-classic">
                          <div class="quote-classic-header"><img class="quote-classic-image" src="assets/quote-user-9-70x70.jpg" alt="" width="70" height="70">
                            <div class="quote-classic-meta">
                              <p class="quote-classic-cite">Philip Lawrence</p>
                              <p class="quote-classic-small">Designer</p>
                            </div>
                          </div>
                          <div class="quote-classic-text">
                            <p>This template is a universal solution, which I was looking for so long. With Brave, I can now showcase all my projects and receive instant feedback from my website visitors. It is very easy to use and at the same time a very powerful product.</p>
                          </div>
                        </article>
                      </div><div class="item slick-slide" style="width: 610px;" tabindex="-1" role="option" aria-describedby="slick-slide02" data-slick-index="2" aria-hidden="true">
                        <article class="quote-classic">
                          <div class="quote-classic-header"><img class="quote-classic-image" src="assets/quote-user-10-70x70.jpg" alt="" width="70" height="70">
                            <div class="quote-classic-meta">
                              <p class="quote-classic-cite">Morgan McMillan</p>
                              <p class="quote-classic-small">Writer</p>
                            </div>
                          </div>
                          <div class="quote-classic-text">
                            <p>Every writer needs to refresh the look of his/hers website from time to time, and that’s why I was looking for a new design for my website. I do not often choose website templates, but Brave really amazed me with its design and functionality.</p>
                          </div>
                        </article>
                      </div></div></div></div>
                    <div class="slider-widget-aside">
                      <div class="icon novi-icon icon-lg-smaller mdi mdi-format-quote"></div>
                      <div class="owl-carousel-widget-nav">
                        <button class="slick-prev slick-arrow slick-disabled" type="button" data-slick="slick-1" aria-disabled="true" style=""></button>
                        <button class="slick-next slick-arrow" type="button" data-slick="slick-1" style="" aria-disabled="false"></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 bg-additional-item">
              <div class="section-lg">
                <div class="container-custom-inner container-custom-inner-1 text-center">
                  <div class="row row-120">
                    <div class="col-sm-6 col-md-3 col-lg-6">
                      <div class="counter-wrap"><span class="icon novi-icon icon-secondary mdi mdi-television-guide"></span>
                        <div class="heading-3"><span class="counter" data-speed="1000">62000</span><span class="counter-preffix">+</span></div>
                        <p>Projects</p>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-6">
                      <div class="counter-wrap"><span class="icon novi-icon icon-secondary mdi mdi-account-multiple-outline"></span>
                        <div class="heading-3"><span class="counter" data-step="3000">246000</span></div>
                        <p>Happy Clients</p>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-6">
                      <div class="counter-wrap"><span class="icon novi-icon icon-secondary mdi mdi-clock"></span>
                        <div class="heading-3"><span class="counter" data-step="3000">1200</span></div>
                        <p>Hours of Coding</p>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-6">
                      <div class="counter-wrap"><span class="icon novi-icon icon-secondary mdi mdi-code-tags"></span>
                        <div class="heading-3"><span class="counter" data-step="3000">12000</span><span class="counter-preffix">+</span></div>
                        <p>Lines of Code</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
		<!-- Team-->
		<section class="section section-variant-1 bg-default text-center text-sm-left">
			<div class="container container-wide">
				<div class="row justify-content-xl-end row-30">
					<div class="col-xl-8">
						<div class="parallax-text-wrap">
							<h3>meet our people</h3><span class="parallax-text" style="transform: translate3d(0px, -511.381%, 0px); top:-80px;">our team</span>
						</div>
						<hr class="divider divider-default"/>
					</div>
					<div class="col-xl-3 text-xl-right"><a class="button button-secondary button-nina" href="503.php"><span style="transition: opacity 0.22s ease 0s, transform 0.22s ease 0s, color 0.22s ease 0s;">v</span><span style="transition: opacity 0.22s ease 0.03s, transform 0.22s ease 0.03s, color 0.22s ease 0s;">i</span><span style="transition: opacity 0.22s ease 0.06s, transform 0.22s ease 0.06s, color 0.22s ease 0s;">e</span><span style="transition: opacity 0.22s ease 0.09s, transform 0.22s ease 0.09s, color 0.22s ease 0s;">w</span><span style="transition: opacity 0.22s ease 0.12s, transform 0.22s ease 0.12s, color 0.22s ease 0s;"></span><span style="transition: opacity 0.22s ease 0.15s, transform 0.22s ease 0.15s, color 0.22s ease 0s;">a</span><span style="transition: opacity 0.22s ease 0.18s, transform 0.22s ease 0.18s, color 0.22s ease 0s;">l</span><span style="transition: opacity 0.22s ease 0.21s, transform 0.22s ease 0.21s, color 0.22s ease 0s;">l</span><span style="transition: opacity 0.22s ease 0.24s, transform 0.22s ease 0.24s, color 0.22s ease 0s;"></span><span style="transition: opacity 0.22s ease 0.27s, transform 0.22s ease 0.27s, color 0.22s ease 0s;">t</span><span style="transition: opacity 0.22s ease 0.3s, transform 0.22s ease 0.3s, color 0.22s ease 0s;">e</span><span style="transition: opacity 0.22s ease 0.33s, transform 0.22s ease 0.33s, color 0.22s ease 0s;">a</span><span style="transition: opacity 0.22s ease 0.36s, transform 0.22s ease 0.36s, color 0.22s ease 0s;">m</span><span class="button-original-content" style="transition: background 0.22s ease 0s, color 0.22s ease 0s, transform 0.22s ease 0.39s;">view all team</span></a></div>
				</div>
        </div>
      </section>
		<!-- our advantages-->
		<section class="section section-lg bg-secondary-2 parallax-scene-wrapper text-center section-way-point" id="advantages">
			<div class="way-point" data-custom-scroll-to="#advantages">
				<svg enable-background="new 0 0 253 38" height="38px" version="1.1" width="253px" x="0px" xml:space="preserve" y="0px">
					<path clip-rule="evenodd" d="M252,36.001C199.397,36.001,176,0,125.815,0C76,0,52.988,36.001,0,36.001C4.336,40.465,273.563,36.001,252,36.001z" fill-rule="evenodd" style="clip-path: url(#gel)">
					</path>
				</svg>
				<span class="icon mdi mdi-chevron-down">
				</span>
			</div>
			<div class="container">
				<h3>our advantages
				</h3>
				<hr class="divider divider-default"/>
				<div class="row justify-content-sm-center row-50">
					<div class="col-md-6 col-lg-4">
						<div class="thumbnail-classic unit flex-column">
							<div class="unit-left">
								<div class="thumbnail-classic-icon">
									<span class="icon mdi mdi-thumb-up-outline">
									</span>
								</div>
							</div>
							<div class="thumbnail-classic-caption unit-body">
								<h6 class="thumbnail-classic-title">individual approach
								</h6>
								<hr class="divider divider-default divider-sm"/>
								<p class="thumbnail-classic-text">Unlike many other companies, we use an individual approach to each client and we never offer you a set of standard decisions for your business.
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="thumbnail-classic unit flex-column">
							<div class="unit-left">
								<div class="thumbnail-classic-icon">
									<span class="icon mdi mdi-cash-multiple">
									</span>
								</div>
							</div>
							<div class="thumbnail-classic-caption unit-body">
								<h6 class="thumbnail-classic-title">More at less price
								</h6>
								<hr class="divider divider-default divider-sm"/>
								<p class="thumbnail-classic-text">We ensure you more effective and personalised service keeping up with all your interests and concerns in very less price as compared to the sharks in the arena. Assuring easy accessibilty to our services.
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="thumbnail-classic unit flex-column">
							<div class="unit-left">
								<div class="thumbnail-classic-icon">
									<span class="icon mdi mdi-headset">
									</span>
								</div>
							</div>
							<div class="thumbnail-classic-caption unit-body">
								<h6 class="thumbnail-classic-title">Service with a Personal Touch
								</h6>
								<hr class="divider divider-default divider-sm"/>
								<p class="thumbnail-classic-text">Our work doesn’t just end with development, we go for an extra mile for our clients. Our dedicated support is available 24 hours a day, 7 days a week to answer your every question and help you solve any issue.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
        <div class="parallax-scene-js parallax-scene" data-scalar-x="5" data-scalar-y="10" style="transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden;">
          <div class="layer-01">
            <div class="layer" data-depth="0.25" style="transform: translate3d(6.09696px, -10.0052px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"><img src="assets/parallax-scene-01-132x133.png" alt="" width="132" height="133">
            </div>
          </div>
          <div class="layer-02">
            <div class="layer" data-depth=".55" style="transform: translate3d(13.4133px, -22.0115px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><img src="assets/parallax-scene-02-186x208.png" alt="" width="186" height="208">
            </div>
          </div>
          <div class="layer-03">
            <div class="layer" data-depth="0.1" style="transform: translate3d(2.43878px, -4.0021px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><img src="assets/parallax-scene-03-108x120.png" alt="" width="108" height="120">
            </div>
          </div>
          <div class="layer-04">
            <div class="layer" data-depth="0.35" style="transform: translate3d(8.53574px, -14.0073px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><img src="assets/parallax-scene-04-124x145.png" alt="" width="124" height="145">
            </div>
          </div>
          <div class="layer-05">
            <div class="layer" data-depth="0.08" style="transform: translate3d(1.95103px, -3.20168px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><img src="assets/parallax-scene-05-100x101.png" alt="" width="100" height="101">
            </div>
          </div>
          <div class="layer-06">
            <div class="layer" data-depth="0.7" style="transform: translate3d(17.0715px, -28.0147px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><img src="assets/parallax-scene-06-240x243.png" alt="" width="240" height="243">
            </div>
          </div>
        </div>
      </section>

		<!-- do you need a consultation?-->
		<section class="section section-md bg-gray-darker text-center text-md-left">
			<div class="container-wide">
				<div class="row row-50 justify-content-sm-center">
					<div class="col-xxl-8">
						<div class="box-cta box-cta-inline">
							<div class="box-cta-inner">
								<h3 class="box-cta-title">do you need a consultation?
								</h3>
								<p>Feel free to contact us if you have any questions regarding our services.
								</p>
							</div>
							<div class="box-cta-inner"><a class="button button-default-outline button-nina" href="contact.php"><span style="transition: opacity 0.22s ease 0s, transform 0.22s ease 0s, color 0.22s ease 0s;">c</span><span style="transition: opacity 0.22s ease 0.03s, transform 0.22s ease 0.03s, color 0.22s ease 0s;">o</span><span style="transition: opacity 0.22s ease 0.06s, transform 0.22s ease 0.06s, color 0.22s ease 0s;">n</span><span style="transition: opacity 0.22s ease 0.09s, transform 0.22s ease 0.09s, color 0.22s ease 0s;">t</span><span style="transition: opacity 0.22s ease 0.12s, transform 0.22s ease 0.12s, color 0.22s ease 0s;">a</span><span style="transition: opacity 0.22s ease 0.15s, transform 0.22s ease 0.15s, color 0.22s ease 0s;">c</span><span style="transition: opacity 0.22s ease 0.18s, transform 0.22s ease 0.18s, color 0.22s ease 0s;">t</span><span style="transition: opacity 0.22s ease 0.21s, transform 0.22s ease 0.21s, color 0.22s ease 0s;"></span><span style="transition: opacity 0.22s ease 0.24s, transform 0.22s ease 0.24s, color 0.22s ease 0s;">u</span><span style="transition: opacity 0.22s ease 0.27s, transform 0.22s ease 0.27s, color 0.22s ease 0s;">s</span><span class="button-original-content" style="transition: background 0.22s ease 0s, color 0.22s ease 0s, transform 0.22s ease 0.3s;">Contact us</span></a></div>
              </div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- newsletter-->
		<section class="section section-pre-way-point">
        <div class="bg-default">
          <div class="container-custom">
            <div class="row justify-content-md-center justify-content-lg-start align-items-lg-center">
              <div class="col-md-10 col-lg-7 col-xl-6">
                <div class="section-md">
                  <div class="container-custom-inner">
                    <h3>newsletter</h3>
                    <hr class="divider divider-left divider-default">
                    <p>Keep up with our always upcoming news and updates. Enter your e-mail and subscribe to our newsletter.</p>
                    <!-- RD Mailform: Subscribe-->
                    <form class="rd-mailform rd-mailform-inline rd-mailform-sm rd-mailform-inline-modern" data-form-output="form-output-global" data-form-type="subscribe" action="subs.php">
                      <div class="rd-mailform-inline-inner">
                        <div class="form-wrap">
                          <input class="form-input" type="text" name="email" data-constraints="@Email @Required" id="subscribe-form-email-1" placeholder="Enter your e-mail">
                        </div>
                        <button class="button form-button button-sm button-secondary button-nina" type="submit"><span style="transition: opacity 0.22s ease 0s, transform 0.22s ease 0s, color 0.22s ease 0s;">S</span><span style="transition: opacity 0.22s ease 0.03s, transform 0.22s ease 0.03s, color 0.22s ease 0s;">u</span><span style="transition: opacity 0.22s ease 0.06s, transform 0.22s ease 0.06s, color 0.22s ease 0s;">b</span><span style="transition: opacity 0.22s ease 0.09s, transform 0.22s ease 0.09s, color 0.22s ease 0s;">s</span><span style="transition: opacity 0.22s ease 0.12s, transform 0.22s ease 0.12s, color 0.22s ease 0s;">c</span><span style="transition: opacity 0.22s ease 0.15s, transform 0.22s ease 0.15s, color 0.22s ease 0s;">r</span><span style="transition: opacity 0.22s ease 0.18s, transform 0.22s ease 0.18s, color 0.22s ease 0s;">i</span><span style="transition: opacity 0.22s ease 0.21s, transform 0.22s ease 0.21s, color 0.22s ease 0s;">b</span><span style="transition: opacity 0.22s ease 0.24s, transform 0.22s ease 0.24s, color 0.22s ease 0s;">e</span><span class="button-original-content" style="transition: background 0.22s ease 0s, color 0.22s ease 0s, transform 0.22s ease 0.27s;">Subscribe</span></button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 hid_mobile">
                <div class="row no-gutters" data-lightgallery="group">
                  <div class="col-md-12"><a class="gallery-item" href="" data-custom-scroll-to="#" style="cursor: none;" data-lightgallery="item">
                      <div class="gallery-item-image">
                        <figure><img src="assets/logo-b.png" alt="" width="500" height="200">
                        </figure>
                      </div></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
		<!--Page Footer-->
		<!-- Footer Extended-->
		<footer class="section novi-bg novi-bg-img page-footer page-footer-extended text-center text-lg-left bg-gray-darker">
        
        <div class="container container-wide">
          <div class="row justify-content-sm-center justify-content-lg-between justify-content-xl-end row-135">
          	<div class="col-md-6 col-xl-3 hid_mobile">
          		<img alt="" class="card-info-image" height="500" src="assets/buddy.png" width="500" style="margin-left: -150px;margin-top: 100px;" />
          	</div>
            <div class="col-md-8 col-lg-6 col-xl-5">
            	<br>
            	<br>
              <div class="contact-info-wrap">
                <h6>contact information</h6>
                <div class="tabs-custom tabs-horizontal tabs-line tabs-line-small" id="tabs-2">
                  <!-- Nav tabs-->
                  <ul class="list-fix nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" href="#tabs-extended-2-1">Buddy Developer</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tabs-extended-2-2">Abhijith Udayakumar</a></li>
                  </ul>
                  <!-- Tab panes-->
                  <div class="tab-content">
                    <div class="tab-pane fade show active" id="tabs-extended-2-1">
                      <ul class="list-xs list-darker">
                        <li class="box-inline"><span class="icon novi-icon icon-md-smaller icon-primary mdi mdi-map-marker"></span>
                          <div><a href="https://www.createwithbuddy.tech">www.createwithbuddy.tech</a></div>
                        </li>
                        <li class="box-inline"><span class="icon novi-icon icon-md-smaller icon-primary mdi mdi-phone"></span>
                          <ul class="list-comma">
                            <li><a href="tel:+919946883500">+91 9946883500</a></li>
                          </ul>
                        </li>
                        <li class="box-inline"><span class="icon novi-icon icon-md-smaller icon-primary mdi mdi-email-open"></span><a href="mailto:helpdesk.buddydeveloper@gmail.com">helpdesk.buddydeveloper@gmail.com</a></li>
                      </ul>
                    </div>
                    <div class="tab-pane fade" id="tabs-extended-2-2">
                      <ul class="list-xs list-darker">
                        <li class="box-inline"><span class="icon novi-icon icon-md-smaller icon-primary mdi mdi-map-marker"></span><a href="503.php">www.createwithbuddy.tech/abhijith</a></li>
                        <li class="box-inline"><span class="icon novi-icon icon-md-smaller icon-primary mdi mdi-phone"></span>
                          <ul class="list-comma">
                            <li><a href="tel:+919946883500">+91 9946883500</a></li>
                          </ul>
                        </li>
                        <li class="box-inline"><span class="icon novi-icon icon-md-smaller icon-primary mdi mdi-email-open"></span><a href="mailto:abhijithukzm@gmail.com">abhijithukzm@gmail.com</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8 col-lg-5 col-xl-3">
              <h6>Recent Events</h6>
              <div class="blog-inline-wrap">
                <!-- Blog Inline-->
                <article class="blog-inline">
                  <div class="blog-inline-title"><a href="assets/Ethical_Hacking.png">A Course on Cyber Security</a></div>
                  <ul class="blog-inline-meta">
                    <li><a href="assets/Ethical_Hacking.png"> Coming Soon</a></li>
                    <li>
                      by&nbsp;<a class="text-normal" href="assets/Ethical_Hacking.png">BUDDY Team</a></li>
                  </ul>
                </article>
                <!-- Blog Inline-->
                <!-- <article class="blog-inline">
                  <div class="blog-inline-title"><a href="#">The Top 5 Reasons Why ‘The Customer Is Always Right’ Is Wrong</a></div>
                  <ul class="blog-inline-meta">
                    <li><a href="#"> 2 days ago</a></li>
                    <li>
                      by&nbsp;<a class="text-normal" href="#">Ronald Chen</a></li>
                  </ul>
                </article> -->
                <!-- Blog Inline-->
                <article class="blog-inline">
                  <div class="blog-inline-title"><a href="assets/instaAwareness.png">Instagram Algorithm & Dangers</a></div>
                  <ul class="blog-inline-meta">
                    <li><a href="assets/instaAwareness.png"> Coming Soon</a></li>
                    <li>
                      by&nbsp;<a class="text-normal" href="assets/instaAwareness.png">ash__scribbles_</a></li>
                  </ul>
                </article>
              </div>
            </div>
            <div class="col-xl-8">
              <div class="row flex-lg-row-reverse justify-content-sm-center align-items-lg-center row-135 justify-content-xl-start">
                <div class="col-md-10 col-lg-5 col-xl-5 col-xxl-5 text-center">
                  <ul class="group-xs group-middle social-icons-list">
                  	<li><a class="icon novi-icon icon-md-smaller icon-circle icon-secondary-5-filled mdi mdi-facebook" href="https://www.facebook.com/buddy.ai.39" target="_blank"></a>&nbsp;&nbsp;<!-- </li>
                    <li> --><a class="icon novi-icon icon-md-smaller icon-circle icon-secondary-5-filled mdi mdi-twitter" href="https://twitter.com/messages/compose?recipient_id=1225814552807239680&ref_src=twsrc%5Etfw" target="_blank"></a>&nbsp;&nbsp;<!-- </li>
                    <li> --><a class="icon novi-icon icon-md-smaller icon-circle icon-secondary-5-filled mdi mdi-instagram" href="https://www.instagram.com/buddydeveloper/" target="_blank"></a>&nbsp;&nbsp;<!-- </li>
                    <li> --><a class="icon novi-icon icon-md-smaller icon-circle icon-secondary-5-filled mdi mdi-google" href="mailto:helpdesk.buddydeveloper@gmail.com"></a>&nbsp;&nbsp;<!-- </li>
                    <li> --><a class="icon novi-icon icon-md-smaller icon-circle icon-secondary-5-filled mdi mdi-linkedin" href="#"></a></li>
                  </ul>
                </div>
                <div class="col-md-10 col-lg-7 col-xl-7 col-xxl-6">
                  <p class="rights"><span>©&nbsp;</span><span class="copyright-year">2020</span><span>&nbsp;</span><span>Buddy Developer</span><span>.&nbsp;</span><a href="#">Privacy Policy</a></p>
                </div>
                <input type="hidden" id="visitcount" name="visitcount" value="123456">
              </div>
            </div>
          </div>
        </div>
      </footer>
	</div>
	<!-- Javascript-->
	<script type="text/javascript">
		var end;
            var clock, countup;
            var start = document.getElementById('curr_stats').value;
            $('.clock').css('opacity',0);
            $(document).ready(function () {
            	// makeAjaxRequest();
                // Instantiate a counter
                clock = new FlipClock($('.clock'), start, {
                    clockFace: 'Counter',
                    autoStart: true
                });

                countup = setInterval(function () {
                	makeAjaxRequest();
                    if (clock.getTime().time >= end) {
                        // clock.stop();
                        // clearInterval(countup);
                    }else{
                        clock.increment();
                        if(clock.getTime().time > start){
                            $('.clock').css('opacity',1);
                        }
                    }
                    // alert(end);
                }, 1000);
            });

            function makeAjaxRequest()
			{
			   var url="stats.php";
			   $.get(url,{},verifyDb);
			}

			function verifyDb(response)
			{
			    // alert(response);
			    end = response;
			}
	</script>
	<script src="js/core.min.js">
	</script>
	<script src="js/script.js">
	</script>
</body>
</html>
