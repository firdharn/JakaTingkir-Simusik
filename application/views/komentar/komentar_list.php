<section id="main-content">
     <section class="wrapper">
      <div class="table-agile-info">
        <div class="panel panel-default">
          <div class="panel-heading">
           DATA KOMENTAR
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
            </div>            
            <div class="col-md-12">
                        
        </div>
         <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
            <tr>
        <th>Id Komentar </th>
		<th>Nama</th>
		<th>Email</th>
		<th>Komentar</th>
		<th>Action</th>
            </tr> <?php 
                            $no = 1;
                            foreach($komentar as $data){
                                echo '
                        </thead>
                        <tbody>
                            <tr class="odd gradeX">
                                <td>'.$no.'</td>
                                <td>'.$data->nama.'</td>
                                <td>'.$data->email.'</td>                                
                                <td>'.$data->komentar.'</td>
                                <td>
                                    
                                    <a href="'.base_url().'index.php/komentar/delete/'.$data->id_komentar.'" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                           
                    
                            ';
                            $no++;
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