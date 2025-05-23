<?php 
namespace App\Models\AuthorsModel;
use \PDO;

function findAll(PDO $connexion, int $limit = 4) :array {
$sql = "SELECT * FROM authors ORDER BY created_at DESC LIMIT :limit;";
$rs = $connexion->prepare($sql);
$rs->BindValue(":limit", $limit, PDO::PARAM_INT);
$rs->execute();
return $rs->fetchAll(PDO::FETCH_ASSOC);
}

function findOneById(PDO $connexion, int $id) :array {
    $sql = "SELECT * 
    FROM authors 
    WHERE id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->BindValue(":id", $id, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(PDO::FETCH_ASSOC);
    }
