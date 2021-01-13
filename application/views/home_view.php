<style>
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Table channel</title>
</head>

<title>Glindar da Jember</title>
<meta name="description" content="">
<meta name="author" content="">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.theme.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/css/sb-admin.css"> -->
<!-- Main css -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>

</head>
<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">

<!-- =========================
     PRE LOADER       
============================== -->
<div class="preloader">

	<div class="sk-rotating-plane"></div>

</div>


<!-- =========================
     NAVIGATION LINKS     
============================== -->
<div class="navbar navbar-fixed-top custom-navbar" role="navigation">
	<div class="container">

		<!-- navbar header -->
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">Glinjar da Jember</a>
		</div>

		<div class="collapse navbar-collapse">

			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo base_url('index.php/utama/')?>" class="smoothScroll">Home</a></li>
				<li><a href="<?php echo base_url('index.php/utama/informasi')?>" class="smoothScroll">Informasi</a></li>
				<li><a href="<?php echo base_url('index.php/utama/opini')?>" class="smoothScroll">Opini</a></li>
				<!-- 
				<li><a href="#register" class="smoothScroll">Register</a></li>
				<li><a href="#venue" class="smoothScroll">Venue</a></li>
				<li><a href="#sponsors" class="smoothScroll">Sponsors</a></li>
				<li><a href="#contact" class="smoothScroll">Contact</a></li> -->
			</ul>

		</div>

	</div>
</div>


<!-- =========================
    INTRO SECTION   
============================== -->
<section id="intro" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<h1 class="wow fadeInUp" data-wow-delay="1.6s"><?php echo $judul;?></h1>
				<!--<a href="#overview" class="btn btn-lg btn-default smoothScroll wow fadeInUp hidden-xs" data-wow-delay="2.3s">LEARN MORE</a>-->
<!-- 				<a href="#register" class="btn btn-lg btn-danger smoothScroll wow fadeInUp" data-wow-delay="2.3s">REGISTER NOW</a>
 -->			</div>


		</div>
	</div>
</section>


<!-- =========================
    OVERVIEW SECTION   
============================== -->

 <section id="overview" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-8 col-sm-6" data-wow-delay="0.6s">
			<h1>Kabupaten Jember</h1>
			<p><b>Jember</b> merupakan kota yang memiliki banyak tempat wisata menarik yang patut dikunjungi. Selain wisata alam dan wisata kuliner, kota ini juga populer dengan wisata air dan pantainya. Pemandangan yang eksotis, sangat sayang jika harus dilewatkan. Nah di dalam website ini akan mengulas apa saja wisata yang ada di Jember.</p>
			<p> Mayoritas penduduk Kabupaten Jember terdiri atas suku Jawa dan Madura, sebagian besar beragama Islam. Terdapat minoritas Suku Osing juga warga Tionghoa. </p>
			<p> Jember memiliki luas 3.293,34 km dengan ketinggian antara 0 - 3.330 mdpl. Iklim Kabupaten Jember adalah tropis dengan kisaran suhu antara 23C - 32C.</p>
			</div>
					
			<!--<div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="0.9s">
				<img src="images/overview-img.jpg" class="img-responsive" alt="Overview">
			</div>-->

		</div>
	</div>
</section> 



<!-- =========================
    DETAIL SECTION   
============================== -->
<section id="detail" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInLeft col-md-4 col-sm-4" data-wow-delay="0.3s">
				<i class="fa fa-cutlery"></i>
				<h3>Wisata Kuliner</h3>
				<p>Selain wisata alam yang meningkat, Jember ternyata juga punya cukup banyak wisata kuliner yang bikin ngiler lho!</p>
			</div>

			<div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.6s">
				<i class="fa fa-pagelines"></i>
				<h3>Wisata</h3>
				<p>Kamu seorang travel-lover? Belum lengkap jika belum mengeksplor wisata jember! </p>
			</div>

			<div class="wow fadeInRight col-md-4 col-sm-4" data-wow-delay="0.9s">
				<i class="fa fa-bed"></i>
				<h3>Penginapan</h3>
				<p>Bukan sekedar wisata, Jember juga menyediakan penginapan yang nyaman dan menarik untuk dikunjungi.</p>
			</div>

		</div>
	</div>
</section>

<!-- =========================
    SPONSORS SECTION   
============================== -->
<section id="sponsors" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow bounceIn col-md-12 col-sm-12">
				<div class="section-title">
					<h2>ARTIKEL</h2>
					<p>Ayo selami informasi menarik tentang Jember!</p>
				</div>
			</div>
				<?php
					$i = 1; 
					
					shuffle($artikel);

					foreach ($artikel as $row) {
						echo '<div class="wow fadeInUp col-md-3 col-sm-6 col-xs-6" data-wow-delay="0.3s">
				<a href="detail/'.$row->id_artikel.'" class="image full"> <img src="'.base_url().'upload/'.$row->foto.'" style = "width: 350px; height: 200px"  class="img-responsive" alt="sponsors"> </a>
				<p>'.$row->judul_artikel.'</p>

				</div>
				'; 

				if ($i++ == 8) break;

					}
				?>
			
		</div>
	</div>
</section>


<!-- =========================
    CONTACT SECTION   
