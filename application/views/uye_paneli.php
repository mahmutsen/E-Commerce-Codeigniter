
        <div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="products.hml">Products</a></li>
                    <li class="active">CART</li>
                </ol>
            </div>
        </div>
        <!-- check-out -->
            <div class="check">
                <div class="container">	 
                    <div class="col-md-3 cart-total">
                        <ul>
						<h2>Hesap Ayarları</h2>
							<li><a href="<?=base_url()?>Home/uyepanel"><i class="halflings-icon user"></i> Profil</a></li>
							<li><a href="<?=base_url()?>Home/siparislerim"><i class="halflings-icon user"></i> Siparişlerim</a></li>
							<li><a href="<?=base_url()?>Login/log_out"><i class="halflings-icon off"></i> Çıkış</a></li>
						</ul>
                    </div>
                    <div class="col-md-9 cart-items">
                        <h2>Üye Bilgileri</h2>
						<?php if($this->session->flashdata("sonuc"))
							{ ?>
							<div class="alert alert-success">
								<br><a href="#" class="alert-link"><?=$this->session->flashdata("sonuc")?></a>
							</div>
							<?php 
							} ?>
							<div class="box-content">
						<form class="form-horizontal"action="<?=base_url()?>Home/guncellekaydet" method="post">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Ad Soyad</label>
								<div class="controls">
								  <input class="input-xlarge focused" value="<?=$veri2[0]->adi?>" id="focusedInput" type="text" name="adi">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Şifre</label>
								<div class="controls">
								  <input class="input-xlarge focused" value="<?=$veri2[0]->sifre?>" id="focusedInput" type="password" name="sifre">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Email</label>
								<div class="controls">
								  <input class="input-xlarge focused" value="<?=$veri2[0]->email?>" id="focusedInput" type="email" name="email">
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Güncelle</button>
								<button class="btn">İptal</button>
							  </div>
							</fieldset>
						  </form>
					
					</div>
                        
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            