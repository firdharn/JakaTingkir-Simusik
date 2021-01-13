<section id="main-content">
     <section class="wrapper">
      <div class="table-agile-info">
        <div class="panel panel-default">
          <div class="panel-heading">
           DATA ADMIN
          </div>
          <div class="row">
            <div class="col-xs-12">
                 <?php $message = $this->session->flashdata('message');
                        if (!empty($message)) 
                            echo "<div class='alert alert-info'>$message</div>"
                        ?>
                   <div class="box box-danger" style="padding: 26px">
            <div class="box-body table-responsive">
            <div class="row">
            <div class="col-md-12">
            <div style="padding: 10px">

                <?php echo anchor(site_url('admin/form_admin'),' Create', 'class="btn btn-primary"'); ?>
           
             </div>            
            <div class="col-md-12">
                        
        </div>
         <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
    <th>Id</th>
		<th>Username</th>
		<th>Password</th>
		<th>Gambar</th>
		<th>Action</th>
    </tr> 
    </thead>
    <tbody>
             <?php 
                            $start = 1;
                            foreach($admin as $data){


                                echo '
                     
                            <tr>
                               
                               <td>'.$start++.'</td>
                                <td>'.$data->username.'</td>
                                <td>'.$data->password.'</td>                                
                                <td><img src="'.base_url().'uploads/'.$data->gambar.'" style="width:100px"></td>
                                <td>
                                    <a href="'.base_url().'index.php/admin/update/'.$data->id.'" class="btn btn-success"><div class="fa fa-pencil"> </div></a>
                                    <a href="'.base_url().'index.php/admin/delete/'.$data->id.'" class="btn btn-danger"><div class="fa fa-trash"> </div></a>
                                </td>
                            </tr>
                           
                    
                            ';
                            
                        }
                        ?>
       </tbody>
        </table>
        </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>