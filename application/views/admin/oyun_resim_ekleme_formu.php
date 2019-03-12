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
				<li><a href="#">Resim Ekleme</a></li>
			</ul>
			<?php if($this->session->flashdata("sonuc"))
				  { ?>
				    <div class="alert alert-success">
                        İşlem  <a href="#" class="alert-link"><?=$this->session->flashdata("sonuc")?></a>
                    </div>
			<?php } ?>
			<h3><?=$veri[0]->adi?></h3>
			<?php
				if($veri[0]->resim!=NULL)
				{?>
				<img height="100" src="<?=base_url()?>uploads/<?=$veri[0]->resim?>">
				<?php
				}
				?>
			<?php echo form_open_multipart(base_url().'/admin/Oyunlar/resim_upload/'.$veri[0]->Id);?>

			<input type="file" name="userfile" size="20" />

			<br /><br />

			<input type="submit" value="upload" />

			</form>

			</div><!--/.fluid-container-->
	
			<!-- end: Content -->
	<?php 
		$this->load->view('admin/_footer');
	?>
			