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
							<li><a href="#beli">Pembelian</a></li>
							<li><a href="<?php echo base_url();?>index.php/admin/logout_home">Logout</a></li>
						</ul>
					</div>
					<!-- End main navigation -->
				</div>
			</div>
		</div>
		
		<div id="beli" class="section secondary-section">
            <div class="container">
			<div style="margin:16px 0px 16px 0px"> 
			<table style="color:black" class="table table-bordered table-striped">
        <thead>
        <tr>
    	<th>No</th>
		<th>Nama Lengkap</th>
		<th>Nama Acara</th>
		<th>Jumlah</th>
    	<th>Total</th>
		<th>Status</th>
		<th>Aksi</th>
    	</tr> 
    </thead>
    <tbody>
             <?php 
                            $start = 1;
                            foreach($pembelian as $data){


                                echo '
                     
                            <tr>
                               
                               <td>'.$start++.'</td>
                                <td>'.$data->nama.'</td>
                                <td>'.$data->nama_acara.'</td>
                                <td>'.$data->jumlah.'</td>
                                <td>'.$data->total.'</td>
                                <td>'
                                ;
                                  if ($data->status == "0") {
                                      echo 'belum bayar';
                                    } else if($data->status == "1") {
                                      echo 'sudah bayar';
                                    }
                                    
                                  echo '
                                </td>
                                <td>';
                                 if($data->status == "1") {
                                      echo '<a href="'.base_url('index.php/pembelian/tiket/'.$data->id_transaksi).'" class="btn btn-primary btn-sm"><i class="fa fa-print"></i> Cetak Tiket</a>';
                                    }
                                    echo '

                                  
                                </td>
                            </tr>
                           
                    
                            ';
                            
                        }
                        ?>
       </tbody>
        </table>
    </div>
		</div>
	</body>
	</html>
