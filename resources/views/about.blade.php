@extends('partials.main') 

@section('content')
<!-- Tabel Biodata -->
<table class="table table-striped">
	<thead>
		<tr>
			<th>DESKRIPSI SINGKAT</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>
				<img src="{{ asset('img/user.jpg') }}" class="img-fluid img-thumbnail" width=350 height="350">
			</td>
			<td>{{ $data["deskripsi_singkat"] }}</td>
		</tr>
	</tbody>
	<thead>
		<tr>
			<th>INFORMASI UMUM</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>Nama Lengkap</th>
			<td>{{ $data["nama"] }}</td>
		</tr>
		<tr>
			<th>Tempat, Tanggal Lahir</th>
			<td>{{ $data["ttl"] }}</td>
		</tr>
		<tr>
			<th>Alamat</th>
			<td>{{ $data["alamat"] }}</td>
		</tr>
	</tbody>
	<thead>
		<tr>
			<th>PENDIDIKAN</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>{{ $data["tahun_sd"] }}</td>
			<td>{{ $data["nama_sd"] }}</td>
		</tr>
		<tr>
			<td>{{ $data["tahun_smp"] }}</td>
			<td>{{ $data["nama_smp"] }}</td>
		<tr>
			<td>{{ $data["tahun_smk"] }}</td>
			<td>{{ $data["nama_smk"] }}</td>
		</tr>
	</tbody>
	<thead>
		<tr>
			<th>KONTAK</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Email</td>
			<td>{{ $data["email"] }}</td>
		</tr>
		<tr>
			<td>Facebook</td>
			<td>{{ $data["facebook"] }}</td>
		</tr>
		<tr>
			<td>Instagram</td>
			<td>{{ $data["instagram"] }}</td>
		</tr>
		<tr>
			<td>Nomor HP</td>
			<td>{{ $data["nomor_hp"] }}</td>
		</tr>
	</tbody>
</table> 
@endsection