<div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="index.html">Anasayfa</a></li>
                    <li><a href="register.html">Kayıt</a></li>
                    <li class="active">Kayıt Ekranı</li>
                </ol>
            </div>
        </div>
        <!-- reg-form -->
	<div class="reg-form">
		<div class="container">
			<div class="reg">
				<h3>Kayıt Ol</h3>
				<p>Hoşgeldiniz. Devam için lütfen istenen bilgileri giriniz.</p>
				
				<script>
				function validateForm() {
					var a = document.forms["reg"]["adi"].value;
					var b = document.forms["reg"]["email"].value;
					var c = document.forms["reg"]["sifre"].value;
					var d = document.forms["reg"]["telefon"].value;
					if (a == "") {
						alert("Lütfen Ad Soyadınızı girin!");
						return false;
					}else if(b=="") {
						alert("Lütfen E-Mail Adresinizi girin!");
						return false;
					}else if(c=="") {
						alert("Lütfen şifreinizi girin!");
						return false;
					}else if(d=="") {
						alert("Lütfen Telefon numaranızı girin!");
						return false;
					}
				} 
				</script>
				
				 <form action="<?=base_url()?>Register/eklekaydet" name="reg" onsubmit="return validateForm()" method="post">
					<ul>
						<li class="text-info">Ad Soyad: </li>
						<li><input type="text"name="adi" value=""></li>
					</ul>
						 
					<ul>
						<li class="text-info">Email: </li>
						<li><input type="text"name="email" value=""></li>
					</ul>
					<ul>
						<li class="text-info">Şifre: </li>
						<li><input type="password"name="sifre" value=""></li>
					</ul>
					<ul>
						<li class="text-info">Tel:</li>
						<li><input type="text"name="telefon" value=""></li>
					</ul>
					<ul>
						<li class="text-info">Şehir:</li>
						<li><input type="text"name="sehir" value=""></li>
					</ul>
					<ul>
						<li class="text-info">Adres:</li>
						<li><input type="text"name="adres" value=""></li>
					</ul>
					<input type="submit" value="Register Now">
					 
				</form>
			</div>
		</div>
	</div>