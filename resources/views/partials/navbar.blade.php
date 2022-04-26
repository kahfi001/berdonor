{{-- Navbar --}}
<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
  <div class="container">
    <a class="navbar-brand" href="/"><img src="../img/logo.png" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
        <li class="nav-item" >
          <a class="nav-link {{ ($tittle == "Donor Darah") ? 'active' : ' ' }} " style=" color :#dc2626"  href="/donor">Donor Darah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($tittle == "Artikel") ? 'active' : ' ' }}" style=" color :#dc2626" href="/artikel">Artikel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($tittle == "Tentang Kami") ? 'active' : ' ' }}" style=" color :#dc2626" href="/tentangkami">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($tittle == "FAQ") ? 'active' : ' ' }}" style=" color :#dc2626" href="/faq">FAQ</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a href="/login"><button class="btn btn-outline-danger" type="submit">Masuk</button></a>
        </li>
      </ul>
    </div>
  </div>
</nav>