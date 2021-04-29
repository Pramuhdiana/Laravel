<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<center>
			<h4>Membuat Laporan PDF Dengan DOMPDF Laravel</h4>
		</center>
		<br/>
		<a href="/mahasiswa/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
		<table class='table table-bordered'>
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Umur</th>
					<th>Alamat</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach($mahasiswa as $m)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$m->nama}}</td>
					<td>{{$m->umur}}</td>
					<td>{{$m->alamat}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>

	</div>

</body>
</html>