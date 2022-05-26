@extends('partials.main') 

@section('content')
{{-- Login  --}}
<form class="mt-5 mb-5 col-md-4 mx-auto" method="POST" action="/logincek">
    @csrf
    <h2> Login Form </h2>
    {{-- Kesalahan login  --}}
    @error('salah')
    	<div class="error">{{ $message }}</div>
    @enderror

    {{-- Berhasil register  --}}
    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissable fade show" role="alert"> Data telah tersimpan!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
      </div>
    @endif

    <!-- Email input -->
    <div class="form-outline mb-4 mt-4">
      <input type="email" id="form2Example1" class="form-control" placeholder="Masukkan Email" name="email"/>
      @error('email')
        <div class="text-danger"><small>Email harus diisi</small></div>
      @enderror
    </div>
  
    <!-- Password input -->
    <div class="form-outline mb-4">
      <input type="password" id="form2Example2" class="form-control" placeholder="Masukkan Password" name="password"/>
      @error('password')
        <div class="text-danger"><small>Password harus >5 huruf</small></div>
      @enderror
    </div>
    
    <!-- Submit button -->
    <button type="submit" class="btn btn-outline-secondary col-12 mb-4">Sign in</button>
    <a href="/login/create">Belum punya akun? Daftar Sekarang</a>
  </form>
@endsection