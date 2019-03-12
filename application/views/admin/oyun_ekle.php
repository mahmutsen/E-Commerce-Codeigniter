<?php 
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?>
<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?=base_url()?>admin/Home">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Oyun Ekleme</a></li>
			</ul>
			
					<div class="box-content">
						<form class="form-horizontal"action="<?=base_url()?>admin/Oyunlar/eklekaydet" method="post">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Oyun Adı</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="adi">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="selectError">Kategori</label>
								<div class="controls">
								  <select id="selectError" data-rel="chosen"name="kategori">
									
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
								  <input class="input-xlarge focused" id="focusedInput2" type="text" name="kaciklama">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="textarea">Açıklama</label>
								<script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
								<div class="controls">
								<textarea name="aciklama" id="editor1" rows="10" cols="80">
									
								</textarea>
								<script>
									CKEDITOR.replace( 'aciklama' );
								</script>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Keywords</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput4" type="text" name="keywords">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Alış Fiyatı</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput5" type="text" name="afiyat">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Satış Fiyatı</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput6" type="text" name="sfiyat">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Adet</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput7" type="text" name="adet">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Çıkış Yılı</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput8" type="text" name="cikis_yili">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="selectError">Stok Durumu</label>
								<div class="controls">
								  <select id="selectError3" data-rel="chosen"name="sdurum">
									<option>Beklemede</option>
									<option>Tukendi</option>
									<option>Stok Var</option>
								  </select>
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Kaydet</button>
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