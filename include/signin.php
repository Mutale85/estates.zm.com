<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    try {
        // Prepare the SQL statement
        $stmt = $connect->prepare("SELECT * FROM Users WHERE email = :email");
        
        // Bind parameters
        $stmt->bindParam(':email', $email);
        
        // Execute the statement
        $stmt->execute();

        // Fetch the result
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // User exists, verify password
            if (password_verify($password, $user['password_hash'])) {
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['username'] = $user['username'];
                
                echo json_encode(['success' => true, 'message' => 'Login successful! Redirecting to dashboard...']);
                // If you want to redirect server-side, uncomment the next line
                // header("Location: dashboard/");
                exit();
            } else {
                echo json_encode(['success' => false, 'message' => 'Invalid password.']);
            }
        } else {
            echo json_encode(['success' => false, 'message' => 'No user found with that email address.']);
        }
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => 'Login failed: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}

// The connection will be closed automatically when the script ends