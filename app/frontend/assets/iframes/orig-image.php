<?php
session_start();
if(isset($_SESSION['userNumber'])){
    $userNumber = $_SESSION['userNumber'];
    $im = imagecreate(20, 20);

// Fond blanc et texte bleu
    $bg = imagecolorallocate($im, 255, 255, 255);
    $textcolor = imagecolorallocate($im, 0, 0, 255);

// Ajout de la phrase en haut à gauche
    imagestring($im, 5, 0, 0,$userNumber , $textcolor);

    //Affichage de l'image
    header('Content-type: image/png');

    imagepng($im);
}
