<?php



if (isset ($_GET['photos'])) :
include '../app/controllers/photosController.php';
\App\Controllers\PhotosController\indexAction($connexion);


else :
include '../app/controllers/pagesController.php';
\App\Controllers\PagesController\homeAction($connexion);
endif;