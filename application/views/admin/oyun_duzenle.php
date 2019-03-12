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
				<li><a href="#">Oyun Düzenle:<?=$veri[0]->Id?></a></li>
			</ul>
			
			<div class="box-content">
						<form class="form-horizontal"action="<?=base_url()?>admin/Oyunlar/guncellekaydet/<?=$veri[0]->Id?>" method="post">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Oyun Adı</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="adi" value="<?=$veri[0]->adi?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="selectError">Kategori</label>
								<div class="controls">
								  <select id="selectError" data-rel="chosen"name="kategori">
									<option value="<?=$veri[0]->kategori?>"><?=$veri[0]->katadi?></option>
									<?php
									foreach($kategoriler as $rs){
									?>
									<option value="<?=$rs->Id?>"><?=$rs->adi?></option>
									<?php 
									}?>
								  </select>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="selectError">Platform</label>
								<div class="controls">
								  <select id="selectError2" data-rel="chosen"name="platform">
									<option value="<?=$veri[0]->platform_id?>"><?=$veri[0]->platadi?></option>
									<?php
									foreach($platform as $rs){
									?>
									<option value="<?=$rs->Id?>"><?=$rs->adi?></option>
									<?php 
									}?>
								  </select>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Kısa Açıklama</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput2" type="text" name="kaciklama"value="<?=$veri[0]->kisa_aciklama?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Keywords</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput4" type="text" name="keywords"value="<?=$veri[0]->keywords?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Alış Fiyatı</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput5" type="text" name="afiyat"value="<?=$veri[0]->afiyat?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Satış Fiyatı</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput6" type="text" name="sfiyat"value="<?=$veri[0]->sfiyat?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Adet</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput7" type="text" name="adet"value="<?=$veri[0]->adet?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Çıkış Yılı</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput8" type="text" name="cikis_yili"value="<?=$veri[0]->cikis_yili?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="selectError">Stok Durumu</label>
								<div class="controls">
								  <select id="selectError3" data-rel="chosen"name="sdurum">
									<option><?=$veri[0]->sdurum?></option>
									<option>Beklemede</option>
									<option>Tukendi</option>
									<option>Stok Var</option>
								  </select>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="textarea">Açıklama</label>
								<script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
								<div class="controls">
								<textarea name="aciklama" id="editor1" rows="10" cols="80">
									<?=$veri[0]->aciklama?>
								</textarea>
								<script>
									CKEDITOR.replace( 'aciklama' );
								</script>
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Guncelle</button>
								<a class="btn btn-danger" href="<?=base_url()?>admin/Oyunlar">Iptal</a>
							  </div>
							</fieldset>
						  </form>
					
					</div>

			</div><!--/.fluid-container-->
	
			<!-- end: Content -->
	<?php 
		$this->load->view('admin/_footer');
	?>
			