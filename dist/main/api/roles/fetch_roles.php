<?php



require_once "../../controllers/Roles.php";  

header("Content-Type: application/json");

$role = new Roles();
$response = $role->getRoles();

echo json_encode($response);


?>