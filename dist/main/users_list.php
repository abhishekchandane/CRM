

<?php


  session_start();

  // echo session_start();

  if(!isset($_SESSION['user_id'])){
    header("Location : login.php");
    exit;
  }

  
?>

<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />

  <!-- Core Css -->
  <link rel="stylesheet" href="../assets/css/styles.css" />

  <title>Modernize Bootstrap Admin</title>
  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="../assets/libs/owl.carousel/dist/assets/owl.carousel.min.css" />
</head>

<body>
  <div class="toast toast-onload align-items-center text-bg-warning border-0" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-body hstack align-items-start gap-6">
      <i class="ti ti-alert-circle fs-6"></i>
      <div>
        <h5 class="text-white fs-3 mb-1">Manage  Users on CRM</h5>
        <h6 class="text-white fs-2 mb-0">Create, Update or Delete  </h6>
      </div>
      <button type="button" class="btn-close btn-close-white fs-2 m-0 ms-auto shadow-none" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
  <!-- Preloader -->
  <div class="preloader">
    <img src="../assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
  </div>
  <div id="main-wrapper">

      <?php
        include('sidebar/sidebar.php');
      ?>

    <div class="page-wrapper">


      <?php
        include('topbar/topbar.php');
      ?>


    <div class="body-wrapper">
        <div class="container-fluid">

        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
            <div class="card-body px-4 py-3">
              <div class="row align-items-center">
                <div class="col-9">
                  <h4 class="fw-semibold mb-8">Users Table</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a class="text-muted text-decoration-none" href="../main/index.html">Home</a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">Manage Users</li>
                    </ol>
                  </nav>
                </div>
                <div class="col-3">
                  <div class="text-center mb-n5">
                    <img src="../assets/images/breadcrumb/ChatBc.png" alt="modernize-img" class="img-fluid mb-n4">
                  </div>
                </div>
              </div>
            </div>
        </div>

        
            <div class="delete-after">
                <div class="table-responsive mb-4 border rounded-1"> 
                    <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                            <tr>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">User</h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">Role </h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">Team</h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">Status</h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">Budget</h6>
                            </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                <img src="../assets/images/profile/user-3.jpg" class="rounded-circle" width="40" height="40">
                                <div class="ms-3">
                                    <h6 class="fs-4 fw-semibold mb-0">Sunil Joshi</h6>
                                    <span class="fw-normal">Web Designer</span>
                                </div>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0 fw-normal fs-4">Elite Admin</p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                <a href="javascript:void(0)" class="text-bg-secondary text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                                    S
                                </a>
                                <a href="javascript:void(0)" class="text-bg-danger text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                                    D
                                </a>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-success-subtle text-success">Active</span>
                            </td>
                            <td>
                                <h6 class="fs-4 fw-semibold mb-0">$3.9k</h6>
                            </td>
                            </tr>
                            <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                <img src="../assets/images/profile/user-2.jpg" class="rounded-circle" width="40" height="40">
                                <div class="ms-3">
                                    <h6 class="fs-4 fw-semibold mb-0">Arlene McCoy</h6>
                                    <span class="fw-normal">Project Manager</span>
                                </div>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0 fw-normal fs-4">Real Homes WP Theme</p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                <a href="javascript:void(0)" class="text-bg-primary text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                                    A
                                </a>
                                <a href="javascript:void(0)" class="text-bg-warning text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                                    X
                                </a>
                                <a href="javascript:void(0)" class="text-bg-secondary text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                                    N
                                </a>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-warning-subtle text-warning">Pending</span>
                            </td>
                            <td>
                                <h6 class="fs-4 fw-semibold mb-0">$24.5k</h6>
                            </td>
                            </tr>
                            <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                <img src="../assets/images/profile/user-6.jpg" class="rounded-circle" width="40" height="40">
                                <div class="ms-3">
                                    <h6 class="fs-4 fw-semibold mb-0">Christopher Jamil</h6>
                                    <span class="fw-normal">Project Manager</span>
                                </div>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0 fw-normal fs-4">MedicalPro WP Theme</p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                <a href="javascript:void(0)" class="text-bg-danger text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                                    X
                                </a>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-primary-subtle text-primary">Completed</span>
                            </td>
                            <td>
                                <h6 class="fs-4 fw-semibold mb-0">$12.8k</h6>
                            </td>
                            </tr>
                            <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                <img src="../assets/images/profile/user-4.jpg" class="rounded-circle" width="40" height="40">
                                <div class="ms-3">
                                    <h6 class="fs-4 fw-semibold mb-0">Evelyn Pope</h6>
                                    <span class="fw-normal">Frontend Engineer</span>
                                </div>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0 fw-normal fs-4">Hosting Press HTML</p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                <a href="javascript:void(0)" class="text-bg-primary text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                                    Y
                                </a>
                                <a href="javascript:void(0)" class="text-bg-danger text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                                    X
                                </a>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-success-subtle text-success">Active</span>
                            </td>
                            <td>
                                <h6 class="fs-4 fw-semibold mb-0">$2.4k</h6>
                            </td>
                            </tr>
                            <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                <img src="../assets/images/profile/user-5.jpg" class="rounded-circle" width="40" height="40">
                                <div class="ms-3">
                                    <h6 class="fs-4 fw-semibold mb-0">Micheal Doe</h6>
                                    <span class="fw-normal">Content Writer</span>
                                </div>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0 fw-normal fs-4">Hosting Press HTML</p>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                <a href="javascript:void(0)" class="text-bg-secondary text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                                    S
                                </a>
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-danger-subtle text-danger">Cancel</span>
                            </td>
                            <td>
                                <h6 class="fs-4 fw-semibold mb-0">$9.3k</h6>
                            </td>
                            </tr>
                        </tbody>
                    </table> 
                </div>
            </div>



      </div>





      <script>
        function handleColorTheme(e) {
          document.documentElement.setAttribute("data-color-theme", e);
        }
      </script>
      <button class="btn btn-primary p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <i class="icon ti ti-settings fs-7"></i>
      </button>

        <?php
            include('settings.php');
        ?>
    </div>

    <!--  Search Bar -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content rounded-1">
          <div class="modal-header border-bottom">
            <input type="search" class="form-control fs-3" placeholder="Search here" id="search" />
            <a href="javascript:void(0)" data-bs-dismiss="modal" class="lh-1">
              <i class="ti ti-x fs-5 ms-3"></i>
            </a>
          </div>
          <div class="modal-body message-body" data-simplebar="">
            <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
            <ul class="list mb-0 py-2">
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="javascript:void(0)">
                  <span class="d-block">Modern</span>
                  <span class="text-muted d-block">/dashboards/dashboard1</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="javascript:void(0)">
                  <span class="d-block">Dashboard</span>
                  <span class="text-muted d-block">/dashboards/dashboard2</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="javascript:void(0)">
                  <span class="d-block">Contacts</span>
                  <span class="text-muted d-block">/apps/contacts</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="javascript:void(0)">
                  <span class="d-block">Posts</span>
                  <span class="text-muted d-block">/apps/blog/posts</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="javascript:void(0)">
                  <span class="d-block">Detail</span>
                  <span class="text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="javascript:void(0)">
                  <span class="d-block">Shop</span>
                  <span class="text-muted d-block">/apps/ecommerce/shop</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="javascript:void(0)">
                  <span class="d-block">Modern</span>
                  <span class="text-muted d-block">/dashboards/dashboard1</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="javascript:void(0)">
                  <span class="d-block">Dashboard</span>
                  <span class="text-muted d-block">/dashboards/dashboard2</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="javascript:void(0)">
                  <span class="d-block">Contacts</span>
                  <span class="text-muted d-block">/apps/contacts</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="javascript:void(0)">
                  <span class="d-block">Posts</span>
                  <span class="text-muted d-block">/apps/blog/posts</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="javascript:void(0)">
                  <span class="d-block">Detail</span>
                  <span class="text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="javascript:void(0)">
                  <span class="d-block">Shop</span>
                  <span class="text-muted d-block">/apps/ecommerce/shop</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--  Shopping Cart -->
    <div class="offcanvas offcanvas-end shopping-cart" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header justify-content-between py-4">
        <h5 class="offcanvas-title fs-5 fw-semibold" id="offcanvasRightLabel">
          Shopping Cart
        </h5>
        <span class="badge bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
      </div>
      <div class="offcanvas-body h-100 px-4 pt-0" data-simplebar>
        <ul class="mb-0">
          <li class="pb-7">
            <div class="d-flex align-items-center">
              <img src="../assets/images/products/product-1.jpg" width="95" height="75" class="rounded-1 me-9 flex-shrink-0" alt="modernize-img" />
              <div>
                <h6 class="mb-1">Supreme toys cooker</h6>
                <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
                <div class="d-flex align-items-center justify-content-between mt-2">
                  <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                  <div class="input-group input-group-sm w-50">
                    <button class="btn border-0 round-20 minus p-0 bg-success-subtle text-success" type="button" id="add1">
                      -
                    </button>
                    <input type="text" class="form-control round-20 bg-transparent text-muted fs-2 border-0 text-center qty" placeholder="" aria-label="Example text with button addon" aria-describedby="add1" value="1" />
                    <button class="btn text-success bg-success-subtle p-0 round-20 border-0 add" type="button" id="addo2">
                      +
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="pb-7">
            <div class="d-flex align-items-center">
              <img src="../assets/images/products/product-2.jpg" width="95" height="75" class="rounded-1 me-9 flex-shrink-0" alt="modernize-img" />
              <div>
                <h6 class="mb-1">Supreme toys cooker</h6>
                <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
                <div class="d-flex align-items-center justify-content-between mt-2">
                  <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                  <div class="input-group input-group-sm w-50">
                    <button class="btn border-0 round-20 minus p-0 bg-success-subtle text-success" type="button" id="add2">
                      -
                    </button>
                    <input type="text" class="form-control round-20 bg-transparent text-muted fs-2 border-0 text-center qty" placeholder="" aria-label="Example text with button addon" aria-describedby="add2" value="1" />
                    <button class="btn text-success bg-success-subtle p-0 round-20 border-0 add" type="button" id="addon34">
                      +
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="pb-7">
            <div class="d-flex align-items-center">
              <img src="../assets/images/products/product-3.jpg" width="95" height="75" class="rounded-1 me-9 flex-shrink-0" alt="modernize-img" />
              <div>
                <h6 class="mb-1">Supreme toys cooker</h6>
                <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
                <div class="d-flex align-items-center justify-content-between mt-2">
                  <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                  <div class="input-group input-group-sm w-50">
                    <button class="btn border-0 round-20 minus p-0 bg-success-subtle text-success" type="button" id="add3">
                      -
                    </button>
                    <input type="text" class="form-control round-20 bg-transparent text-muted fs-2 border-0 text-center qty" placeholder="" aria-label="Example text with button addon" aria-describedby="add3" value="1" />
                    <button class="btn text-success bg-success-subtle p-0 round-20 border-0 add" type="button" id="addon3">
                      +
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
        <div class="align-bottom">
          <div class="d-flex align-items-center pb-7">
            <span class="text-dark fs-3">Sub Total</span>
            <div class="ms-auto">
              <span class="text-dark fw-semibold fs-3">$2530</span>
            </div>
          </div>
          <div class="d-flex align-items-center pb-7">
            <span class="text-dark fs-3">Total</span>
            <div class="ms-auto">
              <span class="text-dark fw-semibold fs-3">$6830</span>
            </div>
          </div>
          <a href="../main/eco-checkout.html" class="btn btn-outline-primary w-100">Go to shopping cart</a>
        </div>
      </div>
    </div>
  </div>
  <div class="dark-transparent sidebartoggler"></div>



  <script src="../assets/js/vendor.min.js"></script>
  <!-- Import Js Files -->
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="../assets/js/theme/app.init.js"></script>
  <script src="../assets/js/theme/theme.js"></script>
  <script src="../assets/js/theme/app.min.js"></script>
  <script src="../assets/js/theme/sidebarmenu.js"></script>

  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

  <!-- highlight.js (code view) -->
  <script src="../assets/js/highlights/highlight.min.js"></script>
  <script>
  hljs.initHighlightingOnLoad();


  document.querySelectorAll("pre.code-view > code").forEach((codeBlock) => {
    codeBlock.textContent = codeBlock.innerHTML;
  });
</script>
  <script src="../assets/libs/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/js/dashboards/dashboard.js"></script>

  <script src="js/custom.js"></script>
  <script src="js/userProfile.js"></script>
</body>

</html>