<?php
require_once 'settings.php';
require_once 'common/head.php'; 
require_once 'includes/header.php'; 
?>
    <!-- //being inner banner -->
    <section class="inner-banner py-5">
    <div class="container py-lg-4 py-md-3">
        <h2 class="title">Contact Us</h2>
    </div>
  </section>
  <!-- //end inner banner -->
  <!-- // being contact-info -->
  <div class="contact-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="contact-box">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <h2>email</h2>
                    <p><a href="#">support@venushandicrafts.com</a></p>
                    <p><a href="#">sale@venushandicrafts.com</a></p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="contact-box">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <h2>phone</h2>
                    <p>+21036985247</p>
                    <p>+214567893218</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="contact-box">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <h2>address</h2>
                    <p>665 Clinton Lane <br> Wilkes Barre, PA 18702</p>
                </div>
            </div>
        </div>
    </div>
</div>
  <!-- // end contact-info -->
  <!-- // being contact-info-wrapper -->
  <div class="contact-form-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 padding-left padding-right">
                <div class="contact-map">
                    <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2895687731!2d-74.26055986835598!3d40.697668402590374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1562582305883!5m2!1sen!2sin"
                    frameborder="0" id="contact-map" style="border:0" allowfullscreen=""></iframe>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 padding-right padding-left">
                <div class="hm_form">
                    <div class="col-lg-10 col-md-12">
                        <h1>send a message</h1>
                        <form class="form-inline" action="https://formsubmit.co/midexigner@gmail.com" method="POST">
                          <input type="hidden" name="_next" value="https://venus-handicrafts.netlify.app/thank-you.html">
                          <input type="hidden" name="_captcha" value="false">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="number" name="phone" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                            </div>
                            <div class="form-group textarea">
                                <textarea class="form-control" rows="3" id="message" name="message" placeholder="Message"></textarea>
                            </div>
                            <div class="con_btn">
                              <input type="text" name="_honey" style="display:none">
                                <button type="submit" class="btn btn-transform-effect hm_btn submit_frm">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <!-- // end contact-info-wrapper -->
<?php 
require_once 'includes/footer.php'; 
require_once 'common/foot.php'; 
?>