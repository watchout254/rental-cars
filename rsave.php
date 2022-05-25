<?php
 require_once 'rconnect.php';
 session_start();

 if($_SERVER['REQUEST_METHOD'] == 'POST'){
     $name = $_POST['name'];
     $identity = $_POST['identity'];
     $dtime = $_POST['dtime'];
     $car = $_POST['car'];
     $location = $_POST['location'];

    //  Validate data
    $errors = [];
    if(empty($name)){
        $errors['name'] = 'Name is required';
    }
    if(empty($identity)){
        $errors['identity'] = 'identity is required';
    }
    if(empty($dtime)){
        $errors['dtime'] = 'dtime is required';
    }
    if(empty($car)){
        $errors['car'] = 'car is required';
    }
    if(empty($location)){
        $errors['location'] = 'location is required';
    }

    if(!empty($errors)){
        $_SESSION['error'] = "All fields are required";
        $_SESSION['errors'] = $errors;
        $_SESSION['old_data'] = $_POST;
        header('Location: rent.php');
        exit;
    }

    //  Insert data into database
    else {
        try {
        $stmt = $db->prepare("INSERT INTO rent (name, identity,dtime,car, location) VALUES (?,?,?,?,?)");
        $stmt->execute([$name, $identity,$dtime, $car, $location]);
        $_SESSION['success'] = 'Message sent successfully';
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }
    }
 }

 header('Location: rent.php');