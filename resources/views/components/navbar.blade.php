<nav class="navbar fixed-top mb-2">
    <div class="container">
      <img src="/img/dn_logox.png" alt="">
      <button class="navbar-toggler text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <i class="fa-solid fa-bars text-white"></i>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">{{ Auth::user()->name }} {{Auth::user()->id_user}}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Contact</a>
            </li>
            <li class="nav-item d-flex justify-content-end">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="btn btn-danger text-end" type="submit">Log Out</button>
                </form>
              
            </li>
            
          </ul>
        </div>
      </div>
    </div>
  </nav>