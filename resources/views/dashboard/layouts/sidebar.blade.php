
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard')?'active':'' }}" aria-current="page" href="/dashboard">
          <span data-feather="home"></span>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/artikel*')?'active':'' }}" href="/dashboard/artikel">
          <span data-feather="file"></span>
          Artikel
        </a>
      </li>
      <li class="nav-item ">
        <form action="/logout" method="post">
          @csrf
          <button type= "submit" class="btn btn-outline-danger nav-link mx-auto">Logout</button>
        </form>
      </li>
    </ul>
  </div>
</nav>