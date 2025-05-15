
<?php include 'header.php';?>
      <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom context-dark bg-overlay-60">
          <div class="container">
            <h2 class="breadcrumbs-custom-title">Contact</h2>
            <ul class="breadcrumbs-custom-path">
              <li><a href="https://disploy.com/">Home</a></li>
              <li class="active">Contact</li>
            </ul>
          </div>
          <div class="box-position" style="background-image: url(images/contact-us-banner.jpg);"></div>
        </div>
      </section>
      
      <!-- Contact information-->
      <section class="section section-sm section-first bg-default">
        <div class="container">
          <div class="row row-30 justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-cellphone55"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="tel:+1 224 244 9969">+1 224 244 9969</a></p>
                </div>
              </article>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-up104"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="#">1717 Langhorne Newtown Rd, Langhorne, PA 19047, United States</a></p>
                </div>
              </article>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="mailto:info@disploy.com">info@disploy.com</a></p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact Form-->
      <section class="section section-fluid text-left">
        <div class="section-sm bg-gray-300">
          <div class="container">
            <article class="title-classic">
              <div class="title-classic-title">
                <h3>Get in touch</h3>
              </div>
              <div class="title-classic-text">
                <p>If you have any questions, just fill in the contact form, and we will answer you shortly.</p>
              </div>
            </article>
            <form class="rd-form rd-form-variant-2 rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
              <div class="row row-14 gutters-14">
                <div class="col-md-4">
                  <div class="form-wrap">
                    <input class="form-input" id="contact-your-name-2" type="text" name="name" data-constraints="@Required">
                    <label class="form-label" for="contact-your-name-2">Your Name</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-wrap">
                    <input class="form-input" id="contact-email-2" type="email" name="email" data-constraints="@Email @Required">
                    <label class="form-label" for="contact-email-2">E-mail</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-wrap">
                    <input class="form-input" id="contact-phone-2" type="text" name="phone" data-constraints="@Numeric">
                    <label class="form-label" for="contact-phone-2">Phone</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-wrap">
                    <label class="form-label" for="contact-message-2">Message</label>
                    <textarea class="form-input textarea-lg" id="contact-message-2" name="message" data-constraints="@Required"></textarea>
                  </div>
                </div>
              </div>
              <button class="button button-primary button-pipaluk" type="submit">Send Message</button>
            </form>
          </div>
        </div>
      </section>
      <section class="section section-fluid pt-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3046.6836535517537!2d-74.93341618799056!3d40.216099367706356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c1556a3638cf9f%3A0xb7aa0fa73267d715!2sDisploy!5e0!3m2!1sen!2sin!4v1715686886949!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        
      </section>


      <!-- footer--> 
      <?php include 'footer.php';?>