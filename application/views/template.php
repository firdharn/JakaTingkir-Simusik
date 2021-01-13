<!DOCTYPE html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" >
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-responsive.css" >
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.css"> 
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/morris.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/monthly.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/lightbox.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.standalone.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bower_components/bootstrap-timepicker/bootstrap-timepicker.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css" media="screen">
<script src="<?php echo base_url();?>assets/js/jquery2.0.3.min.js"></script>
<script src="<?php echo base_url();?>assets/js/raphael-min.js"></script>
<script src="<?php echo base_url();?>assets/js/morris.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/datatables/dataTables.bootstrap.css">
</head>
<body>

<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="index.html" class="logo">
        SIAMANG
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>

<!--logo end-->
    <!--  notification start -->
   <div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->
        <!-- settings end -->
        <!-- inbox dropdown start-->
        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
        <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                <i class="fa fa-bell-o"></i>
                <span class="badge bg-important"><?php echo $notifikasi_count; ?></span>
            </a>
            <ul class="dropdown-menu extended inbox">
                <li>
                    <p>Notifications</p>
                </li>
                <?php 
                    foreach($notif as $n){
                        ?>   
                            <li>
                                <a href="<?php echo $n->target_link; ?>" class="alert alert-info clearfix">
                                    <div class="noti-info">
                                     <span class="subject">
                                        <span class="from"><?php echo $n->title; ?></span>
                                    </div>
                                </a>
                            </li>
                        <?php
                    }
                ?>
            </ul>
        </li>   

      <!--   <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-important"><?php echo $notifikasi_count; ?></span>
            </a>
            <ul class="dropdown-menu extended inbox">
                <li>
                    <p>Notifications</p>
                </li>
                <?php 
                    foreach($notif as $n){
                        ?>   
                            <li>
                                <a href="<?php echo base_url();?>index.php/admin/data_email" class="alert alert-info clearfix">
                                     <span class="alert-icon"><i class="fa fa-commenting"></i></span>
                                    <div class="noti-info">
                                     <span class="subject">
                                        <span class="from"><?php echo $n->email; ?></span>
                                    </div>
                                </a>
                            </li>
                        <?php
                    }
                ?>
            </ul>
        </li>  --> 
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>
    <!--  notification end -->
<div class="nav notify-row" id="top_menu">
    <!--  notification start --> 
    <div style="color: white;font-size: 25px; padding-left: 230px"> SISTEM INFORMASI ACARA MUSIK MALANG 
    </div>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="<?php echo base_url();?>assets/images/12.png">
                <span class="username">Admin</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="<?php echo base_url() ;?>index.php/admin/logout"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                
                <li class="sub-menu">
                    <a href="<?php echo base_url() ;?>index.php/admin/data_acara">
                        <i class="fa fa-list-ul"></i>
                        <span>List Event</span>
                    </a>
                </li>
                 
                <li class="sub-menu">
                    <a href="<?php echo base_url() ;?>index.php/admin/data_komentar">
                        <i class="fa fa-commenting"></i>
                        <span>Kritik dan Saran</span>
                    </a>
                </li>

                 <li class="sub-menu">
                    <a href="<?php echo base_url() ;?>index.php/admin/data_email">
                        <i class="fa fa-check-circle"></i>
                        <span>Subscriber</span>
                    </a>
                </li>

                 <li class="sub-menu">
                    <a href="<?php echo base_url() ;?>index.php/admin/data_rating">
                        <i class="fa fa-check-circle"></i>
                        <span>Data Komentar Acara</span>
                    </a>
                </li>

                 <li class="sub-menu">
                    <a href="<?php echo base_url() ;?>index.php/admin/data_transaksi">
                        <i class="fa fa-user-plus"></i>
                        <span>Data Transaksi </span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="<?php echo base_url() ;?>index.php/admin/data_admin">
                        <i class="fa fa-user-plus"></i>
                        <span>Lihat Admin</span>
                    </a>
                </li>
              </div>
        <!-- sidebar menu end-->
    </div>
</aside>

 <?php 
            $this->load->view($main_view);
        ?>

		<div class="footer" style="max-height: 1000px">
 <div class="wthree-copyright">
   <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
 </div>
</div>
<!-- / footer -->
</section>

<!--main content end-->
</section>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo base_url();?>assets/js/scripts.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="<?php echo base_url();?>assets/js/jquery.scrollTo.js"></script>
<script src="<?php echo base_url();?>assets/css/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>assets/css/datatables/datatables.bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
<script src="<?php echo base_url();?>assets/bower_components/bootstrap-datetimepicker/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script src="<?php echo base_url();?>assets/bower_components/bootstrap-datetimepicker/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script>
  $(function (){
    $("#example1").DataTable();
    $('#datetimepicker11').datepicker({
               /* daysOfWeekDisabled: [0, 6],*/
                format: 'yyyy/mm/dd'
    });
     $('#timepicker').timepicker({
      showInputs: false
    });
    $('#datetimepicker1').datepicker({
                format: 'yyyy/mm/dd'
    });
    $('#reservationtime').daterangepicker({
        timePicker: true, 
      timePickerIncrement: 30, 
      format: 'yyyy/mm/dd hh:ii:ss A'});

    $('#datetimepicker10').datetimepicker({
        //language:  'fr',
        format:'yyyy-mm-dd hh:ii:ss ',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
        
});

</script>
</body>
</html>