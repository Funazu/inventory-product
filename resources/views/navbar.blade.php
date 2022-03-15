<nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-primary">
    <div class="container">
     <a class="navbar-brand" href="/" style="font-family: 'caveat', cursive">
       SMK NU MAARIF KUDUS
     </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">

 
        <ul class="navbar-nav ms-auto">
          @auth
          <!-- Store -->
          <!-- <li class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Store
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/category"><i class="bi bi-layout-text-window-reverse"></i>Barang</a></li>
            </ul>
          </li> -->
          <!-- Category -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ auth()->user()->username }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/category"><i class="bi bi-layout-text-window-reverse"></i>Category</a></li>
              <li><a class="dropdown-item" href="/barang"><i class="bi bi-layout-text-window-reverse"></i>Produk</a></li>
              <li><a class="dropdown-item" href="/order"><i class="bi bi-layout-text-window-reverse"></i>Order</a></li>
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
            <a href="/login" class="nav-link {{ ($active === 'home') ? 'active' : ''}}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
          </li>
          @endauth
        </ul>
 
 
      </div>
    </div>
  </nav>