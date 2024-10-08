<header class="sticky-header">
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top ">
            <div class="container align-items-center justify-content-evenly ">
              <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasNavbar"
              aria-controls="offcanvasNavbar"
              aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
              </button>
              <div></div>
              <a class="navbar-brand me-5 m-0" href="#"><img class="logo" src="/images/logo-removebg-preview.png" alt="" srcset=""></a>
              <div
              class="sidebar offcanvas offcanvas-end"
              tabindex="-1"
              id="offcanvasNavbar"
              aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header text-dark border-bottom" data-bs-theme="dark">
                  <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
                  <ul class="navbar-nav justify-content-center align-items-center fs-4 flex-grow-1">
                    <li class="nav-item">
                      <a class="nav-link <?= $home_page ?>" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                      <a class="nav-link <?= $services_page ?>" href="#">Browse</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link <?= $rates_page ?>" href="#">How it Works</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link <?= $about_page ?>" href="#">About us</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="d-flex align-items-center nav-icons">
                <a class="me-3" href=""><svg xmlns="http://www.w3.org/2000/svg" fill="white" class="bi bi-person-circle space-owner-prof" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                </svg></a>
              </div>
            </div>
          </nav>
          <div>
            <ul class="nav nav-pills align-items-center justify-content-evenly second-nav" style="background: #47B5FF; ">
                <li class="nav-item">
                    <a href="#" class="nav-link px-sm-0 nav2">
                        <i class="fa-solid fa-chart-column"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link px-sm-0 nav2">
                        <i class="fa-solid fa-users"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link px-sm-0  nav2">
                        <i class="fa-solid fa-coins"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link px-sm-0 nav2">
                        <i class="fa-solid fa-square-parking"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link px-sm-0 nav2">
                        <i class="fa-solid fa-ranking-star"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link px-sm-0 px-lg-2 nav2">
                        <i class="fa-solid fa-bell"></i>
                    </a>
                </li>
            </ul>
        </div>
</header>