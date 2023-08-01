<!-- Navbar -->
<link rel="stylesheet" href="/css/register.css">
<nav class="navbar navbar-expand-lg navbar-dark gradient-custom">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Navbar brand -->
      <a class="navbar-brand" href="/home">ConnectFriend</a>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left links -->
        <ul class="navbar-nav me-auto d-flex flex-row mt-3 mt-lg-0">
        </ul>
        <!-- Left links -->

        <!-- Right links -->
        <form class="d-flex input-group w-50 ms-lg-3 my-3 my-lg-0">
          <input type="search" class="form-control" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-light" type="button" data-mdb-ripple-color="dark">
            Search
          </button>
        </form>
        <ul class="navbar-nav ms-auto d-flex flex-row mt-3 mt-lg-0">
            <li class="nav-item text-center mx-2 mx-lg-1">
                <a class="nav-link" href="/requested">
                  Requested
                </a>
              </li>
            <li class="nav-item text-center mx-2 mx-lg-1">
                <a class="nav-link" href="/wishlist">
                  Wishlist
                </a>
              </li>
            <li class="nav-item text-center mx-2 mx-lg-1">
              <a class="nav-link" href="#">
                Messages
              </a>
            </li>

          </ul>
        <!-- Right links -->

        <form action="/logout" method="POST">
            @csrf
            <button class="btn btn-outline-light" type="submit" data-mdb-ripple-color="dark">Logout</button>
        </form>

      </div>
    </div>
  </nav>
