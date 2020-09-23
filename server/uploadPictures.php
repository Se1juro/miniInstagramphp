<?php
$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];

if (
    $tipo == 'image/jpg' || $tipo == 'image/jpeg' || $tipo == 'image/png'
    || $tipo == 'image/gif' || $tipo == 'image/svg'
) {
    if (!is_dir('images')) {
        mkdir('images', 0777);
    }
    //tmp_name es en realidad el archivo
    move_uploaded_file($archivo['tmp_name'], '../images/' . $nombre);
    header("Refresh:1;URL=../index.php");
} else {
    header("Refresh:1;URL=../index.php");
}
