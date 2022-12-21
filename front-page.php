<?php /*Template Name: Home */
get_header();
if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
} else {
    _e('Sorry, no posts matched your criteria.', 'textdomain');
}
require('carousel-temp1.php');
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">Search

        </head>

<body>
  <br></br>
  <div class="mb-3">
    <div class="container mb-3">
      <div class="row">
        <div class="col">
          <input type="text" placeholder="Search e.g. Sunroof" class="w-100 form-control">
        </div>
      </div>
    </div>
    <form class="px-4 py-3">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="row">
              <div class="col">
                <label for="exampleDropdownFormEmail1" class="form-label">YEAR</label>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <select class="form-select bg-light w-100" aria-label=".Default select example" style="width:120px">
                  <option selected>Min</option>
                  <option value="1">2010</option>
                  <option value="2">2011</option>
                  <option value="3">2012</option>
                  <option value="4">2013</option>
                </select>
              </div>
              <div class="col-6">

                <select class="form-select bg-light w-100" aria-label="Default select example" style="width:120px">
                  <option selected>Max</option>
                  <option value="1">2019</option>
                  <option value="2">2020</option>
                  <option value="3">2021</option>
                  <option value="4">2022</option>



                </select>

              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="container mt-3 mb-4">
        <div class="row">
          <div class="col">
            <div><label for="exampleDropdownForm" class="form-label">MILEAGE</label></div>
            <div> <input type="range" name="mileage" id="mileage" class="w-100"></div>
          </div>
        </div>
      </div>




      </select>
      <div class="mb-3">
        <div class="container mb-3">
          <div class="row">
            <div class="col">
              <select class="form-select bg-light grey" aria-label="Default select example">
                <option selected>New/Used</option>
                <option value="1">New</option>
                <option value="2">Used</option>
              </select>
            </div>
          </div>
        </div>
        <div class="container ">
          <div class="row mb-3">
            <div class="col">
              <select class="form-select bg-light grey" aria-label="Default select example">
                <option selected>Manual/Automatic</option>
                <option value="1">Manual</option>
                <option value="2">Automatic</option>
                <option value="2">Semi-Automatic:Semi-Manual</option>
              </select>
            </div>
          </div>
          </select>
          <select class="form-select bg-light grey mb-3" aria-label="Default select example">
            <option selected>Fuel Type</option>
            <option value="1">Diesel</option>
            <option value="2">Petrol</option>
            <option value="3">Electric</option>
            <option value="4">Hybrid</option>
          </select>
        </div>
      </div>
  </div>
  </form>
  </div>
  </div>
  </div>
  </div>
  </form>



        </div>
        <div class="col-md-8">
            <?php echo do_shortcode('[showAllCars]'); ?>
        </div>
    </div>
</div>
<?php

get_footer();