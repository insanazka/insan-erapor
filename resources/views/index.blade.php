<!DOCTYPE html>
<html>
<head>
	<title>coba tampil data</title>
</head>
<body>

	
	<h3>Data Pemain</h3>
	<a href="tabel/create"> + Tambah Pemain Baru</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>Imei</th>
			<th>Merek</th>
			<th>Tipe</th>
			<th>Harga</th>
            <th>Opsi</th>
		</tr>
		@foreach($hp as $h)
		<tr>
			<td>{{ $h->imei }}</td>
			<td>{{ $h->merek }}</td>
			<td>{{ $h->tipe }}</td>
            <td>{{ $h->harga }}</td>
			
			<td>
				<a href="/pemain/edit/{{ $h->imei }}">Edit</a>
				|
				<a href="/pemain/hapus/{{ $h->imei }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
</body>
</html>
