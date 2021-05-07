<?php require_once "pp2.php" ;
$sql=" INSERT INTO livraison (num tel, name, adre, reclamation)
VALUES
('$_POST[name]','$_POST[adre]','$_POST[phone]','$_POST[reclamation]')";

if (mysqli_query($conn, $sql)) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
