<?php


//ROUTE PHOTOS
if (isset ($_GET['photos'])) :
include '../app/controllers/photosController.php';
\App\Controllers\PhotosController\indexAction($connexion);

//Route authors
elseif (isset ($_GET['authors'])) :
    include '../app/controllers/authorsController.php';
\App\Controllers\AuthorsController\indexAction($connexion);

else :
include '../app/controllers/pagesController.php';
\App\Controllers\PagesController\homeAction($connexion);
endif;