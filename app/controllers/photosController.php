<?php
namespace App\Controllers\PhotosController;
use \PDO;

function indexAction(PDO $connexion){
    include '../app/models/photosModel.php';
    $photos = \App\Models\PhotosModel\findAll($connexion,6);
    global $content, $title;

    $title = "Catalogue";
    ob_start();
    include'../app/views/photos/index.php';
    $content = ob_get_clean();
}

function showAction(PDO $connexion, string $id){
    include '../app/models/photosModel.php';
    $photo = \App\Models\PhotosModel\findOneById($connexion, $id);
    global $content, $title;

    $title = $photo['title'];
    ob_start();
    include'../app/views/photos/show.php';
    $content = ob_get_clean();
}