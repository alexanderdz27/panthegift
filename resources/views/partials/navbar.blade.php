<nav class="navbar navbar-expand-lg px-5" style="background-color: rgb(191, 73, 38); ">
    <div class="container-fluid">
      <a class="navbar-brand" style="color:rgb(255, 201, 163); font-weight:bold" href="/">PANTHEGIFT</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-light" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="/about">About</a>
          </li>
          <li class="nav-item dropdown text-light">
            <a class="nav-link dropdown-toggle text-light" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Product
            </a>
            <ul class="dropdown-menu" style="background-color: rgb(191, 73, 38)">
              <li><a class="dropdown-item text-light" onmouseover="this.style.backgroundColor='rgba(0,0,0,0.1)'" onmouseout="this.style.backgroundColor='rgb(191,73,38)'" href="/products">All Products</a></li>
              <li><a class="dropdown-item text-light" onmouseover="this.style.backgroundColor='rgba(0,0,0,0.1)'" onmouseout="this.style.backgroundColor='rgb(191,73,38)'"href="/products?category=bucket">Bucket</a></li>
              <li><a class="dropdown-item text-light" onmouseover="this.style.backgroundColor='rgba(0,0,0,0.1)'" onmouseout="this.style.backgroundColor='rgb(191,73,38)'"href="/products?category=baloon">Baloon</a></li>
              <li><a class="dropdown-item text-light" onmouseover="this.style.backgroundColor='rgba(0,0,0,0.1)'" onmouseout="this.style.backgroundColor='rgb(191,73,38)'"href="/products?category=trophy">Trophy</a></li>
              {{-- <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search" action="/products">
            {{-- <input for="inputGroupSelect01" class="form-control me-2 text-light" name="search" type="text" value="{{ request('search') }}" style="background: transparent; border: 1px solid rgb(255, 201, 163);"> --}}
          <div class="input-group">
            <input type="text" name="search" value="{{ request('search') }}" class="form-control" aria-label="Text input with segmented dropdown button">
            <div class="input-group-append">
              <select name="category" class="custom-select input-group-append">
                <option value="" {{ request('category') === '' ? 'selected' : null}}>All Categories</option>
                <option value="baloon" {{ request('category') === 'baloon' ? 'selected' : null}}>Baloon</option>
                <option value="bucket" {{ request('category') === 'bucket' ? 'selected' : null}}>Bucket</option>
                <option value="trophy" {{ request('category') === 'trophy' ? 'selected' : null}}>Trophy</option>
              </select>
            </div>
          </div>
          <button class="btn" style="margin-left:5px; font-weight:600; color:rgb(191, 73, 38); background: rgb(255, 201, 163); border: 1px solid rgb(255, 201, 163)" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>