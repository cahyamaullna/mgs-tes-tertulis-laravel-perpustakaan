<!DOCTYPE html>
<html>
<head>
	<title>Data Buku | Print</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Data Buku Perpustakaan</h4>
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
			<th>No</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Foto</th>
			</tr>
		</thead>
		<tbody>
        @foreach ($books as $book)
    <tr>
		@php $i=1 @endphp
		<td>{{ $i++ }}</td>
        <td>{{ $book->judul }}</td>
        <td>{{ $book->penulis }}</td>
        <td>{{ $book->penerbit }}</td>
        <td>{{ $book->foto_buku }}</td>
    </tr>
    @endforeach
		</tbody>
	</table>

</body>
</html>