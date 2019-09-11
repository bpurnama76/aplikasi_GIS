<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url(); ?>">
				<em class="fa fa-home"></em>
			</a></li>
			<li class="active">Data SIMB</li>
		</ol>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Tambah Data SIMB</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Formulir Menambahkan SIMB
					<span class="pull-right clickable panel-toggle panel-button-tab-right"><em class="fa fa-toggle-up"></em></span>
					<span class="pull-right panel-toggle panel-button-tab-left"><em > <?php echo anchor('data/list_simb',"<i class='fa fa-arrow-left'></i>") ?></em></span></div>
					<div class="panel-body">
						<?php echo form_open_multipart('data/add_simb','role="form" class="form-group"',); ?>
						<div class="row">
							<div class="col-md-6">
								<div class="position-relative form-group">
								<label for="nomor_izin">Nomor SIMB</label>
									<input type="text" name="nomor_izin" class=" form-control" placeholder="Nomor SIMB yang akan didaftarkan"></input>
								</div>
							</div>
							<div class="col-md-6">
								<div class="position-relative form-group">
									<label for="nama_user">Nama Pemilik Bangunan</label>
									<?php echo combo_list('user', 'tbl_user', 'nama_user', 'id_user', 'id_user', "class='form-control'"); ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="position-relative form-group">
									<label for="luas">Luas Bangunan KM</label>
									<input type="text" name="luas" placeholder="Luas dalam Kilometer" class="form-control"></input>
								</div>
							</div>
							<div class="col-md-3">
								<div class="position-relative form-group">
									<label for="status_tanah">Status Tanah</label>
									<?php echo combo_list('status_tanah', 'tbl_status_tanah', 'nama_status', 'kd_status_tanah', 'status_tanah', "class='form-control'"); ?>
								</div>
							</div>
							<div class="col-md-3">
								<div class="position-relative form-group">
									<label for="kategori">Kategori Bangunan</label>
									<?php echo combo_list('kategori', 'tbl_kategori', 'nama_kategori', 'id_kategori', 'kategori', "class='form-control'"); ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="position-relative form-group">
									<label for="luas">Longitude</label>
									<input type="text" placeholder="Deteksi dari Peta" name="longitude" class="form-control"></input>
								</div>
							</div>
							<div class="col-md-6">
								<div class="position-relative form-group">
									<label for="luas">Latitude</label>
									<input type="text" placeholder="Deteksi dari Peta" name="latitude" class="form-control"></input>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="position-relative form-group">
									<label for="luas">Lokasi Bangunan</label>
									<textarea type="text" name="lokasi_bangunan" class="form-control"></textarea>
								</div>
							</div>
							<div class="col-md-6">
								<div class="position-relative form-group">
									<label for="kategori">Tanggal Datar Aktif</label>
									<input type="date" name="tanggal" class="form-control"></input>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d89750.64073166341!2d106.5156495401559!3d-6.20349767023631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1568230146776!5m2!1sid!2sid" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
							</div>
						</div>
					<!-- Form actions -->
					<div class="row">
					<div class="form-group">
						<div class="col-md-12 widget-right">
							<button type="submit" name="submit" class="btn btn-primary btn-md pull-right">Tambah Data</button>
						</div>
					</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>