<?php include("./partials/Navbar.php"); ?>
  <div class="our-container">
    <div class="breadcrumbs">
        <ul class="steps">
        <li class="step">
            <a href="./index.php">
            <i class="fa fa-home" aria-hidden="true"></i>
            </a>
        </li>
        <li class="step">
            <a >
              <i class="far fa-id-card"></i> Contact
            </a>
        </li>
        </ul>
    </div>

      <div class="row contact">
  
  <div class="col-md-4">
  <div class="more-info mt-5">
                  <div class="my-4">
                    <div class="logo">
                      <img class = "img-fluid" src="./images/logo.png" alt=""> <br>
                      <h4 class = "text-center">Heath Promotion and <br> Education Association Nepal</h4>
                    </div>
                    <div class="section-info">
                      <div class="phone-no d-flex">
                        <i class="fas fa-phone-alt fa-2x pr-2 pt-2"></i>
                        <span><a href="tel-to:014370370">01-4370370</a> <br> <a href="mailto:hepean13@gmail.com">hepean13@gmail.com</a> </span>
                      </div>
                      <br>
                      <div class="d-flex">
                        <i class="fas fa-home fa-2x pr-2 pt-2"></i> Baneshwor <br> Kathmandu Nepal
                      </div>
                    </div>
                  </div>
                </div>
    <!-- <b>Customer service:</b> <br />
    Phone: +1 129 209 291<br />
    E-mail: <a href="mailto:support@mysite.com">support@mysite.com</a><br />
    <br /><br />
    <b>Headquarter:</b><br />
    Company Inc, <br />
    Las vegas street 201<br />
    55001 Nevada, USA<br />
    Phone: +1 145 000 101<br />
    <a href="mailto:usa@mysite.com">usa@mysite.com</a><br />


    <br /><br />
    <b>Hong kong:</b><br />
    Company HK Litd, <br />
    25/F.168 Queen<br />
    Wan Chai District, Hong Kong<br />
    Phone: +852 129 209 291<br />
    <a href="mailto:hk@mysite.com">hk@mysite.com</a><br /> -->
  </div>
  <div class="col-md-8">
    <h4 class = "my-3">Fill the form below to contact us</h4>
      <form action="/post" method="post">
        <input class="form-control" name="name" placeholder="Name..." /><br />
        <input class="form-control" name="phone" placeholder="Phone..." /><br />
        <input class="form-control" name="email" placeholder="E-mail..." /><br />
        <textarea class="form-control" name="text" placeholder="How can we help you?" style="height:150px;"></textarea><br />
        <i>Upload necessary document and submit to us.</i>
        <div class="d-flex justify-content-between">
        <!-- <div class="input-group"> -->
        <div class="file btn btn-lg btn-secondary">
							Upload
							<input type="file" name="file"/>
						</div>
            <!-- <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="button">Button</button>
            </div> -->
        <!-- </div> -->
        <!-- <button class = "btn btn-primary"><input class=" px-4" type="submit" value="Send" /></button><br /><br /> -->
        <button type="submit" class="btn ml-3 btn-lg btn-primary px-4 py-1">
              <a class = "text-white" href="#">Send <i class="far fa-paper-plane"></i></i></a>
        </button>
      </div>
      </form>
  </div>
</div>

</div>

      </div>
  </div>



<?php include("./partials/Donate.php"); ?>

<?php include("./partials/Footer.php"); ?>