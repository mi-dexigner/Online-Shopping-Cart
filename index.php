<?php
require_once 'settings.php';
require_once 'common/head.php'; 
require_once 'includes/header.php'; 
?>
<!-- // being slider-banner -->
<section class="slider-banner py-3">
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col-md-9">
           <div class="row">
            <div class="col-md-3">
            <div class="categories-sidebar">
            <h3> TOP CATEGORIES</h3>
            <ul>
                <li></li>
            </ul>
            </div>
            </div>
            <div class="col-md-9">
            <div
              id="carouselMain"
              class="carousel slide"
              data-bs-ride="carousel"
            >
              <div class="carousel-indicators">
                <button
                  type="button"
                  data-bs-target="#carouselMain"
                  data-bs-slide-to="0"
                  class="active"
                  aria-current="true"
                  aria-label="Slide 1"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselMain"
                  data-bs-slide-to="1"
                  aria-label="Slide 2"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselMain"
                  data-bs-slide-to="2"
                  aria-label="Slide 3"
                ></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="assets/img/slide.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                  <div class=" carousel-caption d-none d-lg-block d-xl-block">
                    <h3>Venus Handicrafts</h3>
                    <p>
                     Amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et do lore magna aliqua.Lonsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    </p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img
                    src="assets/img/slide.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                  <div class=" carousel-caption d-none d-lg-block d-xl-block">
                    <h3>Venus Handicrafts</h3>
                    <p>
                      Amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et do lore magna aliqua.Lonsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                     </p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img
                    src="assets/img/slide.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                  <div class=" carousel-caption d-none d-lg-block d-xl-block">
                    <h3>Venus Handicrafts</h3>
                    <p>
                      Amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et do lore magna aliqua.Lonsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                     </p>
                  </div>
                </div>
              </div>
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselMain"
                data-bs-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselMain"
                data-bs-slide="next"
              >
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            </div>
           </div>
          </div>
          <div class="col-md-3  d-none d-md-block d-lg-block d-xl-block">
            <div class="banner" style="background-image: url('assets/img/special-count-bg.jpg');">
            <div class="text-center w-100">
              <div class="btn-transform-effect label">
                <small class="label">Sale Up to</small>
              </div>
              <h2>50% Off</h2>
              <a href="#" class="stretched-link">Shop Now <i class="fa fa-arrow-right"></i></a>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- // end slider-banner -->
