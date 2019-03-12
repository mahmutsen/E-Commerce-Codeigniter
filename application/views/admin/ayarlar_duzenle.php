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
				<li><a href="#">Ayarlar Düzenle:<?=$veri[0]->Id?></a></li>
			</ul>
			
			<div class="box-content">
						<form class="form-horizontal"action="<?=base_url()?>admin/Ayarlar/guncellekaydet/<?=$veri[0]->Id?>" method="post">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Ayar Adı</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="adi" value="<?=$veri[0]->adi?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Keywords</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="keywords" value="<?=$veri[0]->keywords?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Marka Adı</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="name" value="<?=$veri[0]->name?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">SmptpServer</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="smtpserver"value="<?=$veri[0]->smtpserver?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">SmtpPort</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="smtpport"value="<?=$veri[0]->smtpport?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">SmtpEmail</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="smtpemail"value="<?=$veri[0]->smtpemail?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Şifre</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="password"value="<?=$veri[0]->password?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Adres</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="adres"value="<?=$veri[0]->adres?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Şehir</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="sehir" value="<?=$veri[0]->sehir?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Tel</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="tel" value="<?=$veri[0]->tel?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Fax</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="fax" value="<?=$veri[0]->fax?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Email</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="email" value="<?=$veri[0]->email?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="textarea">Hakkımızda</label>
								<script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
								<div class="controls">
								<textarea name="hakkimizda" id="editor1" rows="10" cols="80">
									<?=$veri[0]->hakkimizda?>
								</textarea>
								<script>
									// Replace the <textarea id="editor1"> with a CKEditor
									// instance, using default configuration.
									CKEDITOR.replace( 'hakkimizda' );
								</script>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="textarea">İletişim</label>
								<script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
								<div class="controls">
								<textarea name="iletisim" id="editor1" rows="10" cols="80">
									<?=$veri[0]->iletisim?>
								</textarea>
								<script>
									// Replace the <textarea id="editor1"> with a CKEditor
									// instance, using default configuration.
									CKEDITOR.replace( 'iletisim' );
								</script>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Facebook</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="facebook" value="<?=$veri[0]->facebook?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Twitter</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="twitter" value="<?=$veri[0]->twitter?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Instagram</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="instagram" value="<?=$veri[0]->instagram?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Pinterest</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="pinterest" value="<?=$veri[0]->pinterest?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="textarea">Açıklama</label>
							  <div class="controls">
								<textarea class="cleditor" name="aciklama" rows="5">
									<?=$veri[0]->aciklama?>
								</textarea>
							  </div>
							  </div>
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Guncelle</button>
								<a class="btn btn-danger" href="<?=base_url()?>admin/Ayarlar">Iptal</a>
							  </div>
							</fieldset>
						  </form>
					
					</div>

			</div><!--/.fluid-container-->
	
			<!-- end: Content -->
	<?php 
		$this->load->view('admin/_footer');
	?>
			