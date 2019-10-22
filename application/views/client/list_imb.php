		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="#">
						<em class="fa fa-home"></em>
					</a></li>
					<li class="active">Data SIMB</li>
				</ol>
			</div><!--/.row-->

			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">SIMB Terdaftar</h1>
				</div>
			</div><!--/.row-->
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							Daftar SIMB
							<ul class="pull-right panel-settings panel-button-tab-right">
								<li class="dropdown">
									<a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
										<em class="fa fa-tasks"></em>
									</a>
									<ul class="dropdown-menu dropdown-menu-right">
										<li>
											<ul class="dropdown-settings">
												<li class="divider"></li>
												<li>
													<?php echo anchor('',"<em class='fa fa-power-off'></em> Izin Aktif"); ?></li>
													<li class="divider"></li>
													<li>
														<?php echo anchor('',"<em class='fa fa-exclamation-triangle'></em> Izin Tidak Aktif");?>
													</li>
													<li class="divider"></li>
													<li>
														<?php echo anchor('',"<em class='fa fa-clone'></em> Perpanjang Izin"); ?></li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
									<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
								</div>
								<div class="panel-body">
									<div class="input-group">
										<input type="text" name="cari" class="form-control input-md" placeholder="Masukan Nomor Surat IMB" />
										<span class="input-group-btn">
											<button type="submit" name="submit" class="btn btn-primary btn-md">Cari</button>
										</span>
									</div>
									<table class="align-middle mb-0 table table-borderles table-striped table-hover">
										<thead>
											<tr>
												<th class="text-center">Nomor Surat IMB</th>
												<th class="text-center">Pemilik</th>
												<th class="text-center">Status Tanah</th>
												<th class="text-center">Luas Bangunan</th>
											</tr>
										</thead>
										<tbody>
										<?php foreach ($list as $key => $value) : ?>
											<tr>
												<td><?= $value['nomor_izin']?></td>
												<td><?= $value['nama_user']?></td>
												<td class="text-center"><?php if ($value['status_tanah'] === 'L') {
													echo "Legal";
												} elseif ($value['status_tanah'] === 'S') {
													echo "Sengketa";
												} else {
													echo "Lainya";
													} ?></td>
												<td><?= $value['luas_bangunan']?> KM</td>
											</tr>	
										<?php endforeach ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!--/.row-->
				</div>