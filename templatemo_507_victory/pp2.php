<?php
$mysqli = new mysqli('localhost',' root','mypass123','projet' ) or die(mysqli_error($mysqli));
 if (isset($_POST['save']))
 {  $name= $_POST['name'];
    $adre=$_POST['adre'];
    $phone=$_POST['num tel'];
    $reclamation=$_POST['reclamation'];
    $mysqli->query("INSERT INTO data (name, adre, num tel,reclamation) VALUES('$name','$adre','$phone','$reclamation'")
    or die($mysqli->error); 
 }  