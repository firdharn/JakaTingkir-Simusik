<style>
	#myInput {
	background-image: url('<?php echo base_url();?>assets/search.png'); /* Add a search icon to input */
	background-position: 10px 8px; /* Position the search icon */
	background-repeat: no-repeat; /* Do not repeat the icon image */
	width: 100%; /* Full-width */
	font-size: 16px; /* Increase font-size */
	padding: 10px 20px 12px 40px; /* Add some padding */
	border: 1px solid #ddd; /* Add a grey border */
	
	}
</style>

<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset=utf-8>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>SIAMANG</title>
		<!-- Load Roboto font -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<!-- Load css styles -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/home/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/home/css/bootstrap-responsive.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/home/css/style.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/home/css/pluton.css" />
		<!--[if IE 7]>
			<link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
		<![endif]-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/home/css/jquery.cslider.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/home/css/jquery.bxslider.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/home/css/animate.css" />
		<!-- Fav and touch icons -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>assets/home/images/ico/apple-touch-icon-144.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>assets/home/images/ico/apple-touch-icon-114.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>assets/home/images/apple-touch-icon-72.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>assets/home/images/ico/apple-touch-icon-57.png">
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<link rel="shortcut icon" href="images/ico/favicon.ico">
	</head>
	
	<body>
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container">
					<a href="#" class="brand">
						<img src="<?php echo base_url();?>assets/home/images/siamang.png" width="120" height="40" alt="Logo" />
						<!-- This is website logo -->
					</a>
					<!-- Navigation button, visible on small resolution -->
					<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<i class="icon-menu"></i>
					</button>
					<!-- Main navigation -->
					<div class="nav-collapse collapse pull-right">
						<ul class="nav" id="top-navigation">
							<li class="active"><a href="#home">Home</a></li>
							<li><a href="#service">Services</a></li>
							<li><a href="#portfolio">Event</a></li>
							<li><a href="#clients">Comments</a></li>
							<li><a href="#newsletter">Subscriber</a></li>
							<li><a href="#about">About</a></li>
						</ul>
					</div>
					<!-- End main navigation -->
				</div>
			</div>
		</div>
		<!-- Start home section -->
	   <div id="home">
			<!-- Start cSlider -->
			<div id="da-slider" class="da-slider">
				<div class="triangle"></div>
				<!-- mask elemet use for masking background image -->
				<div class="mask"></div>
				<!-- All slides centred in container element -->
				<div class="container">
					<!-- Start first slide -->
					<div class="da-slide">
						<h2 class="fittext2"> Welcome to Siamang </h2>
						<div class="da-img">
							<img src="<?php echo base_url();?>assets/home/images/tiket_afgan.jpg" width="320">
						</div>
					</div>
					<!-- End first slide -->
					<!-- Start second slide -->
					<div class="da-slide">
						<h2>TEMUKAN YANG KAMU CARI</h2>
						<p> </p>
						<div class="da-img">
							<img src="<?php echo base_url();?>assets/home/images/tiket_trio.jpg" width="320">
						</div>
					</div>
					<!-- End second slide -->
					<!-- Start third slide -->
					<div class="da-slide">
						<h2>TINGGALKAN ULASAN</h2>
						<p></p>
						<div class="da-img">
							<img src="<?php echo base_url();?>assets/home/images/tiket_tulus.jpg" width="320">
						</div>
					</div>
					<!-- Start third slide -->
					<!-- Start cSlide navigation arrows -->
					<div class="da-arrows">
						<span class="da-arrows-prev"></span>
						<span class="da-arrows-next"></span>
					</div>
					<!-- End cSlide navigation arrows -->
				</div>
			</div>
		</div>
		<!-- End home section -->
		<!-- Service section start -->
	   <div class="section primary-section" id="service">
			<div class="container">
				<!-- Start title section -->
				<div class="title">
					<h1>What We Do?</h1>
					<!-- Section's title goes here -->
					<p>Membantu masyarakat dalam mencari informasi mengenai konser musik yang berada di Kota Malang, memberikan update terbaru tentang musik, mempermudah masyarakat dalam pemesanan tiket konser musik yang ada di Kota Malang</p>
					<!--Simple description for section goes here. -->
				</div>
				<div class="row-fluid">
					<div class="span4">
						<div class="centered service">
							<div class="circle-border zoom-in">
								<img class="img-circle" src="<?php echo base_url();?>assets/home/images/info.png" alt="service 1">
							</div>
							<h3>To give information</h3>
							<!-- <p>Memberikan informasi update tentang konser musik di daerah Malang</p> -->
						</div>
					</div>
					<!-- <div class="span4">
						
					</div> -->
					<div class="span4">
						<div class="centered service">
							<div class="circle-border zoom-in">
								<img class="img-circle" src="<?php echo base_url();?>assets/home/images/update.png" alt="service 3">
							</div>
							<h3>Up to date</h3>
							<!-- <p>Memberikan berita terupdate seputar konser musik di Malang</p> -->
						</div>
					</div>

					<div class="span4">
						<div class="centered service">
							<div class="circle-border zoom-in">
								<img class="img-circle" src="<?php echo base_url();?>assets/home/images/transaksi.png" alt="service 3">
							</div>
							<h3>Transaction</h3>
							<!-- <p>Mempermudah masyarakat dalam pemesanan tiket konser musik di Kota Malang</p> -->
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- Service section end -->
		<!-- Portfolio section start -->
		<div class="section secondary-section " id="portfolio">
			<div class="triangle"></div>
			<div class="container">
				
				  <div class="input-group col-md-12">
			
			<div class="container">
			<h3>Pencarian</h3>
			<hr>
			<form action="<?php echo base_url('index.php/search/search_keyword'); ?>" method="POST">
			   <input style="height: 50px" type="text" id="myInput" name="keyword" placeholder="  Search for names.."/>
			 <span class="input-group-btn">
							<i class="glyphicon glyphicon-search"></i>
					</span>
			</form>
		</div>

		
			</div>
				 
				<?php $this->load->view($konten); ?>


			</div>
			</div>
		</div>
		<!-- Portfolio section end -->
		<!-- About us section start -->
		
		<!-- About us section end -->
		<!-- Client section start -->
		<!-- Client section start -->
		
		<div id="clients">
			<div class="section primary-section">
				<div class="triangle"></div>
				<div class="container">
					<div class="title">
						<h1>Berikan Kritik dan Saranmu!</h1>
						<p>Kalian bisa memberikan saran dan kritik dibawah ini yaa!</p>
					</div>
					
					<div class="container">
						<div class="row-fluid">
							<div class="span5 contact-form centered">
								<h3>Say Hello</h3>
								<?php $message = $this->session->flashdata('message');
						if (!empty($message)) 
							echo "<div class='alert alert-info'>$message</div>"
						?>
								<div id="successSend" class="alert alert-success invisible">
									<strong>Well done!</strong>Your message has been sent.</div>
								<div id="errorSend" class="alert alert-error invisible">There was an error.</div>
								<form id="contact-form" method="post" action="<?php echo base_url(); ?>index.php/komentar/simpan">
									<div class="control-group">
										<div class="controls">
											<input class="span12" type="text" id="nama" name="nama" placeholder="* Your name..." required />
											<div class="error left-align" id="err-name">Please enter name.</div>
										</div>
									</div>
									<div class="control-group">
										<div class="controls">
											<input class="span12" type="email" name="email" id="email" placeholder="* Your email..." required/>
											<div class="error left-align" id="err-email">Please enter valid email adress.</div>
										</div>
									</div>
									<div class="control-group">
										<div class="controls">
											<textarea class="span12" name="komentar" id="komentar" placeholder="* Comments..." required></textarea>
											<div class="error left-align" id="err-comment">Please enter your comment.</div>
										</div>
									</div>
									<div class="control-group">
										<div class="controls">
											<input type="submit" value="Send Message" name="submit" class="message-btn"/>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<p class="testimonial-text">
						"Perfection is Achieved Not When There Is Nothing More to Add, But When There Is Nothing Left to Take Away"
					</p>
				</div>
			</div>
		</div>
		
		<div class="section third-section">
			<div class="container centered">
				<div class="sub-section">
					<div class="title clearfix">
						<div class="pull-left">
							<h3>Guest Star</h3>
						</div>
						<ul class="client-nav pull-right">
							<li id="client-prev"></li>
							<li id="client-next"></li>
						</ul>
					</div>
					<ul class="row client-slider" id="clint-slider">
						<li>
							<a href="">
								<img src="<?php echo base_url();?>assets/home/images/clients/afgan.jpg" alt="client logo 1">
							</a>
						</li>
						<li>
							<a href="">
								<img src="<?php echo base_url();?>assets/home/images/clients/tulus.jpg" alt="client logo 2">
							</a>
						</li>
						<li>
							<a href="">
								<img src="<?php echo base_url();?>assets/home/images/clients/rosa.jpg" alt="client logo 3">
							</a>
						</li>
						<li>
							<a href="">
								<img src="<?php echo base_url();?>assets/home/images/clients/raisa.jpg" alt="client logo 4">
							</a>
						</li>
						<li>
							<a href="">
								<img src="<?php echo base_url();?>assets/home/images/clients/sos.jpg" alt="client logo 5">
							</a>
						</li>
						<li>
							<a href="">
								<img src="<?php echo base_url();?>assets/home/images/clients/pt.jpg" alt="client logo 6">
							</a>
						</li>
						<li>
							<a href="">
								<img src="<?php echo base_url();?>assets/home/images/clients/virgoun.jpg" alt="client logo 7">
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Price section start -->

		<!-- Price section end -->
		<!-- Newsletter section start -->
		<div id="newsletter" class="section third-section">
			<div class="container newsletter">
				<div class="sub-section">
					<div class="title clearfix">
						<div class="pull-left">
							<h3>Newsletter</h3>
						   
						</div>
					</div>
				</div>
				<div id="success-subscribe" class="alert alert-success invisible">
					<strong>Well done!</strong>You successfully subscribet to our newsletter.</div>
				<div class="row-fluid">
					<div class="span5">
						<h4>Ingin mendapatkan lebih banyak infomasi tentang acara musik di Malang?</h4>
						<h2>Kirim email-mu disini yaa!</h2>
					</div>
					<div class="span7">

						<form class="inline-form" method="post" action="<?php echo base_url(); ?>index.php/email/simpan">
							
							<input type="email" name="email" id="email" class="span8" placeholder="Enter your email" required />
							<input type="submit" id="submit" name="submit" class="button button-sp" value="Subscribe">  </button>
							 <?php $pesan = $this->session->flashdata('pesan');
						if (!empty($pesan)) 
							echo "<div>$pesan</div>"
						?>
						</form>

					</div>

				</div>
			</div>
		</div>
		<!-- Newsletter section end -->
		<!-- Contact section start -->
			
				</div>
				<h3>Skills</h3>
				<div class="row-fluid">
					<div class="span6">
						<ul class="skills">
							<li>
								<span class="bar" data-width="80%"></span>
								<h3>Graphic Design</h3>
							</li>
							<li>
								<span class="bar" data-width="95%"></span>
								<h3>Html & Css</h3>
							</li>
							<li>
								<span class="bar" data-width="68%"></span>
								<h3>jQuery</h3>
							</li>
							<li>
								<span class="bar" data-width="70%"></span>
								<h3>Wordpress</h3>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- Contact section edn -->
		<!-- Footer section start -->
		<div class="footer">
			<p>&copy; 2018 Theme by SIAMANG</p>
		</div>
		<!-- Footer section end -->
		<!-- ScrollUp button start -->
		<div class="scrollup">
			<a href="#">
				<i class="icon-up-open"></i>
			</a>
		</div>
		<!-- ScrollUp button end -->
		<!-- Include javascript -->
		<script src="<?php echo base_url();?>assets/home/js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/home/js/jquery.mixitup.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/home/js/bootstrap.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/home/js/modernizr.custom.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/home/js/jquery.bxslider.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/home/js/jquery.cslider.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/home/js/jquery.placeholder.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/home/js/jquery.inview.js"></script>
		<!-- Load google maps api and call initializeMap function defined in app.js -->
		<script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
		<!-- css3-mediaqueries.js for IE8 or older -->
		<!--[if lt IE 9]>
			<script src="js/respond.min.js"></script>
		<![endif]-->
		<script type="text/javascript" src="<?php echo base_url();?>assets/home/js/app.js"></script>
		<script>
			<?php if($jumpto){?>

			$('document').ready(function(){             
				$(document).scrollTop( $("#portfolio").offset().top );  
			});
				<?php } ?>
		</script>
	</body>
</html>
<script>

</script>