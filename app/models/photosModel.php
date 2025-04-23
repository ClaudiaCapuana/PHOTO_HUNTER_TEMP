<?php
namespace App\Models\PhotosModel;
use \PDO;

function findAll(PDO $connexion, int $limit = 6) :array {
$sql = "SELECT *, p.id AS photoId, a.id AS authorId
        FROM photos p 
        JOIN authors a ON p.author_id = a.id
        ORDER BY p.created_at DESC 
        LIMIT :limit;";
$rs = $connexion->prepare($sql);
$rs->bindValue(':limit', $limit, PDO::PARAM_INT);
$rs->execute();
return $rs->fetchAll(PDO::FETCH_ASSOC);
}