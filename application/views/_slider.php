<div class="header-end">
            <div class="container">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
				  
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>
				  <!-- Wrapper for slides -->
				
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="<?=base_url()?>uploads/<?=$slider[0]->resim?>" alt="...">
                        <div class="carousel-caption car-re-posn">
                            <h4><a href="<?=base_url()?>home/urun_detay/<?=$slider[0]->Id?>"><?=$slider[0]->adi?></a></h4>
							
							<h5><?=$slider[0]->kisa_aciklama?></h5>
                            <span class="color-bar"></span>
							
                        </div>
                    </div>
                    <div class="item">
                      <img src="<?=base_url()?>uploads/<?=$slider[1]->resim?>" alt="...">
                        <div class="carousel-caption car-re-posn">
                            <h4><a href="<?=base_url()?>home/urun_detay/<?=$slider[1]->Id?>"><?=$slider[1]->adi?></a></h4>
                            <h5><?=$slider[1]->kisa_aciklama?></h5>
                            <span class="color-bar"></span>
                        </div>
                    </div>
                    <div class="item">
                      <img src="<?=base_url()?>uploads/<?=$slider[2]->resim?>" alt="...">
                        <div class="carousel-caption car-re-posn">
                            <h4><a href="<?=base_url()?>home/urun_detay/<?=$slider[2]->Id?>"><?=$slider[2]->adi?></a></h4>
                            <h5><?=$slider[2]->kisa_aciklama?></h5>
                            <span class="color-bar"></span>
                        </div>
                    </div>
                  </div>
					
                  <!-- Controls -->
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left car-icn" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right car-icn" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>