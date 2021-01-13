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
                        Data Admin
                    </header>
                    <div class="panel-bod table-responsive">
                    <div class="position-left">
                    <div class="panel-body">
                    <div class="row">

        <form role="form" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/admin/simpan" method="post" id="select">
       </div>
      
	   <div class="form-group">
            <label for="varchar">Username</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" required="" />
        </div>

	    <div class="form-group">
            <label for="varchar">Password </label>
            <div class='input-group time' id='timepicker'>
                <input type='password' class="form-control input-lg" id="password" name="password" placeholder="Username"/ required="">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-password">
                    </span>
                </span>
            </div>
        </div>
	   
	    <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" id="gambar" name="gambar" required="">
        </div>

        

	   <!--  <input type="hidden" name="id" value="<?php echo $id; ?>" />  -->
        <button type="submit" class="btn btn-primary"><div class="fa fa-check">Create</button> 
        <a href="<?php echo site_url('admin/data_admin') ?>" class="btn btn-default">Cancel</a>
    </div>
    </form>
       </section>
</section>
</div>