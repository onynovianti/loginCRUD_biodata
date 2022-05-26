@extends('partials.main') 

@section('content')
{{-- Register  --}}
<form class="mt-5 mb-5 col-md-4 mx-auto" method="POST" action="/login">
    @csrf
    <h2> Register Form</h2>
    <!-- Name input -->
    <div class="form-outline mb-4 mt-4">
      <input type="text" id="form2Example1" class="form-control" placeholder="Masukkan Nama" name="name" value="{{ old('name') }}"/>
    @error('name')
	    <div class="text-danger"><small>Nama harus >5 huruf</small></div>
	  @enderror
    </div>
    

    <!-- Email input -->
    <div class="form-outline mb-4 mt-4">
      <input type="email" id="form2Example1" class="form-control" placeholder="Masukkan Email" name="email" value="{{ old('email') }}"/>
    @error('email')
	    <div class="text-danger"><small>Email harus diisi</small></div>
	  @enderror
    </div>
    
  
    <!-- Password input -->
    <div class="form-outline mb-4">
      <input type="password" id="form2Example2" class="form-control" placeholder="Masukkan Password" name="password" value="{{ old('password') }}"/>
    @error('password')
	    <div class="text-danger"><small>Password harus >5 huruf</small></div>
	  @enderror
    </div>
    
    
    <!-- Submit button -->
    <button type="submit" class="btn btn-outline-secondary col-12 mb-4">Register</button>
    <a href="/login">Sudah memiliki akun?</a>
  </form>
@endsection