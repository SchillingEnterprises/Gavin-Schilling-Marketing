<?php 
  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
  $ip=$_SERVER['HTTP_CLIENT_IP'];}
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
  $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];} else {
  $ip=$_SERVER['REMOTE_ADDR'];}
?>

<!DOCTYPE html>
<html>

	<head>
		<title>Marketing Campaigns | Gavin Schilling Marketing, subsidary of Schilling Enterprises</title>

		<!-- Meta Tags -->
			<!-- Webcrawler Meta Tags -->
				<meta charset="utf-8">
				<meta name="title" content="Gavin Schilling Marketing, subsidary of Schilling Enterprises">
				<meta name="description" content="Gavin Schilling Marketing is a premire full-service global strategies marketing firm specializing both online and offline.">
				<meta name="author" content="Gavin Schilling">
			<!-- /Webcrawler Meta Tags -->

			<!-- Facebook Open Graph Meta Tags -->
				<meta property="fb:app_id" content="561430954040905">
				<meta property="og:title" content="Gavin Schilling Marketing">
				<meta property="og:description" content="Gavin Schilling Marketing is a premire full-service global strategies marketing firm specializing both online and offline.">
				<meta property="og:url" content="https://schillingenterprises.github.io/Gavin-Schilling-Marketing/Marketing-Campaigns.html">
				<meta property="og:image" content="dist/images/jpg/Gavin_Schilling_Marketing_logo.jpg">
				<meta property="og:type" content="website">
			<!-- /Facebook Open Graph Meta Tags -->

			<!-- Twitter Card Meta Tags -->
				<meta name="twitter:title" content="Gavin Schilling Marketing">
				<meta name="twitter:description" content="Gavin Schilling Marketing is a premire full-service global strategies marketing firm specializing both online and offline.">
				<meta name="twitter:creator" content="Gavin Schilling">
				<meta name="twitter:url" content="https://schillingenterprises.github.io/Gavin-Schilling-Marketing/Marketing-Campaigns.html">
				<meta name="twitter:image" content="./images/png/Schilling-Enterprises.png">
				<meta name="twitter:card" content="summary">
			<!-- /Twitter Card Meta Tags -->
		<!-- /Meta Tags -->

		<!-- Facebook SDK for JavaScript with jQuery -->
			<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<!-- /Facebook SDK for JavaScript with jQuery -->

		<!-- Stylesheets -->
			<!-- Normalize CSS -->
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css" integrity="sha256-K3Njjl2oe0gjRteXwX01fQD5fkk9JFFBdUHy/h38ggY=" crossorigin="anonymous" />
			<!-- /Normalize CSS -->

			<!-- Tether stylesheet -->
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/css/tether.min.css" integrity="sha256-y4TDcAD4/j5o4keZvggf698Cr9Oc7JZ+gGMax23qmVA=" crossorigin="anonymous" />
			<!-- /Tether stylesheet -->

			<!-- Bootstrap stylesheet -->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
			<!-- /Bootstrap stylesheet -->

			<!-- Google Fonts -->
				<link href="https://fonts.googleapis.com/css?family=Katibeh|Poiret+One|Tangerine:700" rel="stylesheet">
			<!-- /Google Fonts -->

			<!-- Custom stylesheet -->
				<link rel="stylesheet" type="text/css" href="../html/css/style.min.css">
			<!-- /Custom stylesheet -->
		<!-- /Stylesheets -->

			<script>
				$(document).ready(function() {
				  $.ajaxSetup({ cache: true });
				  $.getScript('//connect.facebook.net/en_US/sdk.js', function(){
				    FB.init({
				      appId: '561430954040905',
				      version: 'v2.7' // or v2.1, v2.2, v2.3, ...
				    });
				    $('#loginbutton,#feedbutton').removeAttr('disabled');
				    FB.getLoginStatus(updateStatusCallback);
				  });
				});
			</script>
	</head>

	<body>
		<!-- Header -->
			<header>
				<!-- Collapsing NavBar -->
					<nav class="navbar navbar-light bg-faded">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar" aria-controls="exCollapsingNavbar" aria-expanded="false" aria-label="Toggle navigation">
							&#9776;
						</button>
						<div class="collapse" id="exCollapsingNavbar">
							<div class="bg-inverse p-a-1">

								<!-- Nav Bar (Pills with Dropdown) -->
									<ul class="nav nav-pills">
										<li class="nav-item dropdown">
										    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
										    <div class="dropdown-menu">
												<a class="dropdown-item" href="../html/Website-Development.html">Website Development</a>
												<a class="dropdown-item" href="../html/Marketing-Campaigns.html">Marketing Campaigns</a>
												<a class="dropdown-item" href="../html/Promotional-Services.html">Promotional Services</a>
										    </div>
										</li>
									</ul>
								<!-- /Nav Bar (Pills with Dropdown) -->

							</div>
						</div>
					</nav>
				<!-- /Collapsing NavBar -->

				<img src="../html/images/png/Schilling-Enterprises.png" class="img-rounded m-x-auto d-block" alt="Schilling Enterprises logo">

				<div class="text-xs-center">
					<h1>Gavin Schilling Marketing</h1>
					<h5>Subsidary of Schilling Enterprises</h5>
				</div>

			</header>
		<!-- /Header -->

		<!-- Accordion -->
			<div id="accordion" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingOne">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Sampling of Previous Project Management Mailing Campaigns <span class="tag tag-success">New</span>
							</a>
						</h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
						<!-- Portfolio Carousel -->
							<div class="text-xs-center">
								<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
									<ol class="carousel-indicators">
										<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
									    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
									    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
									</ol>
									<div class="carousel-inner" role="listbox">
										<div class="carousel-item active">
											<img src="http://rendering.documents.cimpress.io/v1/vp/preview?instructions_uri=http%3a%2f%2fservices.vistaprint.com%2fsales%2fdocuments%2fpreviewing%2foriondocsignature.aspx%3falt_doc_id%3d25V9V-Z3A31-0N9%26hash%3df60cae%26session_id%3d4059989838&width=750&category=lp&merchant_metadata=AHD" class="img-rounded m-x-auto d-block" alt="Fall 2016 - Nina McLemore">
										</div>
										<div class="carousel-item">
											<img src="http://rendering.documents.cimpress.io/v1/vp/preview?instructions_uri=http%3a%2f%2fservices.vistaprint.com%2fsales%2fdocuments%2fpreviewing%2foriondocsignature.aspx%3falt_doc_id%3dG6G6M-T3A35-5D2%26hash%3d5769ab%26session_id%3d4059989838&width=750&category=lp&merchant_metadata=AHD" class="img-rounded m-x-auto d-block" alt="Spring & Summer 2016 - Nina McLemore">
										</div>
										<div class="carousel-item">
											<div class="container">
												<div class="row">
													<div class="col-sm-12 col-md-9">
														<img src="http://rendering.documents.cimpress.io/v1/vp/preview?instructions=QSH_JgVgaHkoABQ5vmZmRawMRLAmwkQyoiNwAFBGAAAiGVERuAAogzDM0QyoIwAAFEGYZmiGVBGAAAoIwAAEqCMAABQRgAAFgQut___tk_8lEG%24ZmoiSgABb___bJ_5P4AAAFgYqVKIOAABRElAADAky9tDo6OB0Xl7q4NjewsjmXMjexuraytzo5lzG0trg5Mrm5lzS3l7sYl7q4NjewsjmXmRocMZwynDGWsRiZMRaaGZgcFpycHBiWsLEzMjCcmhmZHJkYvxiYmBe3uTSztLcwthefujK3MLc6HrsxOpaxthM7ODSyHpyZGhsa2hYGKlShzgAAUNSAACh0Y1YUND1G3AkyoNDo6OB0Xl7q4NjewsjmXMjexuraytzo5lzG0trg5Mrm5lzS3l7sYl7q4NjewsjmXmZkYmBoamJsYvxiYmBe4OTK7NLK7n7oytzC3Oh67MTraFgYqVKHOAABQ1IAAKIEfa_Q0PUbcCTKg0Ojo4HReXurg2N7CyOZcyN7G6trK3OjmXMbS2uDkyubmXNLeXuxiXurg2N7CyOZeZmRiYGhqcmJi_GJiYF7g5Mrs0srufujK3MLc6HrsxOtoWBVFDGRwpMNkNDO0HAAADApFCk2qv8pU6uaKVWsKClMrHgpUaytKUqtNig63FKRKuBig65PKTaukClYryspUK%240KVCxCCKUixFQKVWxHTKDsSIykVsSZCkTsS6CkUsTbCkUsT8LQsCqKFbQo%24bY86bJ4DQvNCGAAAwKNKTGqXylMq%24UpUaxNKUStGSg63TKTCuLClGr9IpL7EHMpSLEVkpULEf8pUrEywpVbE%24QpSLFGS0LQtCNsCbCRDKiI3AAUEYAACIZURG4ACiDMMzRDKgjAAAUQZhmaIZUEYAACgjAAASoIwAAFBGAAAW___z_1shyFsmQk_gAAAA&width=750&category=lp&merchant_metadata=084" class="img-rounded" alt="Spring & Summer 2011 - Nina McLemore (Front of Card)">
													</div>
													<div class="col-sm-12 col-md-3">
														<img src="http://rendering.documents.cimpress.io/v1/vp/preview?instructions=QSH_JgVgqHkoABQ5vmZuNsDESwJsJEMqIjcABQRgAAIhlREbgAKIMwzNEMqCMAABRBmGZohlQRgAAKCMAABKgjAAAUEYAABYELrf__7ZP_JRBvmZqIkoAAW___2yf%24T%24AAABYGKlSiDgAAURJQAAwJMvbQ6OjgdF5e6uDY3sLI5lzI3sbq2src6OZcxtLa4OTK5uZc0t5e7GJe6uDY3sLI5l5wysZyxsRyblrMzGJgWmjIxMxawmpwylpwbMJiYG5yym7CzMr8YmJgXt7k0s7S3MLYXn7oytzC3Oh67MTqWsbYTOzg0sh6cmRobG1oWBipUogmE51Dye17oMtjIVBmgItwJMqDQ6OjgdF5e6uDY3sLI5lzI3sbq2src6OZcxtLa4OTK5uZc0t5e7GJe6uDY3sLI5l5mZGJgaGxuaGj8YmJgXuDkyuzSyu5%246MrcwtzoeuzE62haFoRtgTYSIZURG4ACgjAAARDKiI3AAUQZhmaIZUEYAACiDMMzRDKgjAAAUEYAACVBGAAAoIwAAC3__%24f%24tkOQtkyEn8AAAAA--&width=750&category=lp&merchant_metadata=084" class="img-rounded" alt="Spring & Summer 2011 - Nina McLemore (Back of Card)">
													</div>
												</div>
											</div>
									    </div>
										<div class="carousel-item">
											<div class="container">
												<div class="row">
													<div class="col-sm-12 col-md-6">
														<img src="http://rendering.documents.cimpress.io/v1/vp/preview?instructions=QSH_JgVgaHkoABQ5vmZmNsDESwJsJEMqIjcABQRgAAIhlREbgAKIMwzNEMqCMAABRBmGZohlQRgAAKCMAABKgjAAAUEYAABYELrf__7ZP_JRBvmZqIkoAAW___2yf%24T%24AAABYGKlSiDgAAURJQAAwJMp7Q6OjgdF5e6uDY3sLI5lzI3sbq2src6OZcxtLa4OTK5uZc0t5e7GJe6uDY3sLI5l5icmJgZmRwaPxiYmBe4OTK7NLK7n7oytzC3Oh67MTraFgYqVKGZlCRQyMAAKIN4ABQ9Q17sCTKc0Ojo4HReXurg2N7CyOZcyN7G6trK3OjmXMbS2uDkyubmXNLeXuxiXurg2N7CyOZecHJoYGRyaPxiYmBe4OTK7NLK7n7oytzC3Oh67MTraFoWhG2BNhIhlREbgAKCMAABEMqIjcABRBmGZohlQRgAAKIMwzNEMqCMAABQRgAAJUEYAACgjAAALf__5_62Q5C2TISfwAAAA&width=402&category=lp&merchant_metadata=084" alt="2007 - Worthwear (Front of Card)">
													</div>
													<div class="col-sm-12 col-md-6">
														<img src="http://rendering.documents.cimpress.io/v1/vp/preview?instructions_uri=http%3a%2f%2fservices.vistaprint.com%2fsales%2fdocuments%2fpreviewing%2foriondocsignature.aspx%3falt_doc_id%3d32861-19043-0J9%26hash%3d5fa33b%26page%3d2%26session_id%3d4059989838&width=402&category=lp&merchant_metadata=084" class="img-rounded" alt="2007 - Worthwear (Back of Card)">
													</div>
												</div>
											</div>
									    </div>
										<div class="carousel-item">
											<div class="container">
												<div class="row">
													<div class="col-sm-12 col-md-6">
														<img src="http://rendering.documents.cimpress.io/v1/vp/preview?instructions=QSH_JgVgaHkoABQ5vmZmKsDESwJsJEMqIjcABQRgAAIhlREbgAKIMwzNEMqCMAABRBmGZohlQRgAAKCMAABKgjAAAUEYAABYELrf__7ZP_JRBvmZqIkoAAW___2yf%24T%24AAABYGKtSiDgAAURJQAAwJMpzQ6OjgdF5e6uDY3sLI5lzI3sbq2src6OZcxtLa4OTK5uZc0t5e7GJe6uDY3sLI5l5sZGRscGxi_GJiYF7g5Mrs0srufujK3MLc6HrsxOopPjZoZJ9dbjLPrsxeJ9cnhRaFoWhG2BNhIhlREbgAKCMAABEMqIjcABRBmGZohlQRgAAKIMwzNEMqCMAABQRgAAJUEYAACgjAAALf__5_62Q5C2TISfwAAAAA--&width=402&category=lp&merchant_metadata=084" alt="Fall & Holiday 2005 - Etcetra Apparel (Front of Card)">
													</div>
													<div class="col-sm-12 col-md-6">
														<img src="http://rendering.documents.cimpress.io/v1/vp/preview?instructions_uri=http%3a%2f%2fservices.vistaprint.com%2fsales%2fdocuments%2fpreviewing%2foriondocsignature.aspx%3falt_doc_id%3d82073-28311-9J5%26hash%3d84cc60%26page%3d2%26session_id%3d4059989838&width=402&category=lp&merchant_metadata=084" class="img-rounded" alt="Fall & Holiday 2005 - Etcetra Apparel (Back of Card)">
													</div>
												</div>
											</div>
									    </div>
										<div class="carousel-item">
											<div class="container">
												<div class="row">
													<div class="col-sm-12 col-md-6">
														<img src="http://rendering.documents.cimpress.io/v1/vp/preview?instructions=QSH_JgVgaHkoABQ5vmZmKsDESwJsJEMqIjcABQRgAAIhlREbgAKIMwzNEMqCMAABRBmGZohlQRgAAKCMAABKgjAAAUEYAABYELrf__7ZP_JRBvmZqIkoAAW___2yf%24T%24AAABYGKtSiDgAAURJQAAwJMpzQ6OjgdF5e6uDY3sLI5lzI3sbq2src6OZcxtLa4OTK5uZc0t5e7GJe6uDY3sLI5l5oaGBwcGxo_GJiYF7g5Mrs0srufujK3MLc6HrsxOopPh5QPZ7k8v1Po%24SxZ%24IDfdaFoWhG2BNhIhlREbgAKCMAABEMqIjcABRBmGZohlQRgAAKIMwzNEMqCMAABQRgAAJUEYAACgjAAALf__5_62Q5C2TISfwAAAAA--&width=402&category=lp&merchant_metadata=084" alt="Spring & Summer 2005 - Etcetra Apparel (Front of Card)">
													</div>
													<div class="col-sm-12 col-md-6">
														<img src="http://rendering.documents.cimpress.io/v1/vp/preview?instructions_uri=http%3a%2f%2fservices.vistaprint.com%2fsales%2fdocuments%2fpreviewing%2foriondocsignature.aspx%3falt_doc_id%3d98335-70110-6U5%26hash%3d68747b%26page%3d2%26session_id%3d4059989838&width=402&category=lp&merchant_metadata=084" class="img-rounded" alt="Spring & Summer 2005 - Etcetra Apparel (Back of Card)">
													</div>
												</div>
											</div>
									    </div>
										<div class="carousel-item">
											<div class="container">
												<div class="row">
													<div class="col-sm-12 col-md-6">
														<img src="http://rendering.documents.cimpress.io/v1/vp/preview?instructions=QSH_JgVgaHkoABQ5vmZmRCwMRLAmwkQyoiNwAFBGAAAiGVERuAAogzDM0QyoIwAAFEGYZmiGVBGAAAoIwAAEqCMAABQRgAAFgQut___tk_8lEG%24ZmoiSgABb___bJ_5P4AAAFgYqVKIIQABQz4AAKIKIABQdAAAMCTKc0Ojo4HReXurg2N7CyOZcyN7G6trK3OjmXMbS2uDkyubmXNLeXuxiXurg2N7CyOZeZnJmcGJoZPxiYmBe4OTK7NLK7n7oytzC3Oh67MTraFgYqVKIHwABQz4AAKHMwABQcAAAMCTKc0Ojo4HReXurg2N7CyOZcyN7G6trK3OjmXMbS2uDkyubmXNLeXuxiXurg2N7CyOZeZnJmcGJqZPxiYmBe4OTK7NLK7n7oytzC3Oh67MTraFgYqVKIIQABQ1wAAKEQAABQdgAAMCTKc0Ojo4HReXurg2N7CyOZcyN7G6trK3OjmXMbS2uDkyubmXNLeXuxiXurg2N7CyOZeZnJmcGRqZPxiYmBe4OTK7NLK7n7oytzC3Oh67MTraFoWhG2BNhIhlREbgAKCMAABEMqIjcABRBmGZohlQRgAAKIMwzNEMqCMAABQRgAAJUEYAACgjAAALf__5_62Q5C2TISfwAAAA-&width=402&category=lp&merchant_metadata=084" alt="Spring 2005 - Etcetra Apparel (Front of Card)">
													</div>
													<div class="col-sm-12 col-md-6">
														<img src="http://rendering.documents.cimpress.io/v1/vp/preview?instructions_uri=http%3a%2f%2fservices.vistaprint.com%2fsales%2fdocuments%2fpreviewing%2foriondocsignature.aspx%3falt_doc_id%3d29919-74016-9L8%26hash%3d580462%26page%3d2%26session_id%3d4059989838&width=402&category=lp&merchant_metadata=084" class="img-rounded" alt="Spring 2005 - Etcetra Apparel (Back of Card)">
													</div>
												</div>
											</div>
									    </div>
									</div>
									<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
									    <span class="icon-prev" aria-hidden="true"></span>
									    <span class="sr-only">Previous</span>
									</a>
									<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
									    <span class="icon-next" aria-hidden="true"></span>
									    <span class="sr-only">Next</span>
									</a>
								</div>
							</div>
						<!-- /Portfolio Carousel -->
					</div>
				</div>
			</div>
		<!-- /Accordion -->

		<!-- JavaScript plugins -->

			<!-- jQuery script-->
				<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
			<!-- /jQuery script -->

			<!-- Tether script -->
				<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha256-/5pHDZh2fv1eZImyfiThtB5Ag4LqDjyittT7fLjdT/8=" crossorigin="anonymous"></script>
			<!-- /Tether script -->

			<!-- Bootstrap script -->
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
			<!-- /Bootstrap script -->

			<!-- Google Analytics -->
				<script>
				  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

				  ga('create', 'UA-84234707-3', 'auto');
				  ga('send', 'pageview');

				</script>
			<!-- /Google Analytics -->

		<!-- /JavaScript plugins -->

		<!-- Facebook SDK for JavaScript snippet -->
		<script>
		  window.fbAsyncInit = function() {
		    FB.init({
		      appId      : '561430954040905',
		      xfbml      : true,
		      version    : 'v2.7'
		    });
		  };

		  (function(d, s, id){
		     var js, fjs = d.getElementsByTagName(s)[0];
		     if (d.getElementById(id)) {return;}
		     js = d.createElement(s); js.id = id;
		     js.src = "//connect.facebook.net/en_US/sdk.js";
		     fjs.parentNode.insertBefore(js, fjs);
		   }(document, 'script', 'facebook-jssdk'));
		</script>
		<!-- /Facebook SDK for JavaScript snippet -->

		<!-- IP Trace -->
			<script type='text/javascript'>
			 _gaq.push(['_setCustomVar', 1, 'IP', '<?=$ip;?>', 1]);
			</script>
		<!-- /IP Trace -->
	</body>

	<footer>
		<!-- Breadcrumbs -->
			<nav class="breadcrumb">
			  <a class="breadcrumb-item" href="https://schillingenterprises.github.io/Gavin-Schilling-Marketing/html/Marketing-Campaigns.html">Marketing Campaigns</a>
			</nav>
		<!-- /Breadcrumbs -->

		<!-- Copyright -->
			<div>
				<small>&copy;2016 <a href="https://www.facebook.com/optimal.leader">Schilling Enterprises</a></small>
			</div>
		<!-- /Copyright -->

		<!-- Facebook Like -->
			<div
				class="fb-like"
				data-share="true"
				data-width="450"
				data-show-faces="true">
			</div>
		<!-- /Facebook Like -->
	</footer>

</html>