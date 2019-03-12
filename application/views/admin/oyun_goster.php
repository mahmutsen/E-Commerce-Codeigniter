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
				<li><a href="#">Oyun: <?=$veri[0]->Id?></a></li>
			</ul>
			
			
							<fieldset>
							  
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Adı</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->adi?>" id="disabledInput1" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Kategori</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->kategori?>" id="disabledInput2" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Platform</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->platform_id?>" id="disabledInput3" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
							  <!--<div class="control-group">
								<label class="control-label" for="disabledInput">Açıklama</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>-->
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Alış Fiyatı</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->afiyat?>" id="disabledInput4" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Stok Durumu</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->sdurum?>" id="disabledInput5" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
							  <div class="control-group">
								<div class="box span5">
								<div class="box-header" data-original-title>
								<h2><i class="halflings-icon white list"></i><span class="break"></span>Açıklamalar</h2>
								</div>
								<div class="box-content">
								<dl>
								<dt>Kısa Açıklama</dt>
									<dd><?=$veri[0]->kisa_aciklama?>.</dd>
								<dt>Uzun Açıklama</dt>
									<dd><?=$veri[0]->aciklama?></dd>
								</dl>            
								</div>
								</div>
							  </div>
							</fieldset>
						  
	
			</div><!--/.fluid-container-->
	
			<!-- end: Content -->
	<?php 
		$this->load->view('admin/_footer');
	?>
			