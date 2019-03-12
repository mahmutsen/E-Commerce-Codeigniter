	<?php 
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
	?>
	<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?=base_url()?>admin/Home">Anasayfa</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Kategori Düzenle:<?=$veri[0]->Id?></a></li>
			</ul>
			
			<div class="box-content">
						<form class="form-horizontal"action="<?=base_url()?>admin/Kategoriler/guncellekaydet/<?=$veri[0]->Id?>" method="post">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Ust Id</label>
								<div class="controls">
								  <input class="input-xlarge focused" value="<?=$veri[0]->ust_id?>" id="focusedInput" type="text" name="ust_id">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Adı</label>
								<div class="controls">
								  <input class="input-xlarge focused" value="<?=$veri[0]->adi?>" id="focusedInput" type="text" name="adi">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Açıklama</label>
								<div class="controls">
								  <input class="input-xlarge focused" value="<?=$veri[0]->aciklama?>" id="focusedInput" type="text" name="aciklama">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">keywords</label>
								<div class="controls">
								  <input class="input-xlarge focused" value="<?=$veri[0]->keywords?>" id="focusedInput" type="text" name="keywords">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">resim</label>
								<div class="controls">
								  <input class="input-xlarge focused" value="<?=$veri[0]->resim?>" id="focusedInput type="text" name="keywords">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="selectError">Durum</label>
								<div class="controls">
								  <select id="selectError1" data-rel="chosen"name="durum">
									<option><?=$veri[0]->durum?></option>
									<option>Onayli</option>
									<option>Beklemede</option>
									<option>Engelli</option>
								  </select>
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Güncelle</button>
								<button class="btn">İptal</button>
							  </div>
							</fieldset>
						  </form>
					
					</div>

			</div><!--/.fluid-container-->
	
			<!-- end: Content -->
	<?php 
		$this->load->view('admin/_footer');
	?>
			