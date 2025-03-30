<?php

require_once "../../config/Database.php" ;

class UserAuth{

    private $conn;

    public function __construct(){
        $db = new Database();
        $this->conn = $db->getConnection();
    }


    public function login($email, $password) {
        // Prepare and execute SQL query
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) { 
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['role'] = $user['role'];

            return [
                'status' => 'Success',
                'message' => 'Login Successful Redirecting',
                'redirect' => 'index.php'
            ];
        } else {
            return ['status' => 'error', 'message' => 'Invalid email or password.'];
        }
    }


    public function logout() {
        session_start();
        session_unset();  // Unset all session variables
        session_destroy();  // Destroy the session

        return [
            'status' => 'success',
            'message' => 'Logout successful!',
            'redirect' => 'login.php'  // Redirect to login page
        ];
    }


}




?>