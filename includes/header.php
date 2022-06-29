<!-- // being loader -->
<div id="loader">
        <div class="spinner">
            <div></div>
            <div></div>
          </div>
      </div>
    <!-- // end loader -->
    <!-- // being topbar -->
   
    <section class="topbar d-none d-lg-block d-xl-block">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <p>
              Welcome to our store call
              <a href="<?php echo BASE_URL; ?>tel:+1123456789">+1 123 4567 89</a> for Support
            </p>
          </div>
          <div class="col-md-4 text-end">
            <ul class="list-inline">
              <li class="list-inline-item">
                <select class="form-select">
                  <option value="english">English</option>
                  <option value="spanish">Spanish</option>
                  <option value="german">German</option>
                </select>
              </li>
              <li class="list-inline-item">
                <select class="form-select">
                  <option value="USD">USD</option>
                  <option value="POUND">POUND</option>
                  <option value="EURO">EURO</option>
                </select>
              </li>
              <li class="list-inline-item"><a href="<?php echo BASE_URL; ?>#">Login</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- // end topbar -->
    <!-- // being offcanvasMenu -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <h2 class="logo-name offcanvas-title">Venus Handicraft</h2>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL; ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL; ?>about-us">About Us</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="<?php echo BASE_URL; ?>#"
              id="navbarDropdown"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Products
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>product-list">Iron Handicrafts</a></li>
              <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>product-list">Glass Handicrafts</a></li>
              <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>product-list">Brass Handicrafts</a></li>
              <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>product-list">Wood Handicrafts</a></li>
              <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>product-list">Aluminium Handicrafts</a></li>
              <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>product-list">Handicraft Decorative</a></li>
              <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>product-list">Tables wares</a></li>
              <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>product-list">Home Décor</a></li>
              <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>product-list">Candle Accessories</a></li>
            </ul>
            
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL; ?>gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL; ?>contact-us">Contact Us</a>
          </li>
        </ul>
        
        </div>
      </div>
    </div>
    <!-- // end offcanvasMenu -->
    <!-- // being header -->
    <header>
      <div class="container">
        <div class="row justify-content-between align-items-center">
          <div class="col-6 col-md-2 order-md-1">
            <div class="logo">
              <button class="btn d-block d-lg-none d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
                <i class="fas fa-align-left"></i>
              </button>
              <h2 class="logo-name  d-none d-lg-block d-xl-block">Venus Handicraft</h2>
            </div>
          </div>
           <div class="col-6 col-md-1 order-md-3 text-end">
            <ul class="list-inline user-account">
              <li class="list-inline-item">
                <a href="<?php echo BASE_URL; ?>#">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="18"
                    height="18"
                    fill="currentColor"
                    class="bi bi-person"
                    viewBox="0 0 18 18"
                  >
                    <path
                      d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"
                    />
                  </svg>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="<?php echo BASE_URL; ?>#">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="18"
                    height="18"
                    fill="currentColor"
                    class="bi bi-heart emptyHeart"
                    viewBox="0 0 18 18"
                  >
                    <path
                      d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="18"
                    height="18"
                    fill="currentColor"
                    class="fillHeart bi bi-heart-fill"
                    viewBox="0 0 18 18"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"
                    />
                  </svg>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="<?php echo BASE_URL; ?>#">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="18"
                    height="18"
                    fill="currentColor"
                    class="bi bi-bag emptyCart"
                    viewBox="0 0 18 18"
                  >
                    <path
                      d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="18"
                    height="18"
                    fill="currentColor"
                    class="fillCart bi bi-bag-check"
                    viewBox="0 0 18 18"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"
                    />
                    <path
                      d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"
                    />
                  </svg>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-12 col-md-8 order-md-2">
            <div class="search-wrapper w-100">
              <form class="row g-0">
                <div class="col-auto d-none d-lg-block d-xl-block">
                  <select class="form-select">
                    <option value="">All Categories</option>
                    <option value="Iron Handicrafts">Iron Handicrafts</option>
                    <option value="Glass Handicrafts">Glass Handicrafts</option>
                    <option value="Brass Handicrafts">Brass Handicrafts</option>
                    <option value="Wood Handicrafts">Wood Handicrafts</option>
                    <option value="Aluminium Handicrafts">
                      Aluminium Handicrafts
                    </option>
                    <option value="Handicraft Decorative">
                      Handicraft Decorative
                    </option>
                    <option value="Tables Wres">Tables Wares</option>
                    <option value="Home Décor">Home Décor</option>
                    <option value="Candle Accessories">
                      Candle Accessories
                    </option>
                  </select>
                </div>
                <div class="col-8">
                  <input
                    type="search"
                    class="form-control"
                    id="searchCategory"
                    placeholder="Search for Product"
                  />
                </div>
                <div class="col-4 col-md-auto">
                  <button type="button" class="">
                    <i class="fa fa-search"></i> Search
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- // end header -->
    <!-- // being navigation -->
    <nav id="navbar_smooth" class="navbar navbar-expand-lg navbar-light bg-white shadow-sm d-none d-md-block d-lg-block d-xl-block">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL; ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo BASE_URL; ?>about-us">About Us</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="<?php echo BASE_URL; ?>product-list"
                role="button"
              >
                Products
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>product-list">Iron Handicrafts</a></li>
                <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>product-list">Glass Handicrafts</a></li>
                <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>product-list">Brass Handicrafts</a></li>
                <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>product-list">Wood Handicrafts</a></li>
                <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>product-list">Aluminium Handicrafts</a></li>
                <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>product-list">Handicraft Decorative</a></li>
                <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>product-list">Tables wares</a></li>
                <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>product-list">Home Décor</a></li>
                <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>product-list">Candle Accessories</a></li>
              </ul>
              
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo BASE_URL; ?>gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo BASE_URL; ?>contact-us">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- // end navigation -->