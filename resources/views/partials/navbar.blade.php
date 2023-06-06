<nav class="navbar navbar-expand-lg px-5" style="background-color: rgb(191, 73, 38); ">
    <div class="container-fluid">
      <a class="navbar-brand" style="color:rgb(255, 201, 163)" href="/">PANTHEGIFT</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" style="color:rgb(255, 201, 163)" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:rgb(255, 201, 163)" href="/about">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" style="color:rgb(255, 201, 163)" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Product
            </a>
            <ul class="dropdown-menu" style="background-color: rgb(191, 73, 38)">
              <li><a class="dropdown-item" href="/product">All Products</a></li>
              <li><a class="dropdown-item" href="/product/buckets">Bucket</a></li>
              <li><a class="dropdown-item" href="/product/baloon">Baloon</a></li>
              <li><a class="dropdown-item" href="/product/trophy">Trophy</a></li>
              {{-- <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="background: transparent; border: 1px solid rgb(255, 201, 163);">
          <button class="btn" style="background: rgb(255, 201, 163); border: 1px solid rgb(255, 201, 163)" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>