<nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #B59F78">
    <div class="container">
        <a class="navbar-brand" href="#"><b>TEPI KOPI</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse justify-content-end gap-4" id="navbarSupportedContent">
            <ul class="navbar-nav gap-4 ">
            <li class="nav-item">
                <a class="nav-link {{Request::path() == '/' ? 'active' : '';}}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::path() == 'shop' ? 'active' : '';}}" href="/shop">shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::path() == 'contact' ? 'active' : '';}}  " href="/contact">contact</a>
          </li>
        </ul>
        <form class="d-flex gap-4 align-items-center">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Login|Register</button>
            <div class="div-notif">
                <a href="/transaksi" class="fs-5">
                    <i class="fa-solid icon-nav fa-bag-shopping"></i>
                </a>
                <div class="circle">10</div>
            </div>
        </form>
      </div>
    </div>
  </nav>