<!-- // being categories -->
<section class="categories">
      <div class="container">
        <div class="row">
          <!-- // being category slide -->        
          <div class="swiper categories-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="category-box">
                  <i class="category-icon"></i>
                  <h5>Iron Handicrafts</h5>
                  <h6>200 products</h6>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="category-box">
                  <i class="category-icon"></i>
                  <h5>Glass Handicrafts</h5>
                  <h6>100 products</h6>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="category-box">
                  <i class="category-icon"></i>
                  <h5>Brass Handicrafts</h5>
                  <h6>300 products</h6>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="category-box">
                  <i class="category-icon"></i>
                  <h5>Wood Handicrafts</h5>
                  <h6>200 products</h6>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="category-box">
                  <i class="category-icon"></i>
                  <h5>Aluminium Handicrafts</h5>
                  <h6>200 products</h6>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="category-box">
                  <i class="category-icon"></i>
                  <h5>Handicraft Decorative</h5>
                  <h6>200 products</h6>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="category-box">
                  <i class="category-icon"></i>
                  <h5>Tables Wares</h5>
                  <h6>200 products</h6>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="category-box">
                  <i class="category-icon"></i>
                  <h5>Home Décor</h5>
                  <h6>200 products</h6>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="category-box">
                  <i class="category-icon"></i>
                  <h5>Candle Accessories</h5>
                  <h6>200 products</h6>
                </div>
              </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          
          </div>
        <!-- // end category slide -->   
        </div>
      </div>
    </section>
    <!-- // end categories -->
    <!-- // being products recommend-for-you -->
    <section class="product-tabs recommend-for-you">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="heading text-md-start">
              <h2>Recommend For you</h2>
            </div>
          </div>
          <div class="col-md-6">
          </div>
        </div>
        <div class="row mt-3 mb-3 justify-content-between">
          <!-- // being list product -->
          <div class="list-product">
            <div class="thumbnail">
            <a href="" class="stretched-link"><img src="assets/img/IronHandicrafts/01.jpeg" alt="IronHandicrafts"></a>
            </div>
            <div class="wishlist">
              <a href="#">
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
            </div>
            <div class="list-product-caption">
              <h2>Iron Wall Décor Tree </h2>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <span>(400)</span>
              </div>
              <div class="price">
                $40 <s>$60</s>
              </div>
            </div>
          </div>
          <!-- // end list product -->
          <!-- // being list product -->
          <div class="list-product">
            <div class="thumbnail">
            <a href="" class="stretched-link"><img src="assets/img/IronHandicrafts/02.jpeg" alt="IronHandicrafts"></a>
            </div>
            <div class="wishlist">
              <a href="#">
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
            </div>
            <div class="list-product-caption">
              <h2>Iron Wall Decor</h2>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <span>(200)</span>
              </div>
              <div class="price">
                $20 <s>$30</s>
              </div>
            </div>
          </div>
          <!-- // end list product -->
          <!-- // being list product -->
          <div class="list-product">
            <div class="thumbnail">
            <a href="" class="stretched-link"><img src="assets/img/IronHandicrafts/03.jpeg" alt="IronHandicrafts"></a>
            </div>
            <div class="wishlist">
              <a href="#">
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
            </div>
            <div class="list-product-caption">
              <h2>Ganeshji Tealight Candle</h2>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <span>(800)</span>
              </div>
              <div class="price">
                $7 <s>$16</s>
              </div>
            </div>
          </div>
          <!-- // end list product -->
          <!-- // being list product -->
          <div class="list-product">
            <div class="thumbnail">
            <a href="" class="stretched-link"><img src="assets/img/IronHandicrafts/04.jpeg" alt="IronHandicrafts"></a>
            </div>
            <div class="wishlist">
              <a href="#">
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
            </div>
            <div class="list-product-caption">
              <h2>Wrought Iron Crafts</h2>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span>(1000)</span>
              </div>
              <div class="price">
                $29 <s>$36</s>
              </div>
            </div>
          </div>
          <!-- // end list product -->
          <!-- // being list product -->
          <div class="list-product">
            <div class="thumbnail">
            <a href="" class="stretched-link"><img src="assets/img/IronHandicrafts/05.jpeg" alt="IronHandicrafts"></a>
            </div>
            <div class="wishlist">
              <a href="#">
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
            </div>
            <div class="list-product-caption">
              <h2>Glass Epergne</h2>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <span>(100)</span>
              </div>
              <div class="price">
                $56 <s>$70</s>
              </div>
            </div>
          </div>
          <!-- // end list product -->
          <!-- // being list product -->
          <div class="list-product">
            <div class="thumbnail">
            <a href="" class="stretched-link"><img src="assets/img/IronHandicrafts/06.jpeg" alt="IronHandicrafts"></a>
            </div>
            <div class="wishlist">
              <a href="#">
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
            </div>
            <div class="list-product-caption">
              <h2>Boro Glass Desk Decor</h2>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <span>(20)</span>
              </div>
              <div class="price">
                $5 <s>$10</s>
              </div>
            </div>
          </div>
          <!-- // end list product -->
          <!-- // being list product -->
          <div class="list-product">
            <div class="thumbnail">
            <a href="" class="stretched-link"><img src="assets/img/IronHandicrafts/07.jpeg" alt="IronHandicrafts"></a>
            </div>
            <div class="wishlist">
              <a href="#">
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
            </div>
            <div class="list-product-caption">
              <h2>Glass Toffee Candy</h2>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <span>(500)</span>
              </div>
              <div class="price">
                $60 <s>$120</s>
              </div>
            </div>
          </div>
          <!-- // end list product -->
          <!-- // being list product -->
          <div class="list-product">
            <div class="thumbnail">
            <a href="" class="stretched-link"><img src="assets/img/IronHandicrafts/08.jpeg" alt="IronHandicrafts"></a>
            </div>
            <div class="wishlist">
              <a href="#">
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
            </div>
            <div class="list-product-caption">
              <h2>7 Glass Elephants</h2>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <span>(100)</span>
              </div>
              <div class="price">
                $15 <s>$30</s>
              </div>
            </div>
          </div>
          <!-- // end list product -->
          <!-- // being list product -->
          <div class="list-product">
            <div class="thumbnail">
            <a href="" class="stretched-link"><img src="assets/img/IronHandicrafts/09.jpg" alt="IronHandicrafts"></a>
            </div>
            <div class="wishlist">
              <a href="#">
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
            </div>
            <div class="list-product-caption">
              <h2>Agarbatti Stand Holder</h2>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span>(5000)</span>
              </div>
              <div class="price">
                $100 <s>$120</s>
              </div>
            </div>
          </div>
          <!-- // end list product -->
          <!-- // being list product -->
          <div class="list-product">
            <div class="thumbnail">
            <a href="" class="stretched-link"><img src="assets/img/IronHandicrafts/10.jpg" alt="IronHandicrafts"></a>
            </div>
            <div class="wishlist">
              <a href="#">
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
            </div>
            <div class="list-product-caption">
              <h2>Ayatul Kursi Wooden Wall Clock</h2>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <span>(2000)</span>
              </div>
              <div class="price">
                $200 <s>$250</s>
              </div>
            </div>
          </div>
          <!-- // end list product -->
          <!-- // being list product -->
          <div class="list-product">
            <div class="thumbnail">
            <a href="" class="stretched-link"><img src="assets/img/IronHandicrafts/11.jpeg" alt="IronHandicrafts"></a>
            </div>
            <div class="wishlist">
              <a href="#">
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
            </div>
            <div class="list-product-caption">
              <h2>Brown Antique Handicraft Wooden</h2>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <span>(500)</span>
              </div>
              <div class="price">
                $35
              </div>
            </div>
          </div>
          <!-- // end list product -->
          <!-- // being list product -->
          <div class="list-product">
            <div class="thumbnail">
            <a href="" class="stretched-link"><img src="assets/img/IronHandicrafts/12.jpeg" alt="IronHandicrafts"></a>
            </div>
            <div class="wishlist">
              <a href="#">
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
            </div>
            <div class="list-product-caption">
              <h2>Handicraft Wooden Jharokha</h2>
              <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <span>(700)</span>
              </div>
              <div class="price">
                $400 <s>$550</s>
              </div>
            </div>
          </div>
          <!-- // end list product -->
        </div>
      </div>
    </section>
    <!-- // end products recommend-for-you -->
    <!-- // being blog-section -->
    <section class="blog-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-8">
           <div class="heading">
             <h2>Latest Blog</h2>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat nobis accusamus, ipsum quis excepturi temporibus inventore consequatur quam neque modi eveniet optio dignissimos rem blanditiis itaque et ea molestias possimus!</p>
           </div>
          </div>
        </div>
        <div class="row  row-cols-1 row-cols-md-3 g-4">
 <!-- // being single-post -->
 <div class="col">
  <div class="card single-blog">
   
    <div class="card-body">
      <a href="#" class="d-block">
        <img src="assets/img/blog/blog01.jpg" class="card-img-top" alt="blog1.jpg">
    </a>
    <div class="blog-des mt-4">
      <h5 class="card-title mb-2"><a href="#">Inteligent Transitions In Design</a></h5>
      <ul class="admin-post mb-3">
        <li>
            <span class="fas fa-user"></span><a href="#admin"> by Admin</a>
        </li>
        <li>
            <p><span class="fas fa-clock"></span> Oct 31, 2020</p>
        </li>
        <li>
            <a href="#comments"><span class="fas fa-comments"></span> 3</a>
        </li>
    </ul>
    <p class="card-text">Nulla eu elementum quam. magna purus, nec. semper at vel,
      ipsum dolor et init. magna purus, nec.
  </p>
