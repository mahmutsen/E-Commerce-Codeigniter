
        <div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="index.html">Anasayfa</a></li>
                    
                    <li class="active">Siparişlerim</li>
                </ol>
            </div>
        </div>
        <!-- check-out -->
            <div class="check">
                <div class="container">
				<?php if($this->session->flashdata("mesaj"))
				  { ?>
				    <div class="alert alert-success">
                        İşlem  <a href="#" class="alert-link"><?=$this->session->flashdata("mesaj")?></a>
                    </div>
				<?php } ?>
				<?php 
				$sn=0;
				$top=0;
				foreach($siparislerim as $rs)
				{
					$sn++;
					$tutar=0
				?>				
                    
                    <div class="col-md-9 cart-items">
                        <h2><?=$rs->tarih?></h2>
                            
                        <div class="cart-header">
						
							<div class="close2"><span class="glyphicon glyphicon-view" ><a href="<?=base_url()?>Home/siparis_detay/<?=$rs->Id?>">Göster</a></span></div>
                            <div class="cart-sec simpleCart_shelfItem">
							
                                    
                                   <div class="cart-item-info">
                                        <ul class="qty">
                                            <li><p>S.No :<?=$sn?></p></li>
                                            <li><p>Tarih :<?=$rs->tarih?></p></li>
											<li><p>Tutar :<?=$rs->tutar?></p></li>
                                            <li><p>Durum :<?=$rs->durum?></p></li>
											
                                        </ul>
                                        </br>
                                   </div>
                                   <div class="clearfix"></div>
							
                              </div>
                         </div>
                        </br></br></br>
                    </div>
					
					<?php 
							} ?>
                    
					
                </div>
				
            </div>
            