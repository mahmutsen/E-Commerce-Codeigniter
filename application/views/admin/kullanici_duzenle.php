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
				<li><a href="#">Kullanıcı Düzenle:<?=$veri[0]->Id?></a></li>
			</ul>
			
			<div class="box-content">
						<form class="form-horizontal"action="<?=base_url()?>admin/Kullanicilar/guncellekaydet/<?=$veri[0]->Id?>" method="post">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Ad Soyad</label>
								<div class="controls">
								  <input class="input-xlarge focused" value="<?=$veri[0]->adsoy?>" id="focusedInput" type="text" name="adsoy">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Şifre</label>
								<div class="controls">
								  <input class="input-xlarge focused" value="<?=$veri[0]->sifre?>" id="focusedInput" type="password" name="sifre">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Email</label>
								<div class="controls">
								  <input class="input-xlarge focused" value="<?=$veri[0]->email?>" id="focusedInput" type="email" name="email">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="selectError">Yetki</label>
								<div class="controls">
								  <select id="selectError" data-rel="chosen" name="yetki">
									<option><?=$veri[0]->yetki?></option>
									<option>Kullanici</option>
									<option>Admin</option>
									<option>Editor</option>
								  </select>
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
			