</div>
    </div>
  </div>
</div>
<!-- // end single-post -->
 <!-- // being single-post -->
 <div class="col">
  <div class="card single-blog">
   
    <div class="card-body">
      <a href="#" class="d-block">
        <img src="assets/img/blog/blog02.jpg" class="card-img-top" alt="blog2">
    </a>
    <div class="blog-des mt-4">
      <h5 class="card-title mb-2"><a href="#">Inteligent Transitions In Design</a></h5>
      <ul class="admin-post mb-3">
        <li>
            <span class="fas fa-user"></span><a href="#admin"> by Admin</a>
        </li>
        <li>
            <p><span class="fas fa-clock"></span> Oct 31, 2020</p>
        </li>
        <li>
            <a href="#comments"><span class="fas fa-comments"></span> 3</a>
        </li>
    </ul>
    <p class="card-text">Nulla eu elementum quam. magna purus, nec. semper at vel,
      ipsum dolor et init. magna purus, nec.
  </p>
</div>
    </div>
  </div>
</div>
<!-- // end single-post -->
 <!-- // being single-post -->
 <div class="col">
  <div class="card single-blog">
   
    <div class="card-body">
      <a href="#" class="d-block">
        <img src="assets/img/blog/blog03.jpg" class="card-img-top" alt="blog3">
    </a>
    <div class="blog-des mt-4">
      <h5 class="card-title mb-2"><a href="#">Inteligent Transitions In Design</a></h5>
      <ul class="admin-post mb-3">
        <li>
            <span class="fas fa-user"></span><a href="#admin"> by Admin</a>
        </li>
        <li>
            <p><span class="fas fa-clock"></span> Oct 31, 2020</p>
        </li>
        <li>
            <a href="#comments"><span class="fas fa-comments"></span> 3</a>
        </li>
    </ul>
    <p class="card-text">Nulla eu elementum quam. magna purus, nec. semper at vel,
      ipsum dolor et init. magna purus, nec.
  </p>
