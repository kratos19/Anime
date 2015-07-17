<?php 

	$utilizator = "root";
	$parola = "";
	$host = "localhost";
	$baza_de_date = "anime";
	

	$db = new PDO("mysql:host=localhost; dbname=$baza_de_date; charset=utf8" , $utilizator, $parola);
?>