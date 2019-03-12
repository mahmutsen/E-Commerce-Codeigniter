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
				<li><a href="#">Resim Galerisi Ekleme</a></li>
			</ul>
			<?php if($this->session->flashdata("sonuc"))
				  { ?>
				    <div class="alert alert-success">
                        İşlem  <a href="#" class="alert-link"><?=$this->session->flashdata("sonuc")?></a>
                    </div>
			<?php } ?>
			
			<h3><?=$veri[0]->adi?></h3>
			
			<?php echo form_open_multipart(base_url().'/admin/Oyunlar/galeri_resim_upload/'.$veri[0]->Id);?>

			<input type="file" name="userfile" size="20" />

			<br /><br />

			<input type="submit" value="upload" />

			</form>
			<!-- galeri başlangıç-->
				<div class="row-fluid sortable">
				<div class="box-content">
				<div class="masonry-gallery">				
				<?php
				foreach($veriler as $rs)
				{
				?>
						<div id="image-1" class="masonry-thumb">
						<a style="background:url(<?=base_url()?>uploads/<?=$rs->resim?>)"
						title="Sample Image 1"
						href="<?=base_url()?>uploads/<?=$rs->resim?>">
						<img class="grayscale" src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="Sample Image 1">
						</a>
						<a class="btn btn-danger" href="<?=base_url()?>admin/Oyunlar/resim_delete/<?=$veri[0]->Id?>/<?=$rs->Id?>">Sil</a>
						</div>
				<?php
				}
				?>
				</div>
				</div>
				</div>
			<!-- galeri bitiş-->	
			</div><!--/.fluid-container-->
	
			<!-- end: Content -->
	<?php 
		$this->load->view('admin/_footer');
	?>
			