</div>
    </div>
  </div>
</div>
<!-- // end single-post -->
 <!-- // being single-post -->
 <div class="col">
  <div class="card single-blog">
   
    <div class="card-body">
      <a href="#" class="d-block">
        <img src="assets/img/blog/blog04.jpg" class="card-img-top" alt="blog4">
    </a>
    <div class="blog-des mt-4">
      <h5 class="card-title mb-2"><a href="#">Inteligent Transitions In Design</a></h5>
      <ul class="admin-post mb-3">
        <li>
            <span class="fas fa-user"></span><a href="#admin"> by Admin</a>
        </li>
        <li>
            <p><span class="fas fa-clock"></span> Oct 31, 2020</p>
        </li>
        <li>
            <a href="#comments"><span class="fas fa-comments"></span> 3</a>
        </li>
    </ul>
    <p class="card-text">Nulla eu elementum quam. magna purus, nec. semper at vel,
      ipsum dolor et init. magna purus, nec.
  </p>
</div>
    </div>
  </div>
</div>
<!-- // end single-post -->
 <!-- // being single-post -->
 <div class="col">
  <div class="card single-blog">
   
    <div class="card-body">
      <a href="#" class="d-block">
        <img src="assets/img/blog/blog05.jpg" class="card-img-top" alt="blog5">
    </a>
    <div class="blog-des mt-4">
      <h5 class="card-title mb-2"><a href="#">Inteligent Transitions In Design</a></h5>
      <ul class="admin-post mb-3">
        <li>
            <span class="fas fa-user"></span><a href="#admin"> by Admin</a>
        </li>
        <li>
            <p><span class="fas fa-clock"></span> Oct 31, 2020</p>
        </li>
        <li>
            <a href="#comments"><span class="fas fa-comments"></span> 3</a>
        </li>
    </ul>
    <p class="card-text">Nulla eu elementum quam. magna purus, nec. semper at vel,
      ipsum dolor et init. magna purus, nec.
  </p>
</div>
    </div>
  </div>
</div>
<!-- // end single-post -->
 <!-- // being single-post -->
 <div class="col">
  <div class="card single-blog">
   
    <div class="card-body">
      <a href="#" class="d-block">
        <img src="assets/img/blog/blog06.jpg" class="card-img-top" alt="blog6">
    </a>
    <div class="blog-des mt-4">
      <h5 class="card-title mb-2"><a href="#">Inteligent Transitions In Design</a></h5>
      <ul class="admin-post mb-3">
        <li>
            <span class="fas fa-user"></span><a href="#admin"> by Admin</a>
        </li>
        <li>
            <p><span class="fas fa-clock"></span> Oct 31, 2020</p>
        </li>
        <li>
            <a href="#comments"><span class="fas fa-comments"></span> 3</a>
        </li>
    </ul>
    <p class="card-text">Nulla eu elementum quam. magna purus, nec. semper at vel,
      ipsum dolor et init. magna purus, nec.
  </p>
</div>
    </div>
  </div>
</div>
<!-- // end single-post -->

        </div>
        <div class="row justify-content-center mt-5">
         <div class="col-md-2">
          <a href="#" class="button">View All</a>
         </div>
        </div>
      </div>
    </section>
    <!-- // end blog-section -->
    <!-- // being our-brand -->
    <section class="our-brand">
      <div class="container">
        <div class="row">
          <!-- // being brand-slider -->
          <div class="swiper brand-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="assets/img/brand/brand-01.png" class="w-100" alt="brand-01">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/brand/brand-02.png" class="w-100" alt="brand-02">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/brand/brand-03.png" class="w-100" alt="brand-03">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/brand/brand-04.png" class="w-100" alt="brand-04">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/brand/brand-05.png" class="w-100" alt="brand-05">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/brand/brand-06.png" class="w-100" alt="brand-06">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/brand/brand-07.png" class="w-100" alt="brand-07">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/brand/brand-08.png" class="w-100" alt="brand-08">
              </div>
              
            </div>
            <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
          </div>
          <!-- // end brand-slider -->
        </div>
      </div>
    </section>
    <!-- // end our-brand -->
<?php 
require_once 'includes/footer.php'; 
require_once 'common/foot.php'; 
?>