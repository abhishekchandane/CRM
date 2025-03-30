
$(function () {
 
    $("#loginForm").on('submit', function(e){
      e.preventDefault();
      $.ajax({
        url: "api/auth/login_api.php",
        type:"POST",
        data : {
          email : $("#email").val(),
          password : $("#password").val()
        },
        dataType : "json",
        success : function(response){
          if(response.status === 'error'){
            showToast(response.status,response.message,"danger",'ti ti-alert-circle');
          }else{
            showToast(response.status,response.message,'success','ti ti-check');
            setTimeout(() => {
               window.location.href = response.redirect;
            },6000);
          }
          
        } 
      })

    });


    $("#logoutBtn").on('click', function () {
      $.ajax({
          url: "api/auth/logout_api.php", // Correct URL
          type: "POST",
          dataType: "json",
          success: function (response) {
              if (response.status === "success") {
                  showToast("Logout Successful!", "Good Bye!", "danger", "ti ti-check");
                  setTimeout(() => {
                      window.location.href = response.redirect;  
                  }, 2000);
              } else {
                  showToast(response.message || "Failed to log out. Please try again!", "danger", "ti ti-alert-circle");
              }
          },
          error: function () {
              showToast("Failed to log out. Please try again!", "danger", "ti ti-alert-circle");
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


