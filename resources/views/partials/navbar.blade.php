<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarCollapse">

        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link  @if(Request::path() == '/') active @endif" aria-current="page" href="/">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  @if(Request::getRequestUri() == '/products') active @endif" aria-current="page" href="/products">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  @if(Request::getRequestUri() == '/customers') active @endif" aria-current="page" href="/customers">Customers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  @if(Request::getRequestUri() == '/settings') active @endif" aria-current="page" href="/settings">Settings</a>
          </li>

        </ul>

@php
    echo Request::getRequestUri();
@endphp
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

      </div>
    </div>
  </nav>





