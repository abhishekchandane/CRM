<?php
    require_once("../../controllers/UserAuth.php");

    header("Content-Type: application/json");

    $userAuth = new UserAuth();  // Initialize the UserAuth class

    // Perform logout by destroying session
    $response = $userAuth->logout();

    // Return response as JSON
    echo json_encode($response);
?>
