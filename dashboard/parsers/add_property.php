<?php
    require_once '../../includes/db.php';
    $userId = $_SESSION['user_id'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
            // Start transaction
            $connect->beginTransaction();

            // Prepare SQL statement
            $stmt = $connect->prepare("INSERT INTO Properties (title, type, bedrooms, bathrooms, rent_amount, rent_period, address, description) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

            // Execute the statement with form data
            $stmt->execute([
                $_POST['propertyTitle'],
                $_POST['propertyType'],
                $_POST['bedrooms'],
                $_POST['bathrooms'],
                $_POST['rentAmount'],
                $_POST['rentPeriod'],
                $_POST['address'],
                $_POST['description']
            ]);

            $propertyId = $connect->lastInsertId();

            // Process amenities
            $amenities = json_decode($_POST['amenities'], true);
            foreach ($amenities as $amenity) {
                $stmt = $connect->prepare("INSERT INTO Amenities (property_id, userId, name) VALUES (?, ?, ?)");
                $stmt->execute([$propertyId, $userId, $amenityId]);
            }

            // Commit the transaction
            $connect->commit();

            // Send success response
            echo json_encode(['success' => true, 'message' => 'Property added successfully']);

        } catch (PDOException $e) {
            // Rollback the transaction on error
            $connect->rollBack();
            echo json_encode(['success' => false, 'message' => 'Error: ' . $e->getMessage()]);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    }