<div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="index.html">HOME</a></li>
                    <li class="active">Giris</li>
                </ol>
            </div>
        </div>
        <!--signup-->
        <!-- login-page -->
        <div class="login">
            <div class="container">
                <div class="login-grids">
                    <div class="col-md-6 log">
                             <h3>Giriş</h3>
                             <div class="strip"></div>
							<?php if($this->session->flashdata("login_hata"))
							{ ?>
							<div class="alert alert-success">
								<br><a href="#" class="alert-link"><?=$this->session->flashdata("login_hata")?></a>
							</div>
							<?php 
							} ?>
                             <p>Hoşgeldiniz.Devam etmek için lütfen bilgilerinizi girin.</p>
							 <form action="<?=base_url()?>Login/log_in" method="post">
                                 <h5>E-mail:</h5>	
                                 <input type="text"name="email">
                                 <h5>Şifre:</h5>
                                 <input type="password" name="sifre"><br>					
                                 <input type="submit" value="Giris">

                             </form>
                    </div>
                    <div class="col-md-6 login-right">
                            <h3>Yeni Kayıt</h3>
                            <div class="strip"></div>,
							<br>
							<a href="<?=base_url()?>Register" class="button">Kayıt Oluştur</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
<!-- //login-page -->
        <!--signup-->
        