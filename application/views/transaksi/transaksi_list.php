<section id="main-content">
     <section class="wrapper">
      <div class="table-agile-info">
        <div class="panel panel-default">
          <div class="panel-heading">
           DATA Transaksi
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

                <?php echo anchor(site_url('Transaksi/form_transaksi'),' Create', 'class="btn btn-primary"'); ?>
           
             </div>            
            <div class="col-md-12">
                        
        </div>
         <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
    <th>No</th>
    <th>Nama Lengkap</th>
		<th>Nama Acara </th>
		<th>Jumlah</th>
    <th>Harga</th>
		<th>Total</th>
    <th>Mode Pembayaran</th>
		<th>Status</th>
		<th>Aksi</th>
    </tr> 
    </thead>
    <tbody>
             <?php 
                            $start = 1;
                            foreach($transaksi as $data){

                            ?>

                            <tr>
                               
                                <td><?php echo $start++; ?></td>
                                <td><?php echo $data->nama; ?></td>
                                <td><?php echo $data->nama_acara; ?></td>                                
                                <td><?php echo $data->jumlah; ?></td>
                                <td><?php echo $data->harga; ?></td>
                                <td><?php echo $data->total; ?></td>
                                <td><?php echo $data->mode_pembayaran; ?></td>
                                <td>
                                  <?php 
                                    if ($data->status == "0") {
                                      echo '<a href="#" >belum bayar</a>';
                                    } else if($data->status == "1") {
                                      echo '<a href="#" >sudah bayar</a>';
                                    }
                                    
                                  ?>
                                </td>
                                <td>
                                  <?php 
                                  if ($data->status == "0") {
                                      echo '
                                  <a href="'.base_url('index.php/admin/approve_payment/'.$data->id_transaksi).'" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Tandai Dibayar</a>';
                                    } else if($data->status == "1") {
                                      echo '<a href="'.base_url('index.php/admin/cancel_payment/'.$data->id_transaksi).'" class="btn btn-warning btn-sm"><i class="fa fa-hourglass"></i> Tandai Belum Dibayar</a>';
                                    }

                                    ?>
                                    |
                                    <a href="<?php echo base_url();?>index.php/transaksi/delete/<?php echo $data->id_transaksi;?>" class="btn btn-danger"><div class="fa fa-trash"> </div></a>
                                </td>
                               
                            </tr>  
                        
                        <?php
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