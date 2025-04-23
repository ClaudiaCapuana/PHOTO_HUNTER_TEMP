<?php


//ROUTE PHOTOS
if (isset ($_GET['photos'])) :
include '../app/routers/photos.php';

//Route authors
elseif (isset ($_GET['authors'])) :
    include '../app/controllers/authorsController.php';
\App\Controllers\AuthorsController\indexAction($connexion);



else :
include '../app/controllers/pagesController.php';
\App\Controllers\PagesController\homeAction($connexion);
endif;