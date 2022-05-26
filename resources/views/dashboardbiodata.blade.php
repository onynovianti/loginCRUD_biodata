@extends('partials.main') 

@section('content')
<h2 class="mt-4"> Dashboard Biodata </h2>
{{-- Berhasil update  --}}
@if(session()->has('updatesuccess'))
<div class="alert alert-success alert-dismissable fade show mt-5" role="alert"> Data telah tersimpan!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
</div>
@endif

{{-- Berhasil hapus  --}}
@if(session()->has('hapussuccess'))
<div class="alert alert-success alert-dismissable fade show mt-5" role="alert"> Data telah dihapus!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
</div>
@endif

<a class="btn btn-primary ms-auto mt-5" href="/about/create">+ Tambah Biodata</a>

<!-- TABEL USER -->
<form class="input-group mt-4 mb-4" action="/caribiodata" method="POST"> @csrf
    <input name="search" type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
    <button type="submit" class="btn btn-secondary">Search</button>
</form>
<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Tempat, Tanggal Lahir</th>
            <th scope="col" width="30%">Pendidikan</th>
            <th scope="col">Kontak</th>
            <th scope="col">Domisili</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($data as $d) 
            <tr>
                <td><a href="about{id}">{{ $d->nama }}</a><br> 
                    {{ Str::limit($d->deskripsi_singkat, 40, '...') }}
                </td>
                {{-- <td>{{ Str::limit($d->deskripsi_singkat, 60, '...') }}</td> --}}
                <td>{{ $d->alamat }}</td>
                <td>{{ $d->ttl }}</td>
                <td><i class="bi-check-circle"></i> {{ $d->nama_sd }} <br> ( {{ $d->tahun_sd }} )<br>
                    <i class="bi-check-circle"></i> {{ $d->nama_smp }} <br> ( {{ $d->tahun_smp }} )<br>
                    <i class="bi-check-circle"></i> {{ $d->nama_smk }} <br> ( {{ $d->tahun_smk }} )</td>
                <td><i class="bi-envelope"></i> {{ $d->email }}<br>
                    <i class="bi-facebook"></i> {{ $d->facebook }}<br>
                    <i class="bi-instagram"></i> {{ $d->instagram }}<br>
                    <i class="bi-phone"></i> {{ $d->nomor_hp }}
                </td>
                <td>{{ $d->domisili }}</td>
                {{-- <td> 
                    <form action="/about/{{ $d->id }}" method="POST">
                    {{-- Update  --}}
                    {{-- <a type="button" href="/about/{{ $d->id }}/edit" class="btn btn-success btn-sm">Edit</a>
                    @method("delete")
                    @csrf --}}
                    {{-- Delete  --}}
                    {{-- <button type="submit"class="btn btn-danger btn-sm">Hapus</button>
                    </form>                       
                </td> --}}
            </tr> 
            @endforeach
        </tbody>
    </table>
</div>
@endsection