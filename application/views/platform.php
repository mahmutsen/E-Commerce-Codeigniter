
        <div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="<?=base_url()?>">Anasayfa</a></li>
                    <li>URUNLER</li>
					<li class="active"><?=$platadi->adi?></li>
                </ol>
            </div>
        </div>
        <div class="products-gallery">
           <div class="container">
               <div class="col-md-9 grid-gallery">
				<?php
				
				foreach($veriler as $rs)
				{ ?>
                    <div class="col-md-4 grid-stn simpleCart_shelfItem">
                         <!-- normal -->
                            <div class="ih-item square effect3 bottom_to_top">
                                <div class="bottom-2-top">
                        <div class="img"><img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="/" width="200" height="250"></div>
                                <div class="info">
                                    <div class="pull-left styl-hdn">
                                        <h3><?=$rs->adi?></h3>
                                    </div>
                                    <div class="pull-right styl-price">
                                        <p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price"><?=$rs->sfiyat?></span></a></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div></div>
                            </div>
                        <!-- end normal -->
                        <div class="quick-view">
                            <a href="<?=base_url()?>home/urun_detay/<?=$rs->Id?>">Incele</a>
                        </div>
                    </div>
				<?php
				} ?>
				
                    
            <div class="clearfix"></div>
                </div>
               
        </div>
        