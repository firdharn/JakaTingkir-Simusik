<section id="main-content">
     <section class="wrapper">
      <div class="table-agile-info">
        <div class="panel panel-default">
          <div class="panel-heading">
           DATA EVENT
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

                <?php echo anchor(site_url('admin/form_acara'),' Create', 'class="btn btn-primary"'); ?>
           
             </div>            
            <div class="col-md-12">
                        
        </div>
         <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
    <th>Id Acara</th>
		<th>Nama Acara</th>
		<th>Tgl Acara</th>
		<th>Alamat Acara</th>
		<th>Waktu Acara</th>
    <th>Genre Id</th>
		<th>Gambar</th>
		<th>Action</th>
    </tr> 
    </thead>
    <tbody>
             <?php 
                            $start = 1;
                            foreach($acara as $data){


                                echo '
                     
                            <tr>
                               
                               <td>'.$start++.'</td>
                                <td>'.$data->nama_acara.'</td>
                                <td>'.$data->tgl_acara.'</td>                                
                                <td>'.$data->alamat_acara.'</td>
                                <td>'.$data->waktu_acara.'</td>
                                <td>'.$data->nama_genre.'</td>
                                 <td><img src="'.base_url().'uploads/'.$data->gambar.'" style="width:100px"></td>
                                <td>
                                    <a href="'.base_url().'index.php/acara/update/'.$data->id_acara.'" class="btn btn-success"><div class="fa fa-pencil"> </div></a>
                                    <a href="'.base_url().'index.php/acara/delete/'.$data->id_acara.'" class="btn btn-danger"><div class="fa fa-trash"> </div></a>
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