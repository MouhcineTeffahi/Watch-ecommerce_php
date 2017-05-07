<?php

   if (isset($_POST['submit'])) {
   	include"connexion.php";

   
$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$message = $_POST['message'];


$query = mysql_query("INSERT INTO `contact`(`name`, `email`, `tel`, `message`) VALUES ('$name','$email','$tel','$message')");
  header('Location: ../index.php');
}
else {
	echo "Aucun argument";
}
?>