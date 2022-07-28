<?php


$server = "localhost";
$user = "root";
$password = "root";
$database = "news";

$mysqli = new mysqli($server, $user,$password,$database);

$sql = "SELECT*FROM `articles`";
$article = $mysqli->query($sql);

$articles = [];
while($row = $article->fetch_assoc())
{
    $articles[] = $row;
}




?>