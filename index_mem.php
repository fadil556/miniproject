<?php
include('condb.php');
$mem = "SELECT * FROM members ";
$mem1 = mysqli_query($con,$mem);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include('h.php');
    ?>
  </head>

  <body>
    <div class="container-xxl bg-white p-0">
      <!-- Spinner Start -->
      <div
        id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
      >
        <div
          class="spinner-border text-primary"
          style="width: 3rem; height: 3rem"
          role="status"
        >
          <span class="sr-only">Loading...</span>
        </div>
      </div>
      <!-- Spinner End -->

      <!-- Navbar Start -->
      <nav
        class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0"
      >
        <a
          href="index.html"
          class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5"
        >
          <h1 class="m-0 text-primary">JobEntry</h1>
        </a>
        <button
          type="button"
          class="navbar-toggler me-4"
          data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.html" class="nav-item nav-link active">Home</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Employee</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="job-list.html" class="dropdown-item">Login</a>
              </div>
              </div>
              <?php    
                           while($mem2 = mysqli_fetch_assoc($mem1)) 
                           {
                                       
                       ?>
              <div class="nav-item dropdown">
              <a
                href="#"
                class="nav-link dropdown-toggle"
                data-bs-toggle="dropdown"
                ><?php echo $mem2['username'];?></a
              >
              <?php  } ?>
              <div class="dropdown-menu rounded-0 m-0">
                <a href="index.php" class="dropdown-item">Logout</a>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <!-- Navbar End -->

      <!-- Carousel Start -->
      <div class="container-fluid p-0">
        <div class="owl-carousel header-carousel position-relative">
          <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="img/carousel-1.jpg" alt="" />
            <div
              class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
              style="background: rgba(43, 57, 64, 0.5)"
            >
              <div class="container">
                <div class="row justify-content-start">
                  <div class="col-10 col-lg-8">
                    <h1 class="display-3 text-white animated slideInDown mb-4">
                      Find The Perfect Job That You Deserved
                    </h1>
                    <p class="fs-5 fw-medium text-white mb-4 pb-2">
                      Vero elitr justo clita lorem. Ipsum dolor at sed stet sit
                      diam no. Kasd rebum ipsum et diam justo clita et kasd
                      rebum sea elitr.
                    </p>
                    <a
                      href=""
                      class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"
                      >Search A Job</a
                    >
                    <a
                      href=""
                      class="btn btn-secondary py-md-3 px-md-5 animated slideInRight"
                      >Find A Talent</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="img/carousel-2.jpg" alt="" />
            <div
              class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
              style="background: rgba(43, 57, 64, 0.5)"
            >
              <div class="container">
                <div class="row justify-content-start">
                  <div class="col-10 col-lg-8">
                    <h1 class="display-3 text-white animated slideInDown mb-4">
                      Find The Best Startup Job That Fit You
                    </h1>
                    <p class="fs-5 fw-medium text-white mb-4 pb-2">
                      Vero elitr justo clita lorem. Ipsum dolor at sed stet sit
                      diam no. Kasd rebum ipsum et diam justo clita et kasd
                      rebum sea elitr.
                    </p>
                    <a
                      href=""
                      class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"
                      >Search A Job</a
                    >
                    <a
                      href=""
                      class="btn btn-secondary py-md-3 px-md-5 animated slideInRight"
                      >Find A Talent</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Carousel End -->

      <!-- Search Start -->
      <div
        class="container-fluid bg-primary mb-5 wow fadeIn"
        data-wow-delay="0.1s"
        style="padding: 35px"
      >
        <div class="container">
          <div class="row g-2">
            <div class="col-md-10">
              <div class="row g-2">
                <div class="col-md-4">
                  <input
                    type="text"
                    class="form-control border-0"
                    placeholder="Keyword"
                  />
                </div>
                <div class="col-md-4">
                  <select class="form-select border-0">
                    <option selected>Category</option>
                    <option value="1">Category 1</option>
                    <option value="2">Category 2</option>
                    <option value="3">Category 3</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <select class="form-select border-0">
                    <option selected>Location</option>
                    <option value="1">Location 1</option>
                    <option value="2">Location 2</option>
                    <option value="3">Location 3</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <button class="btn btn-dark border-0 w-100">Search</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Search End -->

      <!-- Jobs Start -->
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="margin-top: 10px">
          <div class="row">
            <?php
            include('show_work.php');
            ?>
          </div>
        </div>
      </div>
    </div>
      <!-- Jobs End -->

      <!-- Testimonial Start -->
      <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s"></div>
      <!-- Testimonial End -->

      <!-- Footer Start -->
      <?php
        include("f.php");
      ?>
      <!-- Footer End -->

      <!-- Back to Top -->
      <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
        ><i class="bi bi-arrow-up"></i
      ></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>
<?php include('script4.php');?>