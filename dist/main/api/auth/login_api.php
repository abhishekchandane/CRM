<?php
    // header('Content-Type : application/json');

    session_start();

    require_once '../../controllers/UserAuth.php';



    if( empty($_POST['email']) || empty($_POST['password']) ){
        echo json_encode(['status' => 'error','message' => 'Email or Password Missing' ]);
    }else{

        $email =  $_POST['email']; $password = $_POST['password'];
        $userAuth = new UserAuth();
        // Fetch user details using the class
        $response = $userAuth->login($email, $password);

        // Return response as JSON
        echo json_encode($response);
    }


   








?>