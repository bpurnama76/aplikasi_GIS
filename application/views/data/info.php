	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Data Element Aplikasi</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Controller</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<table id="TableData" class="align-middle mb-0 table table-bordered table-striped table-hover">
					<thead>
						<tr>
							<th class="text-center">Nama Menu</th>
							<th class="text-center">Nama Controller</th>
							<th class="text-center">Icon</th>
							<th class="text-center">Induk</th>
						</tr>
					</thead>
					<?php
					$data = $this->db->get('tbl_menu');
					foreach ($data->result() as $row) {
						echo "<tr>";
						echo "<td>$row->nama_menu</td>";
						echo "<td>$row->link</td>";
						echo "<td>$row->icon</td>";
						echo "<td class='text-center'>$row->induk</td>";
						echo "</tr>";
					}
					?>
				</table>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Users Access</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<table id="TableData" class="align-middle mb-0 table table-bordered table-striped table-hover">
					<thead>
						<tr>
							<th class="text-center">Nama Menu</th>
							<th class="text-center">Nama Controller</th>
							<th class="text-center">Icon</th>
							<th class="text-center">Induk</th>
						</tr>
					</thead>
					<?php
					$data = $this->db->get('tbl_menu');
					foreach ($data->result() as $row) {
						echo "<tr>";
						echo "<td>$row->nama_menu</td>";
						echo "<td>$row->link</td>";
						echo "<td>$row->icon</td>";
						echo "<td class='text-center'>$row->induk</td>";
						echo "</tr>";
					}
					?>
				</table>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-sm-12">
				<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
			</div>
		</div><!--/.row-->
	</div>
	<script type="text/javascript">
		$(document).ready( function () {
			$('#TableData').DataTable();
		} );
	</script>