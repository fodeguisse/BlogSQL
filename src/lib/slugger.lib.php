<?php

function generateSlug($str) {
    // Convertir la chaîne en minuscules
    $str = strtolower($str);
    
    // Remplacer les caractères spéciaux par des tirets
    $str = preg_replace('/[^a-z0-9-]+/', '-', $str);
    
    // Supprimer les tirets en double
    $str = preg_replace('/-+/', '-', $str);
    
    // Supprimer les tirets au début et à la fin de la chaîne
    $str = trim($str, '-');
    
    return $str;
}