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
                        EDIT ACARA
                    </header>
                    <div class="panel-bod table-responsive">
                    <div class="position-left">
                    <div class="panel-body">
                    <div class="row">

    <form role="form" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/acara/update_action/<?php echo $id_acara; ?>" method="post" id="select">
       </div>
       
       <div class="form-group">
            <label for="varchar"> Tanggal <?php echo form_error('tgl_acara') ?></label>
            <div class='input-group date' id='datetimepicker11'>
                <input type='text' class="form-control input-lg" id="tgl_acara" name="tgl_acara" placeholder="Tanggal" value="<?php echo $tgl_acara; ?>" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar">
                    </span>
                </span>
            </div>
        </div>
          <div class="form-group">
            <label for="varchar">Nama Acara <?php echo form_error('nama_acara') ?></label>
            <input type="text" class="form-control" name="nama_acara" id="nama_acara" placeholder="Nama Acara" value="<?php echo $nama_acara; ?>" />
        </div>
      
	    <div class="form-group">
            <label for="alamat_acara">Alamat Acara <?php echo form_error('alamat_acara') ?></label>
            <textarea class="form-control" rows="3" name="alamat_acara" id="alamat_acara" placeholder="Alamat Acara"><?php echo $alamat_acara; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">Waktu Acara<?php echo form_error('waktu_acara') ?> </label>
            <div class='input-group time' id='timepicker'>
                <input type='time' class="form-control input-lg" id="waktu_acara" name="waktu_acara" placeholder="Waktu" value="<?php echo $waktu_acara; ?>"/>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time">
                    </span>
                </span>
            </div>
        </div>
	   
	    <div class="form-group">
            <label for="varchar">Genre Id <?php echo form_error('nama_genre') ?></label>
            <select class="form-control" name="nama_genre" id="nama_genre" value="<?php echo $nama_genre; ?>">
                <option value="pop"> Pop </option>
                <option value="jazz"> Jazz </option>
                <option value="akustik"> Akustik </option>
                <option value="rock"> Rock </option>
            </select>
            
        </div>
    
	    <!-- <input type="hidden" name="id_acara" value="<?php echo $id_acara; ?>" /''> --> 
        <input type="submit" class="btn btn-primary" value="update"/> 
        <a href="<?php echo site_url('acara') ?>" class="btn btn-default">Cancel</a>
    </div>
    </form>
       </section>
</section>
</div>