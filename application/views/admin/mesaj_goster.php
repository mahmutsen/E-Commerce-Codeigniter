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
				<li><a href="#">Mesaj: <?=$veri[0]->Id?></a></li>
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
								  <input class="input-xlarge disabled" value="<?=$veri[0]->IP?>" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Adı Soyadı</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->adsoy?>" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Email</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->email?>" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Tel</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->tel?>" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Konu</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->konu?>" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Mesaj</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->mesaj?>" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div><div class="control-group">
								<label class="control-label" for="disabledInput">Durum</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->durum?>" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Tarih</label>
								<div class="controls">
								  <input class="input-xlarge disabled" value="<?=$veri[0]->tarih?>" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="disabledInput">Notunuz: </label>
								<form action="<?=base_url()?>admin/Mesajlar/guncelle/<?=$veri[0]->Id?>" name="myForm" method="post">
									<textarea class="cleditor" name="adminnotu" rows="5">
										<?=$veri[0]->adminnotu?>
									</textarea>
									<input class="btn btn-default cont-btn" type="submit" value="Gonder " />
								</form>
							  </div>
 
							 
							</fieldset>
						  
	
			</div><!--/.fluid-container-->
	
			<!-- end: Content -->
	<?php 
		$this->load->view('admin/_footer');
	?>
			