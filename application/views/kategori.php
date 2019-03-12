
        <div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="<?=base_url()?>">Anasayfa</a></li>
                    <li>URUNLER</li>
					<li class="active"><?=$katadi->adi?></li>
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
               <div class="col-md-3 grid-details">
                    <div class="grid-addon">
                        <section  class="sky-form">
					 <div class="product_right">
						 <h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Alt Kategoriler</h4>
						 <?php
						foreach($altkat as $rs)
						{ ?>
						 <div class="tab1">
							 <ul class="place">								
								 <li class="sort"><a href="<?=base_url()?>home/kategori/<?=$rs->Id?>"><?=$rs->adi?></li>
								 
									<div class="clearfix"> </div>
							  </ul>
							 
					      </div>						  
						<?php
						} ?>				  
						  <!--script-->
						<script>
							$(document).ready(function(){
								$(".tab1 .single-bottom").hide();
								$(".tab2 .single-bottom").hide();
								$(".tab3 .single-bottom").hide();
								$(".tab4 .single-bottom").hide();
								$(".tab5 .single-bottom").hide();
								
								$(".tab1 ul").click(function(){
									$(".tab1 .single-bottom").slideToggle(300);
									$(".tab2 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
								})
								$(".tab2 ul").click(function(){
									$(".tab2 .single-bottom").slideToggle(300);
									$(".tab1 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
								})
								$(".tab3 ul").click(function(){
									$(".tab3 .single-bottom").slideToggle(300);
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})
								$(".tab4 ul").click(function(){
									$(".tab4 .single-bottom").slideToggle(300);
									$(".tab5 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})	
								$(".tab5 ul").click(function(){
									$(".tab5 .single-bottom").slideToggle(300);
									$(".tab4 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})	
							});
						</script>
						<!-- script -->					 
				 </section>
				 	
                    </div>
               </div>
            <div class="clearfix"></div>
            </div> 
        </div>
        