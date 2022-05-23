<div id="fourth" class="content fourth ">
    <h1>This is the contact page</h1>
    <section id="contact" class="contact">
      <div class="container">

        <div class="row justify-content-center">

          <div class="col">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <h5>Location:</h5>
                  <p>125 College Rd<br>London, NW10 5HA</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <h5>Email:</h5>
                  <p>info@example.com<br>contact@example.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <h5>Call:</h5>
                  <p>+44 745589 5548<br>+44 2055895 2247</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-3 justify-content-center">
          <div class="col">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                    <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                    <label for="email">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="message">Message</label>
                <textarea class="form-control" name="message" rows="3" required></textarea>
              </div>
              <div class="text-center mt-2"><button class="btn btn-lg" type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
</div>
