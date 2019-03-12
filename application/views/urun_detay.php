
<div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="<?=base_url()?>">Anasayfa</a></li>
                    <li><a href="#">Urunler</a></li>
                    <li class="active">Detay</li>
                </ol>
            </div>
        </div>
        <div class="showcase-grid">
            <div class="container">
                <div class="col-md-8 showcase">
                    <div class="flexslider">
                          <ul class="slides">
                            <li data-thumb="<?=base_url()?>uploads/<?=$veri[0]->resim?>">
                                <div class="thumb-image"> <img src="<?=base_url()?>uploads/<?=$veri[0]->resim?>"class="img-responsive"> </div>
                            </li>
							<?php foreach($veriler as $rs)
							{ ?>
                            <li data-thumb="<?=base_url()?>uploads/<?=$rs->resim?>">
                                <div class="thumb-image"> <img src="<?=base_url()?>uploads/<?=$rs->resim?>" class="img-responsive"> </div>
                            </li>
							<?php
							} ?>
                            
                          </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-4 showcase">
                    <div class="showcase-rt-top">
                        <div class="pull-left shoe-name">
                            <h3><?=$veri[0]->adi?></h3>
							<h4>Platform: <?=$veri[0]->platadi?></h4><br>
                            <h4><strong><?=$veri[0]->sfiyat?></strong><i>TL</i></h4>
							
                        </div>
                        <div class="pull-left rating-stars">
                            <ul>
								<li><a href="#" class="active"><span class="glyphicon glyphicon-star star-stn" aria-hidden="true"></span></a></li>
								<li><a href="#" class="active"><span class="glyphicon glyphicon-star star-stn" aria-hidden="true"></span></a></li>
								<li><a href="#" class="active"><span class="glyphicon glyphicon-star star-stn" aria-hidden="true"></span></a></li>
								<li><a href="#"><span class="glyphicon glyphicon-star star-stn" aria-hidden="true"></span></a></li>
								<li><a href="#"><span class="glyphicon glyphicon-star star-stn" aria-hidden="true"></span></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
					<?php if($this->session->flashdata("mesaj"))
							{ ?>
							<div class="alert alert-success">
								<br><a href="#" class="alert-link"><?=$this->session->flashdata("mesaj")?></a>
							</div>
							<?php 
							} ?>
                    <hr class="featurette-divider">
					<form action="<?=base_url()?>Home/sepete_ekle/<?=$veri[0]->Id?>" method="post">
                    <div class="shocase-rt-bot">
                        <div class="float-qty-chart">
                        <ul>
							<li class="qty">
                                <h4>Miktar</h4>
                                <select class="form-control qnty-chrt"name="miktar">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                  <option>6</option>
                                  <option>7</option>
                                </select>
								<br>(<b>Stokda:</b><?=$veri[0]->adet?> adet)
                            </li>
							<li></li>
                        </ul>
                        <div class="clearfix"></div>
                        </div>
                        <ul>
                            <li class="ad-2-crt simpleCart_shelfItem">
                                <button type="submit"><i class="btn item_add">Sepete Ekle</i></button>
                               
                            </li>
                        </ul>
                    </div>
					</form>
                    <div class="showcase-last">
                        <h3>Hakkinda</h3>
                        <ul>
                            <li><?=$veri[0]->kisa_aciklama?></li>
						</ul>
                    </div>
                </div>
        <div class="clearfix"></div>
            </div>
        </div>
        
        <div class="specifications">
            <div class="container">
              <h3>Urun Detay</h3> 
                <div class="detai-tabs">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills tab-nike" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Aciklama</a></li>
                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Yorumlar</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                    <p><?=$veri[0]->aciklama?></p> 
                    </div>
                    <div role="tabpanel" class="tab-pane" id="messages">
                        The images represent actual product though color of the image and product may slightly differ.    
                    </div>
                    </div>
                </div>
            </div>
        </div>
        
        