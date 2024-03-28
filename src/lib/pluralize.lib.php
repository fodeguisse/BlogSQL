<?php
function pluralize($word, $count) {
    // Si le compte est différent de 1, ajoutez simplement 's'
    if ($count != 1) {
        return $word . 's';
    }
    // Si le compte est égal à 1, retournez simplement le mot singulier
    else {
        return $word;
    }
}
