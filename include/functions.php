<?php 

	function getOrCreateAmenityId($amenityName) {
		global $connect;
	    $stmt = $connect->prepare("SELECT id FROM Amenities WHERE name = ?");
	    $stmt->execute([$amenityName]);
	    $result = $stmt->fetch(PDO::FETCH_ASSOC);

	    if ($result) {
	        return $result['id'];
	    } else {
	        $stmt = $connect->prepare("INSERT INTO Amenities (name) VALUES (?)");
	        $stmt->execute([$amenityName]);
	        return $connect->lastInsertId();
	    }
	}
?>