<?php

$errors = "";
$enviat = false;

if (isset($_POST['submit'])) {

    $nom=$_POST['nom'];
    $correu=$_POST['correu'];

    if (!empty($nom)) {
        $nom= trim($nom);
        $nom= htmlspecialchars($nom); 
        $nom=stripslashes($nom);
        echo 'El teu nom es ' . $nom . '<br>';
    } else {
        $errors .= 'Escriu un nom <br>';
    }
    if (!empty($correu)) {
        $correu=filter_var($correu, FILTER_SANITIZE_EMAIL);//
        if (!filter_var($correu, FILTER_VALIDATE_EMAIL)) {//
            $errors .= 'Escriu un correu vàlid <br>';
        } else {
            echo 'El teu correu es ' . $correu . '<br>';
        }
    } else {
        $errors .= 'Escriu un correu <br>';
    }

    if(!$errors){
		$enviat = true;
	}

}

require "vista.php";

?>