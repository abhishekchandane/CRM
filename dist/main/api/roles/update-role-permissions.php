<?php

    require_once '../../controllers/Roles.php';
    $role = new Roles();

    // Decode the incoming JSON request
    $data = json_decode(file_get_contents('php://input'), true);

    if (!$data || !isset($data['role_id']) || !isset($data['permissions'])) {
        echo json_encode([
            "success" => false,
            "message" => "Invalid input data"
        ]);
        exit;
    }

    $roleId = intval($data['role_id']);
    $permissions = json_encode($data['permissions']); // Convert array to JSON format

    // Call the function to update role permissions
    $response = $role->updateRolePermissions($roleId, $permissions);

    
    echo json_encode($response);

?>
