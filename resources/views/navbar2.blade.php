<nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-primary">
    <div class="container">
     <a class="navbar-brand" href="/barang" style="font-family: 'caveat', cursive">
       Dashboard
     </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($active === 'barang') ? 'active' : ''}} " href="/barang">Barang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === 'categories') ? 'active' : ''}} " href="/category">Category</a>
          </li>
        </ul>
 
        <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ auth()->user()->username }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/  "><i class="bi bi-layout-text-window-reverse"></i>Home</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i> Logout</button>
                </form>
            </ul>
          </li>
          @else
          <li class="nav-item">
            <a href="/login" class="nav-link {{ ($active === 'login') ? 'active' : ''}}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
          </li>
          @endauth
        </ul>
 
 
      </div>
    </div>
  </nav>