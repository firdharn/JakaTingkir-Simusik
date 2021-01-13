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
                       Edit Admin
                    </header>
                    <div class="panel-bod table-responsive">
                    <div class="position-left">
                    <div class="panel-body">
                    <div class="row">

        <form role="form" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/admin/update_action/<?php echo $id; ?>" method="post" id="select">
       </div>
       

          <div class="form-group">
            <label for="varchar">Username <?php echo form_error('username') ?></label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" required="" />
        </div>
      
        <div class="form-group">
            <label for="varchar">Password <?php echo form_error('password') ?></label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" required="" />
        </div>
      
	   
	    <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" id="gambar" name="gambar">
        </div>

        

	    <!-- <input type="hidden" name="id_acara" value="<?php echo $id_acara; ?>" /> --> 
        <button type="submit" class="btn btn-primary"><div class="fa fa-check">Update</button> 
        <a href="<?php echo site_url('admin/data_admin') ?>" class="btn btn-default">Cancel</a>
    </div>
    </form>
       </section>
</section>
</div>