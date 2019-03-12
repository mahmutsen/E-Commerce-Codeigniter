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
				<li><a href="#">Sipariş: <?=$veri[0]->Id?></a></li>
			</ul>
			<?php if($this->session->flashdata("mesaj"))
					{ ?>
				    <div class="alert alert-success">
                        
						<br><a href="#" class="alert-link"><?=$this->session->flashdata("mesaj")?></a>
                    </div>
				<?php 
					} ?>
			
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="disabledInput">IP</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->ip?>" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Adı Soyadı</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->adsoy?>" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Müşteri Id</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->musteri_id?>" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Tel</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->tel?>" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Adres</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->adres?>" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Şehir</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->sehir?>" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Tutar</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->tutar?>" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Kargo Firma</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->kargofirma?>" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="disabledInput">Kargo No</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->kargono?>" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="disabledInput">Tarih</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->tarih?>" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="disabledInput">Admin Açıklaması: </label>
								<form action="<?=base_url()?>admin/Siparisler/guncelle/<?=$veri[0]->Id?>" name="myForm" method="post">
									<textarea class="cleditor" name="admin_aciklama" rows="5">
										<?=$veri[0]->admin_aciklama?>
									</textarea>
									<div class="control-group">
										<label class="control-label">Durum</label>
										<div class="controls">
										  <select name="durum">
											<option><?=$veri[0]->durum?></option>
											<option value="Yeni">Yeni</option>
											<option value="Onayli">Onaylandı</option>
											<option value="Kargoda">Kargolandı</option>
										  </select>
										</div>
									</div>
									<input class="btn btn-default cont-btn" type="submit" value="Gonder " />
								</form>
							  </div>
 
							 
							</fieldset>
						  
	
			</div><!--/.fluid-container-->
	
			<!-- end: Content -->
	<?php 
		$this->load->view('admin/_footer');
	?>
			