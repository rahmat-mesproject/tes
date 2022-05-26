<!DOCTYPE html>
<html>

<head>
	<!-- <link rel="stylesheet" href="CSSPENDUDUK.CSS"> -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<title>Data Penduduk</title>
</head>

<body class="container py-4">
	<button class="btn btn-success my-2" data-bs-toggle='modal' data-bs-target='#import_mdl'>IMPORT DATA</button>

	<div class="modal fade" id="import_mdl" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Import Data Penduduk</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<form method="POST" enctype="multipart/form-data" action="upload_data.php">
					<div class="modal-body">
						pilih file
						<input name="datapenduduk" type="file" required="required" accept=".xlsx"><br>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<h1> Data Penduduk </h1>
	<table class="table table-striped table-bordered">


		<tr>
			<th>N0</th>
			<th> Nama </th>
			<th> No KTP </th>
			<th> No KK </th>
			<th> No HP </th>
		</tr>
		<?php
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi, "select * from datapenduduk");
		while ($d = mysqli_fetch_array($data)) {
		?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['noktp']; ?></td>
				<td><?php echo $d['nokk']; ?> </td>
				<td><?php echo $d['nohp']; ?> </td>
			</tr>

		<?php
		}
		?>




	</table>

	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>