============================== -->
<section id="contact" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-offset-1 col-md-5 col-sm-6" data-wow-delay="0.6s">
				<div class="contact_des">
					<h3>Cerita Jember</h3>
					<p>Selain dapat memberikan informasi mengenai Jember, kamu juga bisa membagikan cerita pengalaman dan foto menarikmu di sini!</p>
					
					<a href="#" class="btn btn-danger">Ceritakan Sekarang</a>
				</div>
			</div>

			
		</div>
	</div>
</section>



<!-- =========================
    SPEAKERS SECTION   
============================== -->
<section id="speakers" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12 wow bounceIn">
				<div class="section-title">
					<h2>Web Developer</h2>
					<p>Deskripsinya yaa</p>
				</div>
			</div>

			<!-- Testimonial Owl Carousel section
			================================================== -->
			<div id="owl-speakers" class="owl-carousel">

				<div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.9s">
					<div class="speakers-wrapper">
					<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Miftakhul Rohmah" data-caption="Some lovely red flowers" data-target="#image-gallery">
						<img src="<?php echo base_url();?>assets/images/1.jpg" class="img-responsive" alt="Short alt text">
						</a>
							<div class="speakers-thumb">
								<h3>Miftakhul Rohmah</h3>
								<h6>UI Designer</h6>
							</div>
					</div>
				</div>

				<div class="item wow fadeInUp col-md-3 col-sm-3 thumb" data-wow-delay="0.6s">
					<div class="speakers-wrapper">
						<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Riski Ananda Widiya Putri" data-caption="
						Nama 	: Riski Ananda Widiya Putri &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						Absen 	: 29 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						NISN	: 

						"  data-target="#image-gallery">
						<img src="<?php echo base_url();?>assets/images/2.jpg" class="img-responsive" alt="A alt text">
					</a>
							<div class="speakers-thumb">
								<h3>Riski Ananda WP</h3>
								<h6>Creative Director</h6>
							</div>
					</div>
				</div>

				<div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.9s">
					<div class="speakers-wrapper">
					<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Savina Ramadhani Putri Tatum" data-caption="And if there is money left, my girlfriend will receive this car" data-target="#image-gallery">
						<img src="<?php echo base_url();?>assets/images/3.jpg" class="img-responsive" alt="Another alt text">
						</a>
							<div class="speakers-thumb">
								<h3>Savina Ramadhani Putri T</h3>
								<h6>Web Specialist</h6>
								<!-- Trigger/Open The Modal -->
				<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">See Biodata</button>

<!-- The Modal -->
					</div>
					</div>
				</div>
				</div>
				
			</div>

		</div>
	</div>
</section>


<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="image-gallery-title"></h4>
            </div>
            <div class="modal-body" id="image-gallery-caption">
               
            </div>
            <div class="modal-footer">

                <div class="col-md-2">
                    <button type="button" class="btn btn-primary" id="show-previous-image">Previous</button>
                </div>

                <div class="col-md-8 text-justify" id="image-gallery-caption">
                 
                </div>

                <div class="col-md-2">
                    <button type="button" id="show-next-image" class="btn btn-default">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =========================
    FOOTER SECTION   
============================== -->
<footer>
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<p class="wow fadeInUp" data-wow-delay="0.6s">Copyright &copy; 2017 - Glinjar da Jember</a></p>

				<ul class="social-icon">
					<li><a href="#" class="fa fa-facebook wow fadeInUp" data-wow-delay="1s"></a></li>
					<li><a href="#" class="fa fa-twitter wow fadeInUp" data-wow-delay="1.3s"></a></li>
					<li><a href="#" class="fa fa-dribbble wow fadeInUp" data-wow-delay="1.6s"></a></li>
				<!-- 	<li><a href="#" class="fa fa-behance wow fadeInUp" data-wow-delay="1.9s"></a></li> -->
					<li><a href="#" class="fa fa-google-plus wow fadeInUp" data-wow-delay="2s"></a></li>
				</ul>

			</div>
			
		</div>
	</div>
</footer>



<!-- =========================
     SCRIPTS   
============================== -->
<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.parallax.js"></script>
<script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url();?>assets/js/smoothscroll.js"></script>
<script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
<script src="<?php echo base_url();?>assets/js/custom.js"></script>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div>


</body>
</html>
<script>
	$(document).ready(function(){

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current){
        $('#show-previous-image, #show-next-image').show();
        if(counter_max == counter_current){
            $('#show-next-image').hide();
        } else if (counter_current == 1){
            $('#show-previous-image').hide();
        }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr){
        var current_image,
            selector,
            counter = 0;

        $('#show-next-image, #show-previous-image').click(function(){
            if($(this).attr('id') == 'show-previous-image'){
                current_image--;
            } else {
                current_image++;
            }

            selector = $('[data-image-id="' + current_image + '"]');
            updateGallery(selector);
        });

        function updateGallery(selector) {
            var $sel = selector;
            current_image = $sel.data('image-id');
            $('#image-gallery-caption').text($sel.data('caption'));
            $('#image-gallery-title').text($sel.data('title'));
            $('#image-gallery-image').attr('src', $sel.data('image'));
            disableButtons(counter, $sel.data('image-id'));
        }

        if(setIDs == true){
            $('[data-image-id]').each(function(){
                counter++;
                $(this).attr('data-image-id',counter);
            });
        }
        $(setClickAttr).on('click',function(){
            updateGallery($(this));
        });
    }
});
</script>