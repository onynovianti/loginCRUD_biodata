@extends('partials.main') 

@section('content')
{{-- Register  --}}

<form class="mt-5 mb-5 col-md-10 mx-auto" method="POST" action="/about">
    @csrf
    <h2> Tambah Biodata</h2>
    <!-- Name input -->
    <div class="form-outline mb-4 mt-4">
      <label>Nama</label>
      <input type="text" id="form2Example1" class="form-control" placeholder="Masukkan Nama" name="nama" value="{{ old('name') }}"/>
    @error('nama')
	    <div class="text-danger"><small>Nama harus >5 huruf</small></div>
	  @enderror
    </div>

    <!-- Deskripsi Singkat input -->
    <div class="form-outline mb-4 mt-4">
      <label>Deskripsi Singkat</label>
        <input type="text" id="form2Example1" class="form-control" placeholder="Masukkan Deskripsi Singkat" name="deskripsi_singkat" value="{{ old('deskripsi_singkat') }}"/>
      @error('deskripsi_singkat')
          <div class="text-danger"><small>Deskripsi harus >20 huruf</small></div>
      @enderror
    </div>

    <!-- Tempat Tanggal Lahir input -->
    <div class="form-outline mb-4 mt-4">
      <label>Tempat, Tanggal Lahir</label>
        <input type="text" id="form2Example1" class="form-control" placeholder="Masukkan Tempat, Tanggal Lahir (Malang, 18 Maret 2001)" name="ttl" value="{{ old('ttl') }}"/>
      @error('ttl')
          <div class="text-danger"><small>Tempat, Tanggal Lahir harus >10 huruf</small></div>
        @enderror
    </div>

    <!-- Alamat input -->
    <div class="form-outline mb-4 mt-4">
      <label>Alamat</label>
        <input type="text" id="form2Example1" class="form-control" placeholder="Masukkan Alamat" name="alamat" value="{{ old('alamat') }}"/>
      @error('alamat')
          <div class="text-danger"><small>Alamat harus >10 huruf</small></div>
        @enderror
    </div>

    <!-- Tahun SD input -->
    <div class="form-outline mb-4 mt-4">
      <label>Tahun Sekolah Dasar</label>
      <input type="text" id="form2Example1" class="form-control" placeholder="Masukkan Tahun SD" name="tahun_sd" value="{{ old('tahun_sd') }}"/>
    @error('tahun_sd')
	    <div class="text-danger"><small>Tahun SD harus diisi</small></div>
	  @enderror
    </div>
    
    <!-- Tahun SMP input -->
    <div class="form-outline mb-4 mt-4">
      <label>Tahun Sekolah Menengah Pertama</label>
        <input type="text" id="form2Example1" class="form-control" placeholder="Masukkan Tahun SMP" name="tahun_smp" value="{{ old('tahun_smp') }}"/>
      @error('tahun_smp')
          <div class="text-danger"><small>Tahun SMP harus diisi</small></div>
        @enderror
    </div>

    <!-- Tahun SMK input -->
    <div class="form-outline mb-4 mt-4">
      <label>Tahun Sekolah Menengah Atas</label>
        <input type="text" id="form2Example1" class="form-control" placeholder="Masukkan Tahun SMK" name="tahun_smk" value="{{ old('tahun_smk') }}"/>
      @error('tahun_smk')
          <div class="text-danger"><small>Tahun SMK harus diisi</small></div>
        @enderror
    </div>

    <!-- Nama SD Input -->
    <div class="form-outline mb-4">
      <label>Nama Sekolah Dasar</label>
      <input type="text" id="form2Example2" class="form-control" placeholder="Masukkan Nama SD" name="nama_sd" value="{{ old('nama_sd') }}"/>
    @error('nama_sd')
	    <div class="text-danger"><small>Nama SD harus diisi</small></div>
	  @enderror
    </div>

    <!-- Nama SMP Input -->
    <div class="form-outline mb-4">
      <label>Nama Sekolah Menengah Pertama</label>
        <input type="text" id="form2Example2" class="form-control" placeholder="Masukkan Nama SMP" name="nama_smp" value="{{ old('nama_smp') }}"/>
      @error('nama_smp')
          <div class="text-danger"><small>Nama SMP harus diisi</small></div>
        @enderror
    </div>

    <!-- Nama SMK Input -->
    <div class="form-outline mb-4">
      <label>Nama Sekolah Menengah Atas</label>
        <input type="text" id="form2Example2" class="form-control" placeholder="Masukkan Nama SMK" name="nama_smk" value="{{ old('nama_smk') }}"/>
      @error('nama_smk')
          <div class="text-danger"><small>Nama SMK harus diisi</small></div>
        @enderror
    </div>

    <!-- Email Input -->
    <div class="form-outline mb-4">
      <label>Email</label>
        <input type="text" id="form2Example2" class="form-control" placeholder="Masukkan Email" name="email" value="{{ old('email') }}"/>
      @error('email')
          <div class="text-danger"><small>Email harus diisi</small></div>
        @enderror
    </div>

    <!-- Facebook Input -->
    <div class="form-outline mb-4">
      <label>Facebook</label>
        <input type="text" id="form2Example2" class="form-control" placeholder="Masukkan Facebook" name="facebook" value="{{ old('facebook') }}"/>
      @error('facebook')
          <div class="text-danger"><small>Facebook harus diisi</small></div>
        @enderror
    </div>

    <!-- Instagram Input -->
    <div class="form-outline mb-4">
      <label>Instagram</label>
        <input type="text" id="form2Example2" class="form-control" placeholder="Masukkan Instagram" name="instagram" value="{{ old('instagram') }}"/>
    @error('instagram')
        <div class="text-danger"><small>Instagram harus diisi</small></div>
    @enderror
    </div>

    <!-- Nomor HP Input -->
    <div class="form-outline mb-4">
      <label>Nomor HP</label>
        <input type="text" id="form2Example2" class="form-control" placeholder="Masukkan Nomor HP" name="nomor_hp" value="{{ old('nomor_hp') }}"/>
    @error('nomor_hp')
          <div class="text-danger"><small>Nomor HP harus diisi</small></div>
    @enderror
    </div>

    <div class="form-outline mb-4">
      <label>Domisili</label>
      <select id="inputState" name="domisili" class="form-control">
        @foreach ($data as $d) 
          <option value="{{ $d->id }}">{{ $d->name }}</option>
        @endforeach
      </select>
      @error('domisili')
            <div class="text-danger"><small>Domisili harus diisi</small></div>
      @enderror
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-outline-secondary col-12 mb-4">Simpan</button>
  </form>
@endsection