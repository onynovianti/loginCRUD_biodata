<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand">BioData.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'Home'? 'active' : '') }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'About'? 'active' : '') }}" href="/about">Biodata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'Komentar'? 'active' : '') }}" href="/komentar">Komentar</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dashboard
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/dashboarduser">Dashboard User</a></li>
                      <li><a class="dropdown-item" href="/dashboardbiodata">Dashboard Biodata</a></li>
                      <li><a class="dropdown-item" href="/dashboardprovinsi">Dashboard Provinsi</a></li>
                    </ul>
                </li>
            </ul>
            @auth
        	<form action="/logout" method="post"> @csrf
        		<button type="submit" class="btn btn-outline-secondary">Logout</button>
        	</form>
        	@else
                <a class="btn btn-outline-secondary" href="/login">Login</a>
        	@endauth
        </div>
    </div>
</nav>