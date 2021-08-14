<?php $page = 'Contact Page.';
$title_meta = '<title>Contact Us | Beroni Agro Processing</title>
<meta name="keywords" content="Agro Processing Company in Africa, Rice Processing in Nigeria, Sesame Processing, Cashew Processing, Agro Commodity export in Nigeria, Nigeria, Hibiscus exporter in Africa">';
?>

<!DOCTYPE html>
<html lang="en">
<?php require_once './components/layout/meta-data.php' ?>

<body>
  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <?php require_once './components/layout/header.php' ?>

  <div class="page-heading header-text contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Contact Us</h1>
          <span>feel free to send us a message now!</span>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-information">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="contact-item">
            <i class="fa fa-phone"></i>
            <h4>Phone</h4>
            <p>Give us a call today!
              <br>Abuja - <a href="tel:+23492924449">+234-9- 2924449</a>
              <br>Kano - <a href="tel:+2348085523725">+234- 8085523725</a>
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-item">
            <i class="fa fa-envelope"></i>
            <h4>Email</h4>
            <p>ou can also contact via our email, and we wil back to you in due time.</p>
            <a href="mailto:info@beroniagro.com">Email Us</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-item">
            <i class="fa fa-map-marker"></i>
            <h4>Location</h4>
            <p>Plot 833 House 2 Emmanuel<br>Aguna Crescent,</p>
            <a href="https://goo.gl/maps/48KWZBRrtjSzUn2k9">View on Google Maps</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="callback-form contact-us" style="margin-bottom: 0;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Send us a <em>message</em></h2>
            <span>HOW CAN WE HELP YOU TODAY</span>
          </div>
        </div>
        <div class="col-md-12">
          <div class="contact-form">
            <form id="contact" action="" method="post">
              <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                  </fieldset>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                  </fieldset>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="map">
    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7880.070062804625!2d7.409940224257857!3d9.060569123995787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb576dd4663b52f17!2sBeroni%20Energy%20Limited!5e0!3m2!1sen!2sng!4v1624718259664!5m2!1sen!2sng"></iframe>
       -->
    <iframe src="https://www.google.com/maps/d/embed?mid=1cuX53AuSGLSd5MtFvX8bTZmz9PhGN8li" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>

  <?php require_once './components/layout/footer.php' ?>
  <?php require_once './components/layout/scripts.php' ?>

  <script>
    $(function() {
      $("form#contact").submit(function(event) {
        console.log('working');
        $("form#contact").css('pointer-events', 'none');
        $('#form-submit').html("Please Wait...").attr("disabled", true);
        var str = $("form#contact").serializeArray();
        $.ajax({
          type: 'POST',
          url: './components/functions/email.php',
          data: str,
          cache: false,
          success: function(data) {
            var result = data;
            if (result == "successful") {
              $('#form-submit').html("Email Sent!").attr("disabled", false);
              $("form#contact").reset();
              $("form#contact").css('pointer-events', 'all') ;

              setTimeout(function () {
                $('#form-submit').html("Send Message");
              }, 2000);
            } else {
              alert("Request Not Successful. Try again.");
              $("form#contact").css('pointer-events', 'all');
              $('#form-submit').html("Send Message").attr("disabled", false);
            }
          },
          error: function(err) {
            alert(err);
            $("form#contact").css('pointer-events', 'all');
            $('#form-submit').html("Send Message").attr("disabled", false);
          }
        });

        event.preventDefault();
      });

    });
  </script>
</body>

</html>