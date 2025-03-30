

<?php

    require_once "../../config/Database.php" ;

    // 2. Best Practice – Use __DIR__ (Optional Improvement):
    // To avoid potential path confusion, you can use the __DIR__ constant, which always points to the current file’s directory, making your paths more robust and immune to directory changes.
 
    // require_once(__DIR__ . '/../../controllers/UserProfile.php');

    class UserProfile {

        private $conn;
        
        public function __construct() {
            $db = new Database();
            $this->conn = $db->getConnection();
        }

        public function getUserDetails($user_id) {
            try {
                $query = "SELECT name, role, email FROM users WHERE id = :user_id";
                $stmt = $this->conn->prepare($query);
                $stmt->bindParam(':user_id', $user_id);
                $stmt->execute();

                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                
                if ($user) {
                    return ['status' => 'success', 'data' => $user];
                } else {
                    return ['status' => 'error', 'message' => 'User not found.'];
                }
            } catch (Exception $e) {
                return ['status' => 'error', 'message' => $e->getMessage()];
            }
        }
    }


?>