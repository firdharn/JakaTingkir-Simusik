   <body>
        <section id="main-content">
        <section class="wrapper">
        <div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
           <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Data Event
                    </header>
                    <div class="panel-bod table-responsive">
                    <div class="position-left">
                    <div class="panel-body">
                    <div class="row">

        <form role="form" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/acara/simpan" method="post" id="select">
       </div>
       
       <div class="form-group">
            <label for="varchar"> Tanggal</label>
            <div class='input-group date' id='datetimepicker11'>
                <input type='text' class="form-control input-lg" id="tgl_acara" name="tgl_acara" placeholder="Tanggal" required="" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar">
                    </span>
                </span>
            </div>
        </div>
          <div class="form-group">
            <label for="varchar">Nama Acara</label>
            <input type="text" class="form-control" name="nama_acara" id="nama_acara" placeholder="Nama Acara" required="" />
        </div>
      
	    <div class="form-group">
            <label for="alamat_acara">Alamat Acara</label>
            <textarea class="form-control" rows="3" name="alamat_acara" id="alamat_acara" placeholder="Alamat Acara" required=""></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">Waktu Acara </label>
            <div class='input-group time' id='timepicker'>
                <input type='time' class="form-control input-lg" id="waktu_acara" name="waktu_acara" placeholder="Waktu"/ required="">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time">
                    </span>
                </span>
            </div>
        </div>
	   
	    <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" id="gambar" name="gambar" required="">
        </div>
	    <div class="form-group">
            <label for="varchar">Genre Id </label>
            <select class="form-control" name="nama_genre" id="nama_genre" required="">
                <option value="pop"> Pop </option>
                <option value="jazz"> Jazz </option>
                <option value="akustik"> Akustik </option>
                <option value="rock"> Rock </option>
            </select>
            
        </div>

        

	    <!-- <input type="hidden" name="id_acara" value="<?php echo $id_acara; ?>" /> --> 
        <button type="submit" class="btn btn-primary"><div class="fa fa-check">Create</button> 
        <a href="<?php echo site_url('acara') ?>" class="btn btn-default">Cancel</a>
    </div>
    </form>
       </section>
</section>
</div>