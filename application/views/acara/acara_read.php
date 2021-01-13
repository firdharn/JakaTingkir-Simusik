<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Acara Read</h2>
        <table class="table">
	    <tr><td>Nama Acara</td><td><?php echo $nama_acara; ?></td></tr>
	    <tr><td>Tgl Acara</td><td><?php echo $tgl_acara; ?></td></tr>
	    <tr><td>Alamat Acara</td><td><?php echo $alamat_acara; ?></td></tr>
	    <tr><td>Waktu Acara</td><td><?php echo $waktu_acara; ?></td></tr>
	    <tr><td>Lokasi Id</td><td><?php echo $lokasi_id; ?></td></tr>
	    <tr><td>Gambar</td><td><?php echo $gambar; ?></td></tr>
	    <tr><td>Genre Id</td><td><?php echo $genre_id; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('acara') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>