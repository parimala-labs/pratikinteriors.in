<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <?php include 'header.php';?>
  <body>
    <!--? Preloader Start -->
    <?php include 'preloader.php';?>
    <?php include 'headermenu.php';?>

    <main>
      <!--? Hero Start -->
      <div class="slider-area2">
        <div class="slider-height2 hero-overly d-flex align-items-center">
          <div class="container">
            <div class="row">
              <div class="col-xl-12">
                <div class="hero-cap hero-cap2 text-center pt-80">
                  <h2>Contact US</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero End -->
      <!-- ================ contact section start ================= -->
      <section class="contact-section">
        <div class="container">

          <div class="row">
            <div class="col-12">
              <h3 id="status" class="contact-title" style="! Color:#2a2a2a">Get in Touch</h3>
            </div>
            <div class="col-lg-8">
              <form
                class="form-contact contact_form"
                action="contact_process.php"
                method="post"
                id="contactForm"
                novalidate="novalidate"
              >
              <div class="row">
                <div id="status" class="contact-title" style="! Color:#2a2a2a">
                </div>
              </div>
              <div class="row">
                <div class="col-12" style="display:none;">
                  <input type="text" id="website" name="website"/>
                </div>
              </div>
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <textarea
                        class="form-control w-100"
                        name="message"
                        id="message"
                        cols="30"
                        rows="9"
                        onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Enter Message'"
                        placeholder=" Enter Message"
                      ></textarea>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input
                        class="form-control valid"
                        name="name"
                        id="name"
                        type="text"
                        onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Enter your name'"
                        placeholder="Enter your name"
                      />
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input
                        class="form-control valid"
                        name="email"
                        id="email"
                        type="email"
                        onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Enter email address'"
                        placeholder="Email"
                      />
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <input
                        class="form-control"
                        name="subject"
                        id="subject"
                        type="text"
                        onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Enter Subject'"
                        placeholder="Enter Subject"
                      />
                    </div>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <button
                    type="submit"
                    class="button button-contactForm boxed-btn"
                  >
                    Send
                  </button>
                </div>
              </form>
            </div>
            <div class="col-lg-3 offset-lg-1">
              <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-home"></i></span>
                <div class="media-body">
                  <h3>Plot No. 444 Ayyappa Society, 100ft Road, Madhapur.</h3>
                  <p>Hyderabad, India</p>
                </div>
              </div>
              <div class="media contact-info">
                <span class="contact-info__icon"
                  ><i class="ti-tablet"></i
                ></span>
                <div class="media-body">
                  <h3>+91 7774023956 / +91 9000895275</h3>
                  <p>Mon to Sun 9am to 9pm</p>
                </div>
              </div>
              <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-email"></i></span>
                <div class="media-body">
                  <h3>info@prtikinteriors.in</h3>
                  <p>Send us your query anytime!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ================ contact section end ================= -->
      <?php include 'wanttowork.php';?>
    </main>
    <?php include 'scroll.php';?>
    <?php include 'footer.php';?>
    <?php include 'jsinclude.php';?>
  </body>
</html>
