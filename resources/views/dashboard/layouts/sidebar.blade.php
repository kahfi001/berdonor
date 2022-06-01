<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class=" d-flex flex-column position-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard')?'active':'' }}" aria-current="page" href="/dashboard">
          <span data-feather="home"></span>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/artikel*')?'active':'' }}" href="/dashboard/artikel">
          <span data-feather="file-text"></span>
          Artikel
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/darah*')?'active':'' }}" href="/dashboard/darah">
          <span data-feather="heart"></span>
          Stok Darah
        </a>
      </li>
      <hr>
      <li class="nav-item mx-auto">
        <form action="/logout" method="post">
          @csrf
          <button type= "submit" class="btn btn-outline-danger nav-link "><span data-feather="log-out"></span>Logout</button>
        </form>
      </li>
    </ul>
  </div>
</nav>