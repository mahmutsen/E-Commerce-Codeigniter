<?php 
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?>
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?=base_url()?>admin/Home">Anasayfa</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Mesajlar</a></li>
			</ul>
			
			<?php if($this->session->flashdata("sonuc"))
				  { ?>
				    <div class="alert alert-success">
                        İşlem  <a href="#" class="alert-link"><?=$this->session->flashdata("sonuc")?></a>
                    </div>
			<?php } ?>
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Mesajlar</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table">
						  <thead>
							  <tr>
								  <th>Ip</th>
								  <th>Adı Soyadı</th>
								  <th>E-mail</th>
								  <th>Tel</th>
								  <th>Konu</th>
								  <th>Mesaj</th>
								  <th>Durum</th>
								  <th>Tarih</th>
							  </tr>
						  </thead>   
						  <tbody>
						  <?php 
						  foreach ($veri as $rs)
						  {
						  ?>
							<tr>
								<td><?=$rs->IP?></td>
								<td><?=$rs->adsoy?></td>
								<td><?=$rs->email?></td>
								<td><?=$rs->tel?></td>
								<td class="center"><?=$rs->konu?></td>
								<td class="center"><?=$rs->mesaj?></td>
								<td class="center"><?=$rs->durum?></td>
								<td class="center"><?=$rs->tarih?></td>
								
								<td class="center">
									<a class="btn btn-success" href="<?=base_url()?>admin/Mesajlar/view/<?=$rs->Id?>">
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-danger" href="<?=base_url()?>admin/Mesajlar/delete/<?=$rs->Id?>"onclick="return confirm('Silmek istediğinize eminmisiniz?')">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>						
							<?php
						  }
						  ?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			
			
       

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
<?php 
$this->load->view('admin/_footer');

?>