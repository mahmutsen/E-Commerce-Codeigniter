<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
    <head>
    <title><?=$veri[0]->adi?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="<?=$veri[0]->aciklama?>">
		<meta name="keywords" content="<?=$veri[0]->keywords?>">
		<script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<meta charset utf="8">
		<!--fonts-->
		<link href='//fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
		
		<!--fonts-->
		<!--bootstrap-->
			 <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<!--coustom css-->
			<link href="<?=base_url()?>assets/css/style.css" rel="stylesheet" type="text/css"/>
        <!--shop-kart-js-->
        <script src="<?=base_url()?>assets/js/simpleCart.min.js"></script>
		<!--default-js-->
			<script src="<?=base_url()?>assets/js/jquery-2.1.4.min.js"></script>
		<!--bootstrap-js-->
			<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
		<!--script-->
		
		<!-- FlexSlider -->
            <script src="<?=base_url()?>assets/js/imagezoom.js"></script>
              <script defer src="<?=base_url()?>assets/js/jquery.flexslider.js"></script>
            <link rel="stylesheet" href="<?=base_url()?>assets/css/flexslider.css" type="text/css" media="screen" />

            <script>
            // Can also be used with $(document).ready()
            $(window).load(function() {
              $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
              });
            });
            </script>
        <!-- //FlexSlider-->
		
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="header-top">
                    <div class="logo">
                        <a href="<?=base_url()?>">ANASAYFA</a>
                    </div>
                    <div class="login-bars">
                        
						<?php if(! $this->session->userdata('musteri_oturum_data')){
						?>
						<a class="btn btn-default log-bar" href="<?=base_url()?>Login" role="button">Giriş</a>
                        <a class="btn btn-default log-bar" href="<?=base_url()?>Register" role="button">Kayıt</a>
						<?php 
						}else{ ?>
						<ul class="nav pull-right">
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i><?=$this->session->musteri_oturum_data['adi']?>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Hesap Ayarları</span>
								</li>
								<li><a href="<?=base_url()?>Home/uyepanel"><i class="halflings-icon user"></i> Profil</a></li>
								<li><a href="<?=base_url()?>Home/siparislerim"><i class="halflings-icon user"></i> Siparişlerim</a></li>
								<li><a href="<?=base_url()?>Home/sepetim"><i class="halflings-icon user"></i> Sepetim</a></li>
								<li><a href="<?=base_url()?>Login/log_out"><i class="halflings-icon off"></i> Çıkış</a></li>
							</ul>
						</li>
						</ul>
						<?php
						} ?>
                       
                    </div>
        <div class="clearfix"></div>
                </div>
                <!---menu-----bar--->
                <div class="header-botom">
                    <div class="content white">
                    <nav class="navbar navbar-default nav-menu" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="clearfix"></div>
                        <!--/.navbar-header-->

                        <div class="collapse navbar-collapse collapse-pdng" id="bs-example-navbar-collapse-1">
						
						
                            <ul class="nav navbar-nav nav-font">
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown">KATEGORİLER<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
									<?php 
									
									foreach($kategori as $rs)
										{ ?>
											<li><a href="<?=base_url()?>home/kategori/<?=$rs->Id?>"><?=$rs->adi?></a></li>
										<?php
										} ?>
                                        
                                          
                                    </ul>
                                </li>
                                <li><a href="<?=base_url()?>home/platform/1">PC</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">XBOX<b class="caret"></b></a>
                                    <ul class="dropdown-menu multi-column columns-2">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <ul class="multi-column-dropdown">
										<?php
										foreach($xbox as $rs)
										{ ?>
												<li><a href="<?=base_url()?>home/platform/<?=$rs->Id?>"><?=$rs->adi?></a></li>
										<?php
										} ?>
												</ul>
                                            </div>
                                            <div class="col-sm-6">
												<a href="#"><img src="<?=base_url()?>assets/images/xboxlive.png" alt="/" class="img-rsponsive men-img-wid" /></a>
                                            </div>
                                        </div>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">PlayStation<b class="caret"></b></a>
                                    <ul class="dropdown-menu multi-column columns-2">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <ul class="multi-column-dropdown">
										<?php
										foreach($ps as $rs)
										{ ?>
											<li><a href="<?=base_url()?>home/platform/<?=$rs->Id?>"><?=$rs->adi?></a></li>
										<?php
										} ?>
												</ul>
                                            </div>
                                            <div class="col-sm-6">
												<a href="#"><img src="<?=base_url()?>assets/images/playstation_icon.png" alt="/" class="img-rsponsive men-img-wid" /></a>
                                            </div>
                                        </div>
                                    </ul>
                                </li>
                                <div class="clearfix"></div>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <!--/.navbar-collapse-->
                        <div class="clearfix"></div>
                    </nav>
                    <!--/.navbar-->   
                        <div class="clearfix"></div>
                    </div>
                    <!--/.content--->
                </div>
                    <!--header-bottom-->
            </div>
        </div>
        