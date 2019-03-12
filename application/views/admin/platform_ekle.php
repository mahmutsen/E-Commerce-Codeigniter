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
				<li><a href="#">Platform Ekleme</a></li>
			</ul>
			
					<div class="box-content">
						<form class="form-horizontal"action="<?=base_url()?>admin/Platform/eklekaydet" method="post">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Ust Id</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="ust_id">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Adı</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="adi">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Açıklama</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="aciklama">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Keywords</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="keywords">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Resim</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="resim">
								</div>
							  </div>
							  
							  <div class="control-group">
								<label class="control-label" for="selectError">Durum</label>
								<div class="controls">
								  <select id="selectError1" data-rel="chosen"name="durum">
									<option>Onayli</option>
									<option>Beklemede</option>
									<option>Engelli</option>
								  </select>
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Kaydet</button>
								<a class="btn btn-danger" href="<?=base_url()?>admin/Platform">Iptal</a>
							  </div>
							</fieldset>
						  </form>
					
					</div>
	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
<?php 
$this->load->view('admin/_footer');

?>