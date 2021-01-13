<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
				</div>
			</div>
		</div>
		<div id="beli" class="section secondary-section">
<div class='container'>
<h2 style="text-align: center; color:black;">Siamang Ticket Solution</h2>
<h3 style="color: black;">Ticket Information</h3>

<div class="rows">
	
	<!-- <div id="beli" class="section secondary-section"> -->
            
			<div style="margin:16px 0px 16px 0px">
		<table style="color:black" class="table table-bordered table-striped">
        <thead>
        <tr>
    	<th>No</th>
    	<th>Nama</th>
    	<th>Nama Acara</th>
		<th>Tanggal Acara</th>
		<th>Alamat Acara</th>
		<th>Waktu Acara</th>
    	<th>Jumlah</th>
		<th>Total</th>
    	</tr> 
    	</thead>
    
    	<tbody>
    		<tr>
    			<td>
    				<?php echo $start =1; ?>
    			</td>
				<td>
					<?php echo $pembelian->nama; ?>
				</td>
				<td>
					<?php echo $pembelian->nama_acara; ?>
				</td>
				<td>
					<?php echo $pembelian->tgl_acara; ?>
				</td>
				<td>
					<?php echo $pembelian->alamat_acara; ?>
				</td>
				<td>
					<?php echo $pembelian->waktu_acara; ?>
				</td>
				<td>
				<?php echo $pembelian->jumlah; ?>	
				</td>
				<td>
				<?php echo $pembelian->total; ?>
				</td>
			</tr>
			</tbody>
		</table>
		<div class="container"> 
		<div class="title">
					<h1><?php echo $pembelian->nama_acara?></h1>
					<p>Tunjukkan tiket ini sebagai bukti pembayaran yang sah</p>
			</div>
				</div>
	</div>
<!-- </div> -->
</div>
</body>
<script>
	window.print();
</script>