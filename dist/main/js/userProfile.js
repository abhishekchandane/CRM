$(document).ready(function() {
    // Fetch user profile data on page load
    $.ajax({
        url: "api/user/get_user_profile_api.php",
        type: "GET",
        dataType: "json",
        success: function(response) {
            if (response.status === "success") {
                console.log(response.data);
                const user = response.data;
                
                // Update UI elements with user's name and role
                $("#topbarProfileUserName").text(user.name);
                $("#topbarProfileUserRole").text(user.role);
                $("#topbarProfileUserEmail").text(user.email);

                $("#sidebarProfileUserName").text(user.name);
                $("#sidebarProfileUserRole").text(user.role);
            } else {
                console.error(response.message);
            }
        },
        error: function() {
            console.error("Error fetching user data.");
        }
    });
});