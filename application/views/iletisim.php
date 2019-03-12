		<div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="<?=base_url()?>">Anasayfa</a></li>
                    <li class="active">İletisim</li>
                </ol>
            </div>
        </div>
        <div class="shop-grid">
            <div class="container">
				<div class="col-md-9 grid-gallery">
				<div class="control-group">
					<label class="control-label" for="disabledInput">Adres</label>
					<div class="controls">
					  <?=$veri[0]->adres?>/<?=$veri[0]->sehir?>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="disabledInput">Tel</label>
					<div class="controls">
					  <input class="input-xlarge disabled" value="<?=$veri[0]->tel?>" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="disabledInput">Fax</label>
					<div class="controls">
					  <input class="input-xlarge disabled" value="<?=$veri[0]->fax?>" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="">
					</div>
				</div>
				</div>
					<?=$veri[0]->iletisim?>
				
			
        <div class="clearfix"></div>
			<div class="contact-content">
                    
                    <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96305.41383438902!2d28.977689018631672!3d41.0352272996395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac826d524c9f1%3A0xc14f7612337b7f38!2zw5xza8O8ZGFyL0lzdGFuYnVs!5e0!3m2!1str!2str!4v1502562283447" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
			
        </div>
        