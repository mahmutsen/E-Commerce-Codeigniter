
        <div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="index.html">Anasayfa</a></li>
                    
                    <li class="active">SEPET</li>
                </ol>
            </div>
        </div>
        <!-- check-out -->
            <div class="check">
                <div class="container">
				<?php 
				$sn=0;
				$top=0;
				foreach($sepet as $rs)
				{
					$sn++;
					$tutar=$rs->oyunfiyat * $rs->miktar;
					$top+=$tutar;
				?>				
                    
                    <div class="col-md-9 cart-items">
                        <h1><?=$rs->oyunad?></h1>
                            
                        <div class="cart-header">
						
							<div class="close2"><span class="glyphicon glyphicon-remove" ><a href="<?=base_url()?>">Kaldır</a></span></div>
                            <div class="cart-sec simpleCart_shelfItem">
							
                                    <div class="cart-item cyc">
                                        <img src="<?=base_url()?>uploads/<?=$rs->oyunres?>"width="100" class="img-responsive" alt=""/>
                                    </div>
                                   <div class="cart-item-info">
                                        <ul class="qty">
                                            <li><p>Ürün Adı :<?=$rs->oyunad?></p></li>
                                            <li><p>Miktar :<?=$rs->miktar?></p></li>
                                            <li><p>Birim Fiyat :<?=$rs->oyunfiyat?>Tl</p></li>
											<li><p>Tutar:<?=$tutar?></p></li>
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
                    <div class="clearfix"> </div>
					<div>
                        <div> <br> </div>
                        <div class="price-details">
                            <h3>Sepet Detayları</h3>
                            <span><?= $sn?> Adet Ürün</span>
                            <span class="total1"><?=$top?></span>
                           				 
                        </div>
                        <hr class="featurette-divider">
                        <ul class="total_price">
                           <li class="last_price"> <h4>TOPLAM TUTAR</h4></li>	
                           <li class="last_price"><span><?=$top?> TL</span></li>
                           <div class="clearfix"> </div>
                        </ul> 
                        <div class="clearfix"></div>
						<br><br><br>
						<?php if($sn>0){
						?>
						<h2>KARGO ADRES BİLGİLERİ</h2>
						
						<form action="<?=base_url()?>home/siparis_tamamla" method="post">
						<hr>
						<h4>Alıcı Adı Soyadı :<input type="text" name="adsoy" value="<?=$musteri[0]->adi?>" /><br><br></h4>
						<h4>Adresi :<input type="text" name="adres" value="<?=$musteri[0]->adres?>" /><br><br></h4>
						<h4>Telefonu :<input type="text" name="tel" value="<?=$musteri[0]->telefon?>" /><br><br></h4>
						<h4>Şehir :<input type="text" name="sehir" value="<?=$musteri[0]->sehir?>" /><br><br></h4>
						<h4>Tutar :<input type="text" name="tutar" readonly value="<?=$top?>" /><br><br></h4>
						<hr>
						<h2>ÖDEME BİLGİLERİ</h2>
						<hr>
						<h4>Kredi Kartı No :<input type="text" name="adi" value="" /><br><br></h4>
						<h4>SKT AY :<input type="text" name="adi" value="" />	SKT YIL :<input type="text" name="adi" value="<?=$musteri[0]->adi?>" /><br><br></h4>
						<h4>Güvenlik Kodu :<input type="text" name="adi" value="" /><br><br></h4>
                        <button class="btn btn-large btn-primary">Siparişi Tamamla</button>
						<?php }
						?>
                    </div>
					
                </div>
				
            </div>
            