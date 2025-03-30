

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

        
        <div class="card w-100 position-relative overflow-hidden">
            <div class="px-4 py-3 border-bottom d-flex justify-content-between">
              <h4 class="card-title mb-0"> Create Role    </h4>

              <div>
                <button class="btn btn-primary">button</button>
              </div>

            </div>
            <div class="card-body p-4">
                <form id="createRoleForm"  method="post">
                        <div class="row">
                        
                            <div class="col-lg-8 ">
                            <div class="card shadow-sm border-0 p-3">
                                    <h4 class=" text-primary mb-3">Permissions</h4>
                                    <p class="text-muted">Manage user permissions and access levels.</p>
                                
                                    <!-- Scrollable Container -->
                                    <div class=" p-3"  >
                                        <div class="row g-3"> 
                                            <!-- Permission Item 1 -->
                                            <div class="col-md-6 mb-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <label class="fw-bold" for="view_dashboard">View Dashboard</label>
                                                        <small class="text-muted">Allows access to the main dashboard overview.</small>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" name="permissions[]" value="view_dashboard" id="view_dashboard">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Permission Item 2 -->
                                            <div class="col-md-6 mb-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <label class="fw-bold" for="manage_users">Manage Users</label>
                                                        <small class="text-muted">Allows managing user accounts and roles.</small>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" name="permissions[]" value="manage_users" id="manage_users">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Permission Item 3 -->
                                            <div class="col-md-6 mb-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <label class="fw-bold" for="edit_settings">Edit Settings</label>
                                                        <small class="text-muted">Grants access to change system settings.</small>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" name="permissions[]" value="edit_settings" id="edit_settings">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Permission Item 4 -->
                                            <div class="col-md-6">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <label class="fw-bold" for="access_reports">Access Reports</label>
                                                        <small class="text-muted">Allows viewing and exporting system reports.</small>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" name="permissions[]" value="access_reports" id="access_reports">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Permission Item 5 -->
                                            <div class="col-md-6">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <label class="fw-bold" for="modify_permissions">Modify Permissions</label>
                                                        <small class="text-muted">Enables modifying user access levels.</small>
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" name="permissions[]" value="modify_permissions" id="modify_permissions">
                                                    </div>
                                                </div>
                                            </div>


                                            <hr>

                                            <h4 class="fw-bold text-primary ">Group Permissions</h4>
                                            <p class="text-muted" style="margin-top:4px;">Manage user permissions and access levels.</p>

                                            <!-- Scrollable container -->
                                            <div class="border rounded p-3" >
                                                <div class="row  ">
                                                    <!-- Permission Item 1 -->
                                                    <div class="col-md-6 mb-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex flex-column">
                                                                <label class="fw-bold" for="view_dashboard">View Dashboard</label>
                                                                <small class="text-muted">Allows access to the main dashboard overview.</small>
                                                            </div>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox" name="permissions[]" value="view_dashboard" id="view_dashboard">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Permission Item 2 -->
                                                    <div class="col-md-6 mb-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex flex-column">
                                                                <label class="fw-bold" for="manage_users">Manage Users</label>
                                                                <small class="text-muted">Allows managing user accounts and roles.</small>
                                                            </div>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox" name="permissions[]" value="manage_users" id="manage_users">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Permission Item 3 -->
                                                    <div class="col-md-6 mb-3">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex flex-column">
                                                                <label class="fw-bold" for="edit_settings">Edit Settings</label>
                                                                <small class="text-muted">Grants access to change system settings.</small>
                                                            </div>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox" name="permissions[]" value="edit_settings" id="edit_settings">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Permission Item 4 -->
                                                    <div class="col-md-6">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex flex-column">
                                                                <label class="fw-bold" for="access_reports">Access Reports</label>
                                                                <small class="text-muted">Allows viewing and exporting system reports.</small>
                                                            </div>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox" name="permissions[]" value="access_reports" id="access_reports">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Permission Item 5 -->
                                                    <div class="col-md-6">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex flex-column">
                                                                <label class="fw-bold" for="modify_permissions">Modify Permissions</label>
                                                                <small class="text-muted">Enables modifying user access levels.</small>
                                                            </div>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox" name="permissions[]" value="modify_permissions" id="modify_permissions">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Permission Item 6 -->
                                                    <div class="col-md-6">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="d-flex flex-column">
                                                                <label class="fw-bold" for="modify_permissions">   </label>
                                                                <small class="text-muted">Enables modifying user access levels.</small>
                                                            </div>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox" name="permissions[]" value="modify_permissions" id="modify_permissions">
                                                            </div>
                                                        </div>
                                                    </div> 
                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div> 

                            </div>
                            <div class="col-lg-4"> 
                                <div class="card shadow-sm border-0 p-3">
                                    <h4 class="fw-bold text-primary mb-3">   Role Details</h4>
                                    <div class="mb-4">
                                        <label class="form-label fs-3">Name</label>
                                        <div class="input-group">
                                        <input type="text" class="form-control" id="role_name" placeholder="Enter Role Name  ">
                                        </div>
                                    </div>
                                    <div>
                                        <label class="form-label">Description  </label>
                                        <div class="input-group">
                                        <textarea class="form-control" name="" id="description"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <div class="row  ">
                            <div>
                                <button type="submit" class=" btn btn-primary">Create Role </button>
                            </div>
                        </div>
                </form>
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

  <script>
    $(function(){


        $("#createRoleForm").on('submit', function(e){
            e.preventDefault();
            // alert('create_role Button Clicked');

            let roleData = {
                name: $('#role_name').val(),
                description: $('#description').val(),
                permission_type : null,
                permissions: [],
            }

            // Collect selected permissions
            $("input[name='permissions[]']:checked").each(function () {
                roleData.permissions.push($(this).val());
            });

            $.ajax({
                url: "api/roles/create_role_api.php",
                method: "POST",
                contentType: "application/json",
                data: JSON.stringify(roleData),
                dataType: "json",
                success : function (response){
                    if(response.status === 'success'){
                        console.log(roleData);
                        showToast(response.status, response.message, 'success', 'ti ti-alert-circle');
                        setTimeout(() => {
                          window.location.href = response.redirect
                        }, 6000);
                    }else{
                        // alert('Failed to Create Role :' + response.message);
                        showToast('Empty Fields',response.message,'danger','ti ti-alert-circle');
                    }
                }
            });

        });


        function showToast(title, message, type, iconClass) {
                // Remove any previous toast to avoid duplication
                $(".toast-onload").remove();

                // Dynamically create the toast based on your provided template
                const toastHtml = `
                    <div class="toast toast-onload align-items-center text-bg-${type} border-0" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-body hstack align-items-start gap-6">
                        <i class="${iconClass} fs-6"></i>
                        <div>
                        <h5 class="text-white fs-3 mb-1">${title}</h5>
                        <h6 class="text-white fs-2 mb-0">${message}</h6>
                        </div>
                        <button type="button" class="btn-close btn-close-white fs-2 m-0 ms-auto shadow-none" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    </div>`;

                // Append toast to body and show it
                $("body").append(toastHtml);

                // Initialize Bootstrap Toast
                const toast = new bootstrap.Toast(document.querySelector(".toast-onload"));
                toast.show();
        }

    });
  </script>

</body>

</html>