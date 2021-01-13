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

                <?php echo anchor(site_url('admin/form_rating'),' Create', 'class="btn btn-primary"'); ?>
           
             </div>            
            <div class="col-md-12">
                        
        </div>
         <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
    <th>Id</th>
		<th>Users</th>
    <th>E-Mail</th>
		<th>Komentar</th>
		<th>Acara</th>
		<th>Action</th>
    </tr> 
    </thead>
    <tbody>
             <?php 
                            $start = 1;
                            foreach($rating as $data){


                                echo '
                     
                            <tr>
                               
                               <td>'.$start++.'</td>
                               <td>'.$data->nama.'</td>
                                <td>'.$data->email.'</td>
                                <td>'.$data->komentar.'</td>                                
                                <td>'.$data->nama_acara.'</td>
                                <td>
                                    <a href="'.base_url().'index.php/rating/delete/'.$data->id_rating.'" class="btn btn-danger"><div class="fa fa-trash"> </div></a>
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