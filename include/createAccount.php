<?php
include "db.php";

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $full_name = trim($_POST['name'] ?? '');
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'] ?? '';
    
    // Validate input
    if (empty($full_name) || empty($email) || empty($password)) {
        echo json_encode(['success' => false, 'message' => 'All fields are required.']);
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'message' => 'Invalid email format.']);
        exit();
    }

    if (strlen($password) < 8) {
        echo json_encode(['success' => false, 'message' => 'Password must be at least 8 characters long.']);
        exit();
    }


    try {
        // Check if email already exists
        $stmt = $connect->prepare("SELECT COUNT(*) FROM Users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        
        if ($stmt->fetchColumn() > 0) {
            echo json_encode(['success' => false, 'message' => 'Email already exists. Please use a different email.']);
            exit();
        }

        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare the SQL statement for insertion
        $stmt = $connect->prepare("INSERT INTO Users (username, email, password_hash) VALUES (:username, :email, :password)");
        
        // Bind parameters
        $stmt->bindParam(':username', $full_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashed_password);

        // Execute the statement
        $stmt->execute();

        echo json_encode(['success' => true, 'message' => 'New user registered successfully!']);
    } catch (PDOException $e) {
        // Log the error (in a production environment, use proper error logging)
        error_log("Registration Error: " . $e->getMessage());
        
        echo json_encode(['success' => false, 'message' => 'Registration failed. Please try again later.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}

// The connection will be closed automatically when the script ends