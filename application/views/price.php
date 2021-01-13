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
                            <li class="active"><a href="<?php echo base_url();?>index.php/admin/homey">Home</a></li>
                            <li><a href="#price">Price</a></li>
                            <li><a href="<?php echo base_url();?>index.php/pembelian/index">Pembelian</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li><a href="<?php echo base_url();?>index.php/admin/logout_home">LOGOUT</a></a></li>

                        </ul>
                    </div>
                    <!-- End main navigation -->
                </div>
            </div>
        </div>
        <!-- Start home section -->

        <!-- end -->
            <div id="price" class="section third-section">
            <div class="container">
                <div class="title">
                    <h1>Price</h1>
                    <p>
                    <?php $pesan = $this->session->flashdata('pesan');
                        if (!empty($pesan)) 
                            echo "<div class='alert alert-info'>$pesan</div>"
                    ?>
                </p>
                </div>
                
                
                <div class="price-table row-fluid">
                    <?php 
                    foreach ($regular as $p) {
                        # code...
                    ?>
                    <div class="span4 price-column">
                        <h3>Regular</h3>
                        <ul class="list">
                            <li class="price"><?php echo $p->harga; ?></li>
                            <li> <?php echo $p->nama_acara; ?> </li>
                        </ul>
                        <button class="button button-ps" data-toggle="modal" data-target="#modal_reg">BUY</button>
                    </div>
                    <?php 
                        }
                    ?>

                    <?php 
                    foreach ($VIP as $vip) {
                        # code...
                    
                    ?>
                    <div class="span4 price-column">
                        <h3>VIP</h3>
                        <ul class="list">
                            <li class="price"><?php echo $vip->harga; ?></li>
                             <li> <?php echo $vip->nama_acara; ?> </li>
                            
                        </ul>
                        <a href="#" class="button button-ps" data-toggle="modal" data-target="#modal_vip">BUY</a>
                    </div>
                    <?php 
                        }
                    ?>
                    <?php 
                    foreach ($VVIP as $vvip) {
                        
                    ?>
                    <div class="span4 price-column">
                        <h3>VVIP</h3>
                        <ul class="list">
                            <li class="price"><?php echo $vvip->harga; ?></li>
                             <li> <?php echo $vvip->nama_acara; ?> </li>
                            
                        </ul>
                        <a href="#" class="button button-ps" data-toggle="modal" data-target="#modal_vvip">BUY</a>
                    </div>
                    <?php 
                        }
                    ?>
                </div>
                <div class="centered">
                    <p class="price-text" style="color: white;">We Offer Custom Plans. Contact Us For More Info.</p>
                    <a href="#contact" class="button button-ps">Contact Us</a>
                </div>
            </div>
            </div>

        <!--Modal-->
        <div class="modal fade" id="modal_reg" name="modal_reg" tabindex="-1" role="dialog" aria-labelledby="modal_addLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?php echo base_url();?>index.php/transaksi/simpan" method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h4 class="modal-title" style="color: black; font-size: 25px; text-align: center">Pembayaran Regular</h4>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-8">
                        <input type="hidden" name="id_acara" value="<?php echo $p->id_acara; ?>" />
                        <input type="hidden" name="nama_acara" value="<?php echo $p->nama_acara; ?>" />
                        <input type="hidden" name="harga" value="<?php echo $p->harga; ?>" />
                        <input type="hidden" name="id_harga" value="<?php echo $p->id_harga; ?>" />
                        <input type="hidden" name="id" value="<?php echo $id; ?>" />
                        <div style="color: black;" class="form-group">
                            <label style="font-size:15px;" for="varchar">Nama Lengkap</label>
                            <input style="height:40px; width:100%" type="text" class="lg form-control" name="nama" id="nama" placeholder="Nama" required="" />
                        </div>

                        <div class="form-group">
                            <label style="color:black; font-size:15px;">Jumlah</label>
                            <input style="height:40px; width:100%" type="number" name="jumlah" class="lg form-control" required/>
                        </div>
                            <div style="color: black;" class="form-group ">
                            <label for="varchar" style="font-size:15px">Mode Pembayaran </label>
                            <select style="height:40px; width:100%;" class="form-control" name="mode_pembayaran" id="mode_pembayaran" required="">
                                <option value="">-- Pilih Mode Pembayaran --</option>
                                <option value="BNI"> BNI </option>
                                <option value="BRI"> BRI </option>
                                <option value="BCA"> BCA </option>
                                <option value="Mandiri"> Mandiri </option>
                            </select>
                            
                        
                    </div>
                </div>
            </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                        <button type="submit" name='submit' value="true" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

            <div class="modal fade" id="modal_vip" name="modal_vip" tabindex="-1" role="dialog" aria-labelledby="modal_addLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?php echo base_url();?>index.php/transaksi/simpan" method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h4 class="modal-title" style="color: black; font-size: 25px; text-align: center">Pembayaran VIP</h4>
                    </div>
                      <div class="modal-body">
                        <div class="col-md-8">
                        <input type="hidden" name="id_acara" value="<?php echo $p->id_acara; ?>" />
                        <input type="hidden" name="nama_acara" value="<?php echo $p->nama_acara; ?>" />
                        <input type="hidden" name="harga" value="<?php echo $p->harga; ?>" />
                        <input type="hidden" name="id_harga" value="<?php echo $p->id_harga; ?>" />
                        <input type="hidden" name="id" value="<?php echo $id; ?>" />
                        <div style="color: black;" class="form-group">
                            <label style="font-size:15px;" for="varchar">Nama Lengkap</label>
                            <input style="height:40px; width:100%" type="text" class="lg form-control" name="nama" id="nama" placeholder="Nama" required="" />
                        </div>

                        <div class="form-group">
                            <label style="color:black; font-size:15px;">Jumlah</label>
                            <input style="height:40px; width:100%" type="number" name="jumlah" class="lg form-control" required/>
                        </div>
                            <div style="color: black;" class="form-group ">
                            <label for="varchar">Mode Pembayaran </label>
                            <select class="form-control" name="mode_pembayaran" id="mode_pembayaran" required="">
                                <option value="">-- Pilih Mode Pembayaran --</option>
                                <option value="BNI"> BNI </option>
                                <option value="BRI"> BRI </option>
                                <option value="BCA"> BCA </option>
                                <option value="Mandiri"> Mandiri </option>
                            </select>
                            
                        
                    </div>
                </div>
            </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                         <button type="submit" name='submit' value="true" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

            <div class="modal fade" id="modal_vvip" name="modal_vvip" tabindex="-1" role="dialog" aria-labelledby="modal_addLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?php echo base_url();?>index.php/transaksi/simpan" method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h4 class="modal-title" style="font-size:25px; text-align: center; color:black;">Pembayaran VVIP</h4>
                    </div>
                     <div class="modal-body">
                        <div class="col-md-8">
                        <input type="hidden" name="id_acara" value="<?php echo $p->id_acara; ?>" />
                        <input type="hidden" name="nama_acara" value="<?php echo $p->nama_acara; ?>" />
                        <input type="hidden" name="harga" value="<?php echo $p->harga; ?>" />
                        <input type="hidden" name="id_harga" value="<?php echo $p->id_harga; ?>" />
                        <input type="hidden" name="id" value="<?php echo $id; ?>" />
                        <div style="color: black;" class="form-group">
                            <label style="font-size:15px;" for="varchar">Nama Lengkap</label>
                            <input style="height:40px; width:100%" type="text" class="lg form-control" name="nama" id="nama" placeholder="Nama" required="" />
                        </div>

                       <div class="form-group">
                            <label style="color:black; font-size:15px;">Jumlah</label>
                            <input style="height:40px; width:100%" type="number" name="jumlah" class="lg form-control" required/>
                        </div>
                            <div style="color: black;" class="form-group ">
                            <label for="varchar">Mode Pembayaran </label>
                            <select class="form-control" name="mode_pembayaran" id="mode_pembayaran" required="">
                                <option value="">-- Pilih Mode Pembayaran --</option>
                                <option value="BNI"> BNI </option>
                                <option value="BRI"> BRI </option>
                                <option value="BCA"> BCA </option>
                                <option value="Mandiri"> Mandiri </option>
                            </select>
                            
                        
                    </div>
                </div>
            </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                         <button type="submit" name='submit' value="true" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

        </div>

            <div id="contact">
            <div class="section primary-section">
                <div class="triangle"></div>
                <div class="container">
                    <div class="title">
                        <h1>Berikan Kritik dan Saranmu!</h1>
                        <p>Kalian bisa memberikan saran dan kritik dibawah ini yaa!</p>
                    </div>
                    
                    <div class="container">
                        <div class="row-fluid">
                          <div class="span6 contact-form centered">
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