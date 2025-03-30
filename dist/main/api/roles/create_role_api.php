<?php

    require_once '../../controllers/Roles.php';
    $role = new Roles();

    // Decode the incoming JSON request
    $data = json_decode(file_get_contents("php://input"), true);

   

    if( empty($data['name']) || empty($data['description']) || empty($data['permissions']) ){
            echo json_encode([ 'status' => 'error', 'message' => 'Name, Description or Permissions Missing' ]);
    }else{

        $name = $data['name'];
        $description = $data['description'];
        $permissions  = json_encode($data["permissions"]);;
        $response =  $role->createRole($name, $description, $permissions); 
        
        echo json_encode($response);

        // $permissions = isset($data["permissions"]) ? json_encode($data["permissions"]) : json_encode([]);  // Convert array to JSON
        
    }





?>