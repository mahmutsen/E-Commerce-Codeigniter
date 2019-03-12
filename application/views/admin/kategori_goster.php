	<?php 
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
	?>
	<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?=base_url()?>/admin/Home">Anasayfa</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Kategori: <?=$veri[0]->Id?></a></li>
			</ul>
			
			
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Id</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->Id?>" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Ust Id</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->ust_id?>" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Adı</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->adi?>" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Açıklama</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->aciklama?>" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Keywords</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->keywords?>" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Resim</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->resim?>" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Durum</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->durum?>" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
 
							 
							</fieldset>
						  
	
			</div><!--/.fluid-container-->
	
			<!-- end: Content -->
	<?php 
		$this->load->view('admin/_footer');
	?>
			