

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
                  <h4 class="fw-semibold mb-8">     Roles Tabel</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a class="text-muted text-decoration-none" href="../main/index.html">Home</a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">Manage Roles</li>
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

        
        <div class="card w-100 position-relative overflow-hidden">
            <div class="px-4 py-3 border-bottom  text-end">
              <h4 class="card-title mb-0">     </h4>

              <div>
                <a href="create_role.php" class="btn btn-primary mx-1">
                    Create New Role
                </a>
                <a href="create_role.php" class="btn btn-primary mx-1">
                    Choose Action
                </a>
              </div> 

            </div>
            <div class="card-body p-4">
            <div class="table-responsive mb-4 border rounded-1"  > 
                    <table class="table text-nowrap mb-0 align-middle" >
                        <thead class="text-dark fs-4">
                            <tr>
                              <th>
                                <h6 class="fs-4 fw-semibold mb-0">ID</h6>
                              </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">Role Name</h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">Description </h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">Permissions  </h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">Created At  </h6>
                            </th>
                            <th>
                                <h6 class="fs-4 fw-semibold mb-0">Actions</h6>
                            </th>

                            </tr>
                        </thead> 
                        <tbody id="rolesList" ></tbody>
                    </table> 
                </div>

            </div>
          </div> 
      </div>


 
    <!-- Modal -->
    <div class="modal fade" id="scroll-long-outer-modal" data-role-id="" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="scroll-long-outer-modal" aria-hidden="true">
      
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center">
                    <h5 class="text-primary modal-title" id="myLargeModalLabel">
                        Revoke Permissions
                    </h5>
                    <span id="demo"></span>
                    
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>Select permission to grant</h6> 
                    <!-- Scrollable Container -->
                    <div class="p-3">
                        <div class="row  ">
                            <!-- Permission Item 1 -->
                            <div class="col-md-6 mb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex flex-column">
                                        <h6 class="fw-bold" for="view_dashboard">View Dashboard</h6>
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
                                        <h6 class="fw-bold" for="manage_users">Manage Users</h6>
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
                                        <h6 class="fw-bold" for="edit_settings">Edit Settings</h6>
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
                                        <h6 class="fw-bold" for="access_reports">Access Reports</h6>
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
                                        <h6 class="fw-bold" for="modify_permissions">Modify Permissions</h6>
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
                                        <h6 class="fw-bold" for="modify_permissions">  Upcoming Permissions</h6>
                                        <small class="text-muted">       Upcoming Permissions   .</small>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" name="permissions[]" value="upcoming_permissions" id="upcoming_permissions">
                                    </div>
                                </div>
                            </div>

                        </div>

 
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="apply-changes-btn" type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start" data-bs-dismiss="modal">
                        Apply Changes
                    </button>
                    <button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start" data-bs-dismiss="modal">
                        Cancle
                    </button>
                </div>
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

<style>
 .tooltip-container {
    position: relative;
    display: inline-block;
    cursor: pointer;
}

.custom-tooltip {
    visibility: hidden;
    background: #333;
    color: #fff;
    text-align: left;
    padding: 10px;
    border-radius: 6px;
    position: absolute;
    right: 110%;  /* Position tooltip to the left */
    top: 50%;  /* Center vertically */
    transform: translateY(-50%);  /* Adjust for perfect centering */
    width: 200px;
    font-size: 14px;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
    z-index: 999;
    white-space: normal;
}

.tooltip-container:hover .custom-tooltip {
    visibility: visible;
    opacity: 1;
}

/* Add a small arrow pointing to the button */
.custom-tooltip::after {
    content: "";
    position: absolute;
    top: 50%;
    left: 100%;  /* Align with button */
    transform: translateY(-50%);
    border-width: 5px;
    border-style: solid;
    border-color: transparent transparent transparent #333; /* Arrow pointing left */
}


