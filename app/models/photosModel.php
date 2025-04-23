<?php
namespace App\Models\PhotosModel;
use \PDO;

function findAll(PDO $connexion) :array {
$sql = "SELECT * FROM photos ORDER BY created_at DESC LIMIT 3";
$rs = $connexion->query($sql);
return $rs->fetchAll(PDO::FETCH_ASSOC);
}