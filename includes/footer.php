<!-- // being footer -->
<footer class="footer">
      <div class="container">
        <div class="footer-topper border-bottom mb-4 py-4">
            <div class="row">
            <div class="col-md-3 col-6  order-md-1">
              <div class="footer-logo">
                <h3 class="logo-name">Online Art Stationary </h3>
              </div>
            </div>
              <div class="col-md-2 col-6  col-xs-3  order-md-3">
              <div class="telephone-sec">
                
                <div class="btn-transform-effect footer-top-icon">
                    <i class="fa fa-phone"></i>
                </div>
                 <a href="tel:+1123456789">+1 123 4567 89</a>
              </div>
            </div>
            <div class="col-md-7 col-12 order-md-2">
              <div class="search-wrapper w-100">
                <form class="row g-0">
                  <div class="col-9 col-md-9">
                    <input
                      type="search"
                      class="form-control"
                      id="emailSubscribe"
                      placeholder="Enter your email and Subscribe"
                    />
                  </div>
                  <div class="col-3 col-md-3">
                    <button type="button" class="">
                      <i class="fa fa-search"></i> Subscribe
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="widget col-md-3">
            <h5>Contact Us</h5>
            <address>Address: 116 Nhan Hoa,Nhan,Chin</address>
            <p>Email:support@onlineartstationary.com</p>
            <div class="py-3">
              <img src="assets/img/visa.jpg" alt="visa">
              <img src="assets/img/mastercard.jpg" alt="mastercard">
              <img src="assets/img/paypal.jpg" alt="paypal">
              <img src="assets/img/americal-express.jpg" alt="americal-express">
            </div>
          </div>
          <div class="widget col-md-3">
            <h5>Top Categories</h5>
            <ul class="list-unstyled">
            <?php
          $sql = "SELECT * FROM terms WHERE taxonomy = 'product_cat'";
        $statement = $db->prepare($sql);
        $statement->execute();
        $taxonomies = $statement->fetchAll(PDO::FETCH_OBJ);
        if($statement->rowCount() > 0):
        foreach($taxonomies as $term):
          ?>
              <li><a  href="<?php echo BASE_URL ;?>product-category/<?php echo $term->slug; ?>">
              <?php echo $term->name; ?></a></li>
              <?php endforeach;endif; ?> 
             
            </ul>
          </div>
          <div class="widget col-md-3">
            <h5>Quick Links</h5>
            <ul class="list-unstyled">
              <li>
                <a href="<?php echo BASE_URL ;?>about-us">About</a>
              </li>
              <li>
                <a href="<?php echo BASE_URL ;?>faqs">F.A.Q</a>
              </li>
              <li>
                <a href="<?php echo BASE_URL ;?>contact-us">Contact Us</a>
              </li>
              
            </ul>
          </div>
          <div class="widget col-md-3">
            <h5>Customer Support</h5>
            <ul class="list-unstyled">
              <li>
                <a href="#">Shipping and Returns</a>
              </li>
              <li>
                <a href="#">Order Tracking</a>
              </li>
              <li>
                <a href="#">Policy</a>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- // end footer -->
    <!-- // being footerBottom -->
    <section class="footerBottom">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-md-start text-center">
            <p>Copyright &copy; <span id="year"></span> All Right Reserved.</p>
          </div>
          <div class="col-md-6 text-md-end text-center">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#" class="btn-transform-effect instagram"
                  ><i class="fab fa-instagram"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="btn-transform-effect twitter"
                  ><i class="fab fa-twitter"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="btn-transform-effect linkedin"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="btn-transform-effect facebook"
                  ><i class="fab fa-facebook-f"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="btn-transform-effect youtube"
                  ><i class="fab fa-youtube"></i
                ></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- // end footerBottom -->