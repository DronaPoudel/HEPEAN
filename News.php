<?php include("./partials/Navbar.php"); ?>
  <div class="our-container">
    <div class="breadcrumbs">
        <ul class="steps">
        <li class="step">
            <a href="#">
            <i class="fa fa-home" aria-hidden="true"></i>
            </a>
        </li>
        <li class="step">
            <a >
            <i class="far fa-newspaper" aria-hidden="true"></i> News
            </a>
        </li>
        </ul>
    </div>

      <div class="row">
          <div class="col-md-8">
            <div class="item">
                <h3 class = "news-heading my-3">Press Release - 2021</h3>
                <img class = "img-fluid" src="./images/Newspapercut.jpg" alt="#">
                <h3 class = "news-heading my-3">Officially Registered as an Organizational Woker</h3>
                <p class = "seeallNews">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo amet non nobis dolorum accusantium voluptas voluptatem repellendus blanditiis nisi expedita repudiandae possimus impedit sequi a corporis ea atque, ut quia, consequatur perferendis cum inventore. Vel veritatis voluptatum nisi sit nobis.Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo amet non nobis dolorum accusantium voluptas voluptatem repellendus blanditiis nisi expedita repudiandae possimus impedit sequi a corporis ea atque, ut quia, consequatur perferendis cum inventore. Vel veritatis voluptatum nisi sit nobis.
                </p>
                <div class="end-actions d-flex justify-content-start">
                    <span class = "pr-5"><i class="far fa-clock"></i> 4<sup>th</sup> August 2021 </span>
                    <span class = "pr-5"><i class="far fa-folder-open"></i> Announcement</span>
                    <button class = "btn btn-secondary expandBtn"  onClick = "showHideNews(); showHideButton();">Read Full</button>
                </div>
            </div>

            <div class="item">
                <h3 class = "news-heading my-3">Press Release - 2021</h3>
                <img class = "img-fluid" src="./images/Newspapercut.jpg" alt="#">
                <h3 class = "news-heading my-3">Officially Registered as an Organizational Woker</h3>
                <p class = "seeallNews">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo amet non nobis dolorum accusantium voluptas voluptatem repellendus blanditiis nisi expedita repudiandae possimus impedit sequi a corporis ea atque, ut quia, consequatur perferendis cum inventore. Vel veritatis voluptatum nisi sit nobis.</p>
                <div class="end-actions d-flex justify-content-start">
                    <span class = "pr-5"><i class="far fa-clock"></i> 4<sup>th</sup> August 2021 </span>
                    <span class = "pr-5"><i class="far fa-folder-open"></i> Announcement</span>
                    <button class = "btn btn-secondary expandBtn"  onClick = "showHideNews(); showHideButton();">Read Full</button>
                </div>
            </div>
        </div>
          <div class="col-md-4 my-3 mt-5">
            <?php include("./partials/sidesection.php"); ?>
          </div>
      </div>
  </div>

  <script>
      function showHideNews() {
  var toggle = document.querySelector(".seeallNews");
//   if (toggle.style.height == "62px") {
//     toggle.style.height = "100%";
//   } else {
    toggle.style.height = "100%";
//   }
}
function showHideButton () {
    var btntoggle = document.querySelector(".expandBtn");
    btntoggle.style.display = "none";
}
    </script>


<?php include("./partials/Donate.php"); ?>

<?php include("./partials/Footer.php"); ?>