</style>

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
        fetchRoles();
    });



    function fetchRoles() {
        $.ajax({
            url: "api/roles/fetch_roles.php",
            type: "GET",
            dataType: "json",
            success: function(response) {
                if (response.status === "success") {
                    let rolesHtml = ""; 
                    // response.data.forEach(role=>{
                    //   alert(role.id);
                    // });
                    response.data.forEach(role => {
                      // Parse the permissions JSON string into an array and count them
                      let permissionsArray = JSON.parse(role.permissions || "[]"); 
                      let permissionsCount = permissionsArray.length;

                      // Decide which icon to show based on permissions count
                      let iconHtml = permissionsCount >= 3 
                        ? `<svg class="role-icon" data-role-id="${role.id}" data-bs-toggle="modal" data-bs-target="#scroll-long-outer-modal" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-lock-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M11.5 21h-4.5a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v.5" /><path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" /><path d="M8 11v-4a4 4 0 1 1 8 0v4" /><path d="M15 19l2 2l4 -4" /></svg>` 
                        : `<svg class="role-icon" data-role-id="${role.id}" data-bs-toggle="modal" data-bs-target="#scroll-long-outer-modal" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-lock"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" /><path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" /><path d="M8 11v-4a4 4 0 1 1 8 0v4" /></svg>`;

                            rolesHtml += `
                              <tr>
                                  <td>${role.id}</td>
                                  <td>${role.name}</td>
                                  <td>${role.description}</td>
                                  <td>
                                      <div class="tooltip-container">
                                          <span class="badge bg-primary text-white">View Permissions</span>
                                          <div class="custom-tooltip">
                                              <b>Permissions:</b>
                                              <ul>
                                                  ${role.permissions.replace(/[\[\]"]/g, '').split(',').map(perm => `<li>${perm.trim()}</li>`).join('')}
                                              </ul>
                                          </div>
                                      </div>
                                  </td>
                                  <td>${role.created_at}</td>
                                  <td>${ iconHtml }</td>
                              </tr>
                          `;
                    });


                  $(document).on("click", ".role-icon", function () {
                      let roleId = $(this).data("role-id");  // Get clicked role ID

                      // Find the role object from the response (assuming it's stored in `rolesData`)
                      let role = response.data.find(r => r.id == roleId);
                      if (!role) return;

                      // Set the role ID in the modal before opening it
                      $("#scroll-long-outer-modal").attr("data-role-id", roleId);

                      // Parse the role's permissions
                      let rolePermissions = JSON.parse(role.permissions || "[]");

                      // Uncheck all checkboxes first
                      $("input[type='checkbox'][name='permissions[]']").prop("checked", false);

                      // Check only the ones that match the role's permissions
                      rolePermissions.forEach(permission => {
                          $(`input[type='checkbox'][value='${permission}']`).prop("checked", true);
                      });

                      // Open the modal (Bootstrap handles this automatically because of data-bs-toggle)
                  });

                  $("#rolesList").html(rolesHtml);
                } else {
                  $("#rolesList").html(`<tr><td colspan="5" class="text-center text-danger">${response.message}</td></tr>`);
                }
            },
            error: function() {
                $("#rolesList").html(`<tr><td colspan="5" class="text-center text-danger">Failed to fetch roles.</td></tr>`);
            }
        });
    }


    $(document).on("click", "#apply-changes-btn", function () {
            let roleId = $("#scroll-long-outer-modal").attr("data-role-id"); // Retrieve stored role ID

            if (!roleId) {
                alert("Error: No role ID found.");
                return;
            }

            // Collect selected permissions
            let selectedPermissions = [];
            $("input[type='checkbox'][name='permissions[]']:checked").each(function () {
                selectedPermissions.push($(this).val());
            });

            $.ajax({
                url: "api/roles/update-role-permissions.php",  // Your API endpoint
                  type: "POST",
                  data: JSON.stringify({ role_id: roleId, permissions: selectedPermissions }),
                  contentType: "application/json",
                  dataType: "json",
                  success: function(response) {
                      if (response.status === "success") {
                          showToast("Success", response.message, "success", "ti ti-check-circle");
                          
                          // **Update permissions in the table** (role list UI)
                          let updatedPermissionsHtml = selectedPermissions.map(perm => `<li>${perm}</li>`).join("");
                          $(`.role-icon[data-role-id='${roleId}']`)
                              .closest("tr")
                              .find(".custom-tooltip ul")
                              .html(updatedPermissionsHtml);

                          // **Update modal content dynamically**
                          $("#permissionsList").html(updatedPermissionsHtml);
                        
                          // **Wait for the toast message, then refresh the page**
                          setTimeout(() => {
                              window.location.reload();
                          }, 3000); // Refresh after 3 seconds

                      } else {
                          showToast("Error", response.message, "danger", "ti ti-alert-circle");
                      }
                  },
                  error: function() {
                    showToast("Error", "Failed to update permissions.", "danger", "ti ti-alert-circle");
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


  </script>

 
 
</body>

</html>


<!-- Role Updating Functionality AND Fetching Role's Permission  in the Modal , When Click on Particular Role's Display its Permissions  -->