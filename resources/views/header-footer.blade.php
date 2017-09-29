<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My blog</title>
	<link rel="stylesheet" href="{{ url('css/home.css') }}">
	<link rel="stylesheet" type="text/css" href="{{url('css/font-awesome.min.css')}}">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>

	<div class="container-fluid">
			
			<div class="top-navigation">
				<div class="container">
					<div class="row">
						<div class="top-navigation-left col-md-6">
							<a href="/home" style="margin-right: 20px;">About</a>
							<a href="/home" style="margin-right: 20px;">Privacy Policy</a>
							<a href="/home" style="margin-right: 20px;">Terms</a>
							<a href="/home" style="margin-right: 20px;">DMCA</a>
							<a href="/home" style="margin-right: 20px;">Sitemap</a>
							<a href="/home" style="margin-right: 20px;">CONTACT</a>
						</div>
						<div class="top-navigation-right col-md-6">
							<div class="social pull-right">
								<li class="menu-item"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li class="menu-item"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li class="menu-item"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
								<li class="menu-item"><a href="#" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
								<li class="menu-item"><a href="#" target="_blank"><i class="fa fa-tumblr"></i></a></li>
								<li class="menu-item"><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="top-header">
				<div class="container">
					<div class="row">
						<div class="top-header-left col-md-2">
							<a href="/home"><img src="{{url('images/Bayna-logo.png')}}" alt=""></a>
						</div>
						<div class="top-header-right col-md-8 col-md-offset-2">
							<a href="/home"><img src="{{url('images/AD728.png')}}" alt=""></a>
						</div>
					</div>
				</div>
			</div>
			<div class="menu-bar">
				<div class="container">
					<div class="navbar-header col-md-2">
				      	<a class="navbar-brand" href="{{ route('home.index')}}"><i class="fa fa-home"> &nbsp;Home</i></a>
				    </div>
				    <ul class="nav navbar-nav col-md-10">
					    <li class="active"><a href="{{ route('home.create')}}">Create</a></li>
					    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Drop Menu <span class="caret"></span></a>
					        <ul class="dropdown-menu">
					          <li><a href="#">Page 1-1</a></li>
					          <li><a href="#">Page 1-2</a></li>
					          <li><a href="#">Page 1-3</a></li>
					        </ul>
					    </li>
				        <li><a href="#">Update</a></li>
				        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Drop Menu <span class="caret"></span></a>
					        <ul class="dropdown-menu">
					          <li><a href="#">Page 1-1</a></li>
					          <li><a href="#">Page 1-2</a></li>
					          <li><a href="#">Page 1-3</a></li>
					        </ul>
					    </li>
					    <li><a href="#">Delete</a></li>
					    <li><a href="#">Translate</a></li>
				    </ul>
				</div>

		    </div>
		   	@yield('container')
			<footer class="animated fadeInUpBig navplace" id="footer-wrapper" itemscope="itemscope" itemtype="http://schema.org/WPFooter" role="contentinfo">
				<div class="footer-bottom">
				<div id="footer-widgetfix">
				<div class="footer-widget" id="footx1">
				<div class="footer section" id="footer1"><div class="widget HTML" data-version="1" id="HTML556">
				<h2 class="title">About</h2>
				<div class="widget-content">
				Aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean vitae rhoncus ex. Aenean auctor erat at nisi euismod malesuada. Etiam vel sollicitudin nisi, quis pulvinar purus.
				</div>
				</div><div class="widget HTML" data-version="1" id="HTML111">
				<div class="widget-content">
				<div class="top-navigation-right">
				<div class="top-social-wrapper">
				<div class="social-icon"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></div>
				<div class="social-icon"><a href="#" target="_blank"><i class="fa fa-google"></i></a></div>
				<div class="social-icon"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></div>
				<div class="social-icon"><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></div>
				<div class="social-icon"><a href="#" target="_blank"><i class="fa fa-youtube-play"></i></a></div>
				<div class="social-icon"><a href="#" target="_blank"><i class="fa fa-pinterest-square"></i></a></div>
				<div class="clear">					
				</div>
				</div></div>
				</div>
				<div class="clear"></div>
				<span class="widget-item-control">
				<span class="item-control blog-admin">
				</a>
				</span>
				</span>
				<div class="clear"></div>
				</div></div>
				</div>
				<div class="footer-widget" id="footx2">
				<div class="footer section" id="footer2"><div class="widget Label" data-version="1" id="Label3">
				<h2>Popular Tags</h2>
				<div class="widget-content cloud-label-widget-content">
				<span class="label-size label-size-4">
				<a dir="ltr" href="https://bayna-msdesignbd.blogspot.com/search/label/Content%20Marketing">Content Marketing</a>
				</span>
				<span class="label-size label-size-4">
				<a dir="ltr" href="https://bayna-msdesignbd.blogspot.com/search/label/Facebook">Facebook</a>
				</span>
				<span class="label-size label-size-3">
				<a dir="ltr" href="https://bayna-msdesignbd.blogspot.com/search/label/Featured">Featured</a>
				</span>
				<span class="label-size label-size-1">
				<a dir="ltr" href="https://bayna-msdesignbd.blogspot.com/search/label/Firefox">Firefox</a>
				</span>
				<span class="label-size label-size-2">
				<a dir="ltr" href="https://bayna-msdesignbd.blogspot.com/search/label/Google">Google</a>
				</span>
				<span class="label-size label-size-3">
				<a dir="ltr" href="https://bayna-msdesignbd.blogspot.com/search/label/Local%20Search">Local Search</a>
				</span>
				<span class="label-size label-size-2">
				<a dir="ltr" href="https://bayna-msdesignbd.blogspot.com/search/label/Mobile">Mobile</a>
				</span>
				<span class="label-size label-size-4">
				<a dir="ltr" href="https://bayna-msdesignbd.blogspot.com/search/label/News">News</a>
				</span>
				<span class="label-size label-size-5">
				<a dir="ltr" href="https://bayna-msdesignbd.blogspot.com/search/label/Related">Related</a>
				</span>
				<span class="label-size label-size-3">
				<a dir="ltr" href="https://bayna-msdesignbd.blogspot.com/search/label/Tips%20and%20Tricks">Tips and Tricks</a>
				</span>
				<span class="label-size label-size-4">
				<a dir="ltr" href="https://bayna-msdesignbd.blogspot.com/search/label/Tools%20%26%20Analytics">Tools &amp; Analytics</a>
				</span>
				<span class="label-size label-size-2">
				<a dir="ltr" href="https://bayna-msdesignbd.blogspot.com/search/label/Twitter">Twitter</a>
				</span>
				<div class="clear"></div>
				<span class="widget-item-control">
				<span class="item-control blog-admin">
				</a>
				</span>
				</span>
				<div class="clear"></div>
				</div>
				</div></div>
				</div>
				<div class="footer-widget" id="footx3">
				<div class="footer section" id="footer3"><div class="widget PopularPosts" data-version="1" id="PopularPosts2">
				<h2>Most Popular</h2>
				<div class="widget-content popular-posts">
				<ul>
				<li>
				<div class="item-thumbnail-only">
				<div class="item-thumbnail">
				<a href="https://bayna-msdesignbd.blogspot.com/2017/03/companies-are-discovering-that.html" target="_blank">
				<img alt="" border="0" src="https://4.bp.blogspot.com/-eyL_Q-WhfF4/WL_fZ4j6X7I/AAAAAAAACjk/hTwJhF4IsnISS7cuM5_6veuXDeI_QbEIACLcB/w72-h72-p-k-no-nu/fashion_father-and-son-in-vacation_217K.jpg">
				</a>
				</div>
				<div class="item-title"><a href="https://bayna-msdesignbd.blogspot.com/2017/03/companies-are-discovering-that.html">Companies Are Discovering That Pittsburgh Is Good for Business</a></div>
				</div>
				<div style="clear: both;"></div>
				</li>
				<li>
				<div class="item-thumbnail-only">
				<div class="item-thumbnail">
				<a href="https://bayna-msdesignbd.blogspot.com/2017/03/what-would-you-have-to-give-up-to-pay.html" target="_blank">
				<img alt="" border="0" src="https://3.bp.blogspot.com/-3R4JgtYtDkw/WL_f5OAn-MI/AAAAAAAACjo/5ekt3ugDiE0HG4WONhioLPaIy1Nl6LmyACLcB/w72-h72-p-k-no-nu/apple-iphone-books-desk.jpg">
				</a>
				</div>
				<div class="item-title"><a href="https://bayna-msdesignbd.blogspot.com/2017/03/what-would-you-have-to-give-up-to-pay.html">What You Have to Give Up to Pay for An Unexpected Hospital Visit?</a></div>
				</div>
				<div style="clear: both;"></div>
				</li>
				<li>
				<div class="item-thumbnail-only">
				<div class="item-thumbnail">
				<a href="https://bayna-msdesignbd.blogspot.com/2017/03/protecting-seniors-online-from-scams.html" target="_blank">
				<img alt="" border="0" src="https://3.bp.blogspot.com/-7f_rYbnX2O8/WL_e_biBozI/AAAAAAAACjg/eoGpv6YjpbgLsJYTOWaknRe3BLIVxt2aACLcB/w72-h72-p-k-no-nu/pexels-photo-107874.jpeg">
				</a>
				</div>
				<div class="item-title"><a href="https://bayna-msdesignbd.blogspot.com/2017/03/protecting-seniors-online-from-scams.html">Protecting Seniors Online from Scams, Hacks and Tax Fraud</a></div>
				</div>
				<div style="clear: both;"></div>
				</li>
				<li>
				<div class="item-thumbnail-only">
				<div class="item-thumbnail">
				<a href="https://bayna-msdesignbd.blogspot.com/2017/03/biotech-company-files-two-more-patents.html" target="_blank">
				<img alt="" border="0" src="https://4.bp.blogspot.com/-Tq4XskuP55U/WL_ddtLIm1I/AAAAAAAACjM/ILcv5649Nr0umeMWNbS1pqOlAdWGZrSUQCLcB/w72-h72-p-k-no-nu/pexels-photo-324655.jpeg">
				</a>
				</div>
				<div class="item-title"><a href="https://bayna-msdesignbd.blogspot.com/2017/03/biotech-company-files-two-more-patents.html">Biotech Company Files Two More Patents for Proprietary Cancer Cure</a></div>
				</div>
				<div style="clear: both;"></div>
				</li>
				<li>
				<div class="item-thumbnail-only">
				<div class="item-thumbnail">
				<a href="https://bayna-msdesignbd.blogspot.com/2017/03/the-top-state-for-robotics-innovation.html" target="_blank">
				<img alt="" border="0" src="https://4.bp.blogspot.com/-h7aSgIwvmRY/WL_eWUYgwqI/AAAAAAAACjY/2iYyqprs5YUR_556I8icmGvK62dsNgZ1wCLcB/w72-h72-p-k-no-nu/pexels-photo-219613.jpeg">
				</a>
				</div>
				<div class="item-title"><a href="https://bayna-msdesignbd.blogspot.com/2017/03/the-top-state-for-robotics-innovation.html">The Top State for Robotics Innovation? Florida Will Surprise You</a></div>
				</div>
				<div style="clear: both;"></div>
				</li>
				<li>
				<div class="item-thumbnail-only">
				<div class="item-thumbnail">
				<a href="https://bayna-msdesignbd.blogspot.com/2017/03/how-to-make-backyard-style-center-of.html" target="_blank">
				<img alt="" border="0" src="https://4.bp.blogspot.com/-GWLQF5qPBOI/WL_c113DENI/AAAAAAAACjI/DN1uqo0EkhkiUTJvXN8U-qD61Tm444jOgCLcB/w72-h72-p-k-no-nu/tech_hardware-iphone5-apple_047K.jpg">
				</a>
				</div>
				<div class="item-title"><a href="https://bayna-msdesignbd.blogspot.com/2017/03/how-to-make-backyard-style-center-of.html">How to Make The Backyard The Style Center of Your Home</a></div>
				</div>
				<div style="clear: both;"></div>
				</li>
				</ul>
				<div class="clear"></div>
				<span class="widget-item-control">
				<span class="item-control blog-admin">
				</span>
				</span>
				<div class="clear"></div>
				</div>
				</div></div>
				</div>
				</div>
				</div>
				<div id="footerfix">
				<div class="copyleft">
				Copyright © <script type="text/javascript">var creditsyear = new Date();document.write(creditsyear.getFullYear());</script>2017
				<a href="https://bayna-msdesignbd.blogspot.com/">Bayna | Professional Blogger Template</a> All Rights Reserved - <div id="mscontent" style="display: inline-block;"><a href="http://template.msdesignbd.com">Blogger Templates</a> Created with <i style="color:#ff695d;" class="fa fa-heart"></i> by MS Design</div>
				</div>
				</div>
			</footer>
	</div>
</body>
</html>