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
										<li><?php echo anchor('users/add_users','<em class="fa fa-user-plus"> Tambah Data</em>'); ?>
										</li>
											<li class="divider"></li>
											<li><a href="">
												<em class="fa fa-user"></em> Izin Aktif
											</a></li>
											<li class="divider"></li>
											<li><a href="">
												<em class="fa fa-power-off"></em> Izin Tidak Aktif
											</a></li>
											<li class="divider"></li>
											<li><a href="users/add_izin_users">
												<em class="fa fa-clone"></em> Perpanjang Izin
											</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
						</div>
					<div class="panel-body">
					<table id="table_users" class="align-middle mb-0 table table-borderles table-striped table-hover">
					<thead>
						<tr>
							<th class="text-center">No</th>
							<th class="text-center">Nama</th>
							<th class="text-center">Lokasi Bangunan</th>
							<th class="text-center">Status</th>
							<th class="text-center">Nomor Izin</th>
							<th class="text-center">Aksi</th>
						</tr>
					</thead>
				</table>
					</div>
				</div>
			</div>
		</div>
		<!--/.row-->
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.js"></script>
<script>
    $(document).ready(function() {
        var t = $('#table_users').DataTable( {
            "ajax": '<?php echo site_url('data/data'); ?>',
            "order": [[ 2, 'asc' ]],
            "columns": [
            {
                "data": null,
                "width": "50px",
                "sClass": "text-center",
                "orderable": false,
            },
            { "data": "nama_user" },
            { "data": "lokasi_bangunan" },
            { "data": "status_tanah", "width": "50px","sClass": "text-center"},
            { "data": "nomor_izin" },
            { "data": "aksi","width": "75px", "sClass": "text-center" },
            ]
        } );

        t.on( 'order.dt search.dt', function () {
            t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
        } ).draw();
    } );
</script>