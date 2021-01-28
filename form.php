<?php

if ( isset($_POST['nom']) ){
    $nom = strip_tags(trim($_POST['nom']) );
    echo "nom : " . $nom . "<br>";
}

?>
