@extends('partials.main') 

@section('content')
<h2 class="mt-4"> Dashboard Provinsi </h2>
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

<!-- TABEL USER -->
<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($data as $d) 
            <tr>
                <th scope="row">{{ $d->id }}</th>
                <td>{{ $d->name }}</td>
            </tr> 
            @endforeach
        </tbody>
    </table>
</div>
@endsection