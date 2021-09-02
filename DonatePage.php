<?php include("./partials/Navbar.php"); ?>
  <div class="breadcrumbs">
      <ul class="steps">
        <li class="step">
          <a href="./index.php">
            <i class="fa fa-home" aria-hidden="true"></i>
          </a>
        </li>
        <li class="step">
          <a >
            <i class="far fa-newspaper" aria-hidden="true"></i> Donate Page
          </a>
        </li>

      </ul>
    </div>
    <div class="row our-container">
      <div class="col-md-8">
        <div class="news-heading">
          <h3 class="news-heading">Donation</h3>
          <p class = "text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti magnam cupiditate, temporibus, voluptates quia non fugiat autem harum iste dolore perferendis eum odio ex atque optio reiciendis aliquid enim fuga? Dolores aspernatur unde ab commodi exercitationem maxime odio voluptatum perferendis, nihil, officiis saepe voluptate?</p>
        </div>
        <div >
          <h3 class="news-heading">Acknowledge on Donation to HEPEAN</h3>
          <p class = "text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti magnam cupiditate, temporibus, voluptates quia non fugiat autem harum iste dolore perferendis eum odio ex atque optio reiciendis aliquid enim fuga? Dolores aspernatur unde ab commodi exercitationem maxime odio voluptatum perferendis, nihil, officiis saepe voluptate?</p>
        </div>
        <div >
          <h3 class="news-heading">Acknowledge to Doners</h3>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">SN</th>
                <th scope="col">Acknowledge</th>
                <th scope="col">Donated Amount</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>By respective mail and further notified as  per necessary</td>
                <td>NRs. 1 - 1,000</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Will be published in official web  page in flash news system</td>
                <td>NRs. 1,000 - 10,00,</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Will be hanging the donor  photo in mail building forever</td>
                <td>NRs. 10,000 - 1,00,000</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td colspan = '2'>Materials such as Foods and Clothes are also accepted </td>
                <!-- <td>0000</td> -->
              </tr>
            </tbody>
          </table>
        </div>
        <div class="howto">
          <h3 class="news-heading">How to Donate</h3>
          <p class="news-heading">Step 1: Deposit wished amount in following bank account</p>
          <div class="border border-secondary p-3">
            <strong>
              <p>Account Holder Name: Health Promotion and Educational Association Nepal</p>
              <p>Account Number: 0000141222231769</p>
              <p>Bank Name: NIC ASIA Bank Ltd</p>
            </strong>
          </div>
          <div class="step-2 d-flex my-4">
            <p class="news-heading mt-3">Step 2: Download PDF and Fill the Form</p>
            <button type="button" class="btn ml-3 btn-lg btn-outline-primary px-4 py-1">
              <a href="./images/News.jpg" download>Download <i class="fas fa-download"></i></a>
            </button>
          </div>
          <div class="more-info">
            <h4 class = "news-heading text-center mt-3">For More Information</h4>
            <div class="d-flex align-items-center justify-content-around">
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
        </div>
      </div>

      <div class="col-md-4">
        <?php include("./partials/sidesection.php"); ?>
      </div>
    </div>

    

<?php include("./partials/Footer.php"); ?>