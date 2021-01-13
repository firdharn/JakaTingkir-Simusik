<div id="single-project">

                    <?php foreach($acara as $a)
                        { ?>
                    <div id="slidingDiv<?php echo $a->id_acara; ?>" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="<?php echo base_url('uploads/');?><?php echo $a->gambar; ?>" alt="project 1" />
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3><?php echo $a->nama_acara; ?></h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div>
                                        <span>Nama</span> <label> <?php echo $a->nama_acara; ?></label></div>
                                    <div>
                                        <span>Tanggal</span><label> <?php echo $a->tgl_acara; ?></label></div>
                                    <div>
                                        <span>Waktu</span><?php echo $a->waktu_acara; ?></div>
                                    <div>
                                        <span>Alamat</span><?php echo $a->alamat_acara; ?></div>
                                </div>
                               <!--  <p>Berikan Rating untuk acara ini!</p> -->
                            </div>

                            <div class="container">
                        
                                <h3>Berikan Komentarmu!</h3>
                                <?php $message = $this->session->flashdata('message');
                        if (!empty($message)) 
                            echo "<div class='alert alert-info'>$message</div>"
                        ?>
                                
                                <form id="contact-form" method="post" action="<?php echo base_url(); ?>index.php/komentar/simpan">
                                    <div class="control-group">
                                        <div class="controls">
                                            <input class="span4" type="text" id="nama" name="nama" placeholder="* Your name..." required />
                                            <div class="error left-align" id="err-name">Please enter name.</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <input class="span4" type="email" name="email" id="email" placeholder="* Your email..." required/>
                                            <div class="error left-align" id="err-email">Please enter valid email adress.</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <textarea class="span4" name="komentar" id="komentar" placeholder="* Comments..." required></textarea>
                                            <div class="error left-align" id="err-comment">Please enter your comment.</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <input type="submit" value="Send Message" name="submit" class="message-btn"/>
                                        </div>
                                    </div>
                                </form>
                           
                        
                    </div>
                        </div>
                    </div>
                    <?php }?>
                <!-- Start details for portfolio project 1 -->
                    <ul id="portfolio-grid" class="thumbnails row">
                        <?php foreach($acara as $a)
                        { ?>
                            
                            <li class="span4 mix web">
                            <div class="thumbnail">
                                <img src="<?php echo base_url();?>uploads/<?php echo $a->gambar; ?>" alt="project 1">
                                <a href="#single-project" class="more show_hide" rel="#slidingDiv<?php echo $a->id_acara; ?>">
                                    <h3><?php echo $a->nama_acara; ?></h3>
                                </a>
                                <div class="mask"></div>
                            </div>
                        </li>
                        <?php }?>
                    </ul>
                </div>
            </div>