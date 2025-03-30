<?php

require_once '../../controllers/UserProfile.php';


// 2. Best Practice – Use __DIR__ (Optional Improvement):
// require_once(__DIR__ . '/../../controllers/UserProfile.php');


header('Content-Type: application/json');
session_start();



if (!isset($_SESSION['user_id'])) {
    echo json_encode(['status' => 'error', 'message' => 'User not logged in.']);
    exit;
}

$userProfile = new UserProfile();

// Fetch user details using the class
$response = $userProfile->getUserDetails($_SESSION['user_id']);

// Return response as JSON
echo json_encode($response);
?>
