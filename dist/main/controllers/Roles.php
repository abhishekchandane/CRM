<?php

require_once "../../config/Database.php" ;

class Roles{

    private $conn;

    public function __construct(){
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function createRole($name, $description,  $permissions){
        try{
           $permission_type = 'custom';

        //    $permissionsArray = $permissions;
        //    $permissionsToString = implode(', ', $permissionsArray);

           $query = "INSERT INTO roles (name, description, permission_type, permissions, created_at, updated_at)
                     VALUES (:name, :description, :permission_type, :permissions, NOW(), NOW())";
            
            $stmt = $this->conn->prepare($query);

            // Bind parameters to prevent SQL injection
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':permission_type', $permission_type);
            $stmt->bindParam(':permissions', $permissions);

            // Execute the query
            if ( $stmt->execute() ) {
                return[
                    'status' => 'success',
                    'message' => 'Role Created Successfully', 
                    'redirect' => 'roles_list.php',
                    'data' => $permissions.' '.$name.' '.$description
                ];
           }else{
                return[
                   'status' => 'error',
                    'message' => 'Failed to Create Role' 
                ];
           }

        }catch(PDOException $e){
            return [
                'status'=>'error', 
                'message'=>'Database Error :'. $e->getMessage()
            ];
        }
    }

    public function getRoles(){
        try{
            $query = " SELECT id, name, description, permissions, created_at FROM roles ORDER BY created_at DESC ";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            $roles =  $stmt->fetchAll(PDO::FETCH_ASSOC);

            return ['status' => 'success', 'data' => $roles];
        }catch(PDOException $e){
            return ['status' => 'error', 'message' => $e->getMessage()];
        }
    }

}



?>