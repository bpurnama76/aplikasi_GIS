<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url(); ?>">
				<em class="fa fa-home"></em>
			</a></li>
			<li class="active">Data Users</li>
		</ol>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Tambah User</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Formulir Menambahkan User
				<span class="pull-right clickable panel-toggle panel-button-tab-right"><em class="fa fa-toggle-up"></em></span>
				<span class="pull-right panel-toggle panel-button-tab-left"><em > <a href="data"><i class="fa fa-arrow-left"></i></a></em></span></div>
				<div class="panel-body">
					<?php echo form_open_multipart('users/add_users','role="form" class="form-horizontal"',);
					echo form_hidden('id_user',$data_users['id_user']); ?>
						<fieldset>
							<div class="form-group">
								<label class="col-md-3 control-label" for="name">Nama</label>
								<div class="col-md-9">
									<input id="nama" value="<?php echo $data_users['nama_user'] ?>" name="nama_user" type="text" placeholder="Nama Lengkap" class="form-control">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-3 control-label" for="name">Tempat & Tanggal Lahir</label>
								<div class="col-md-6">
								<?php echo combo_list('tempat_lahir','tbl_kota','nama_kota','id_kota',$data_users['tempat_lahir'],null); ?>
								</div>
								<div class="col-md-3">
									<input id="tanggal_lahir" value="<?php echo $data_users['tempat_lahir'] ?>" name="tanggal_lahir" type="date" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label" for="email">Your E-mail</label>
								<div class="col-md-6">
									<input id="email" name="email" type="email" placeholder="Email Anda" value="<?php echo $data_users['email'] ?>" class="form-control">
								</div>
								<div class="col-md-3">
									<input id="text" value="<?php echo $data_users['telpon'] ?>" name="telpon" type="telpon" placeholder="Nomor Telpon Anda" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label" for="message">Agama</label>
								<div class="col-md-3">
								<?php echo combo_list('agama','tbl_agama','nama_agama','kd_agama',$data_users['agama'],"class='form-control'"); ?>
								</div>
								<div class="col-md-3">
								 <?php echo form_dropdown('gender', array('P'=>'Perempuan','L'=>'Laki-Laki'),$data_users['gender'],"class='form-control'"); ?>
								</div>
								<div class="col-md-3">
								<?php echo form_dropdown('status', array('M'=>'Menikah','BM'=>'Belum Menikah','O'=>'Duda / Janda'),$data_users['status'],"class='form-control'"); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Foto User</label>
								<div class="col-md-3">
									<input type="file" name="userfile"><p class="help-block">Silahkan Pilih Foto Berwarna</p></input>
								</div>
								<div class="col-md-6">
									<input type="text" name="pekerjaan" placeholder="Pekerjaan Anda Saat Ini" class="form-control"></input>
								</div>
							</div>
							
							<!-- Form actions -->
							<div class="form-group">
								<div class="col-md-12 widget-right">
									<button type="submit" name="submit" class="btn btn-primary btn-md pull-right">Tambah Data</button>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>