<section id="main-content">
     <section class="wrapper">
      <div class="table-agile-info">
        <div class="panel panel-default">
          <div class="panel-heading">
           Jadwal Maintenance DC & CME
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

              <!--   <?php echo anchor(site_url('genre/create'),' Create', '<div class="btn btn-primary"><div class="fa fa-plus" </div></div'); ?>
             -->
            </div>
            <div class="col-md-12">
                        
        </div>
         <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>

        <td>No</td>
        <th>Id Genre</th>
		<th>Nama Genre</th>
		<th>Action</th>
        </thead>
            </tr>

            <?php
            foreach ($genre_data as $genre)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
            <td><?php echo $genre->id_genre ?></td>
			<td><?php echo $genre->nama_genre ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('genre/read/'.$genre->id_genre),'<div class="btn btn-info"> <div class="fa fa-sticky-note-o"> </div></div>'); 
				echo '  '; 
				echo anchor(site_url('genre/update/'.$genre->id_genre),'<div class="btn btn-success"> <div class="fa fa-pencil"> </div></div>'); 
				echo '  '; 
				echo anchor(site_url('genre/delete/'.$genre->id_genre),'<div class="btn btn-danger"> <div class="fa fa-trash"> </div></div>','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
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