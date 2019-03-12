	<?php 
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
	?>
	<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?=base_url()?>/admin/Home">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Müşteri: <?=$veri[0]->Id?></a></li>
			</ul>
			
			
							<fieldset>
							  
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Ad Soyad</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->adi?>" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="disabledInput">E-mail</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->email?>" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Yetki</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->yetki?>" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Durum</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->durum?>" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Adres</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->adres?>" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Tel</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->telefon?>" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Tarih</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->tarih?>" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
 
							 
							</fieldset>
						  
	
			</div><!--/.fluid-container-->
	
			<!-- end: Content -->
	<?php 
		$this->load->view('admin/_footer');
	?>
			