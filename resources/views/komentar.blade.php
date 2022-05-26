@extends('partials.main') 

@section('content') <br>
<!-- Form Komentar -->
<h3 style="text-align: center">Formulir Pengumpulan Komentar</h3>
<br>
<form>
	<div class="row">
		<div class="col">
			<input type="text" class="form-control" placeholder="Nama" aria-label="Nama">
		</div>
		<div class="col">
			<input type="email" class="form-control" placeholder="Email" aria-label="Email">
		</div>
	</div>
	<br>
	<div class="form-floating">
		<textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
		<label for="floatingTextarea">Komentar</label>
	</div>
	<br>
	<button type="button" class="btn btn-outline-secondary float-end" id="liveToastBtn">Kirim</button>
	<br>
	<br>
</form>
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
	<div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
		<div class="toast-header">
			<strong class="me-auto">BioData.</strong>
			<small>Baru Saja</small>
			<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
		</div>
		<div class="toast-body"> Komentar Anda telah dikirim. </div>
	</div>
</div> 
@endsection