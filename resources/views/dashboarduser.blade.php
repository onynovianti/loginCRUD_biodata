@extends('partials.main') 

@section('content')
<h2 class="mt-4"> Dashboard User </h2>
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
<a class="btn btn-primary ms-auto mt-5" href="/login/create">+ Tambah User</a>

<!-- TABEL USER -->
<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($data as $d) 
            <tr>
                <th scope="row">{{ $d->id }}</th>
                <td><a href="about{id}">{{ $d->name }}</a></td>
                <td>{{ $d->email }}</td>
                <td>{{ $d->password }}</td>
                <td> 
                    <form action="/login/{{ $d->id }}" method="POST">
                    {{-- Update  --}}
                    <a type="button" href="/login/{{ $d->id }}/edit" class="btn btn-success btn-sm">Edit</a>
                    @method("delete")
                    @csrf
                    {{-- Delete  --}}
                    <button type="submit"class="btn btn-danger btn-sm">Hapus</button>
                    </form>                       
                </td>
            </tr> 
            @endforeach
        </tbody>
    </table>
</div>
@endsection