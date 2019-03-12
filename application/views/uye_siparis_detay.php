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
				
					<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  
							  <tr>
								<th>Adı Soyadı: </th>
								<td><?=$siparis[0]->adsoy?></td>
							  </tr>
							  <tr>
								<th>Adres: </th>
								<td><?=$siparis[0]->adres?></td>
							  </tr>
							  <tr>
								<th>Telefon: </th>
								<td><?=$siparis[0]->tel?></td>
							  </tr>
							  <tr>
								<th>Şehir: </th>
								<td><?=$siparis[0]->sehir?></td>
							  </tr>
							  <tr>
								<th>Kargo Firma: </th>
								<td><?=$siparis[0]->kargofirma?></td>
							  </tr>
							  <tr>
								<th>Kargo No: </th>
								<td><?=$siparis[0]->kargono?></td>
							  </tr>
						 </table>
					<h3>Siparişe Ait Ürünler</h3>
					<table class="table table-striped table-bordered bootstrap-datatable datatable">
							<thead>
								<tr>
									<th>S.No: </th>
									<th>Ürün Adı: </th>
									<th>Miktar: </th>
									<th>Fiyat: </th>
									<th>Tutar: </th>
								</tr>
							</thead>
							<tbody>
							<?php 
							$sn=0;
							$top=0;
							foreach($urunler as $rs)
							{
								$sn++;
								$tutar=0;
								$top+=$rs->tutar;
							?>
							<tr>
								<td><?=$sn?></td>
								<td><?=$rs->adi?></td>
								<td><?=$rs->miktar?></td>
								<td><?=$rs->fiyat?></td>
								<td><?=$rs->tutar?></td>
							</tr>
							<?php } ?>
							</tbody>
						 </table>
                </div>
				
				
            </div>
            