<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
  <div class="container">
    <a class="navbar-brand" href="{{ route('book.index') }}">BUKIT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('welcome') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('book.index') }}">Laporan</a>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('info.index') }}">Info</a>
          </li>
      </ul>
    </div>
  </div>
</nav>

{{-- Navbar lama --}}

{{-- <nav class="navbar navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="{{ route('book.index') }}">BUKIT</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('welcome') }}">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('book.index') }}">LAPORAN</a>
          </li>
        </ul>
      </div>
    </div>
</nav> --}}
