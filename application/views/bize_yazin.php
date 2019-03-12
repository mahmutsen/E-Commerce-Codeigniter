		<div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="<?=base_url()?>">Anasayfa</a></li>
                    <li class="active">Bize Yazın</li>
                </ol>
            </div>
        </div>
        <!-- contact -->
        <div class="contact">
            <div class="container">
                <h3>Bize Yazın</h3>
				<?php if($this->session->flashdata("mesaj"))
					{ ?>
				    <div class="alert alert-success">
                        
						<br><a href="#" class="alert-link"><?=$this->session->flashdata("mesaj")?></a>
                    </div>
				<?php 
					} ?>
                <div class="contact-content">
				
				<script>
				function validateForm() {
					var a = document.forms["myForm"]["adsoy"].value;
					var b = document.forms["myForm"]["tel"].value;
					var c = document.forms["myForm"]["email"].value;
					var d = document.forms["myForm"]["konu"].value;
					var e = document.forms["myForm"]["mesaj"].value;
					if (a == "") {
						alert("Lütfen Ad Soyadınızı girin!");
						return false;
					}else if(b=="") {
						alert("Lütfen Telefon numaranızı girin!");
						return false;
					}else if(c=="") {
						alert("Lütfen E-Mail Adresinizi girin!");
						return false;
					}else if(d=="") {
						alert("Lütfen Konu girin!");
						return false;
					}else if(e=="") {
						alert("Lütfen Mesajınızı girin!");
						return false;
					}
				} 
				</script>
				
                    <form action="<?=base_url()?>Home/mesaj_ekle" name="myForm" onsubmit="return validateForm()" method="post">
                        <p style="color:red;">Adınız Soyadınız:</p><input type="text" name="adsoy" class="textbox"><br>
						<p style="color:red;">Telefon Numaranız:<input type="number" name="tel" class="textbox"><br>
                        <p style="color:red;">Email Adresiniz:<input type="email" name="email" class="textbox"><br>
						<p style="color:red;">Konu:<input type="text" name="konu" class="textbox"><br>
                            <div class="clear"> </div>
                        <div>
                            <p style="color:red;">Mesaj:<textarea name="mesaj"></textarea><br>
                        </div>	
                       <div class="submit"> 
                            <input class="btn btn-default cont-btn" type="submit" value="Gonder " />
                      </div>
                    </form>
                   
                </div>
            </div>
        </div>
	   <!--contact-->