<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "HTML/header.php";
require "Classes/Post.php";
require "Classes/PostLoader.php";

$loadPosts = new PostLoader();
if ($loadPosts->getAllPosts() != NULL){
    $allPosts = $loadPosts->getFileContent();
} else {
    $allPosts =[];
}

if (isset($_POST["title"])){
    $title = $_POST["title"];
    $message=$_POST["message"];
    $name = $_POST["name"];
    $date=date("d.m.Y");
    $time=date("H:i:s");

    $post = new Post($title, $message, $name, $date, $time);

    $postArray = $post->setArray();
    if($allPosts==NULL){
        $allPosts[0] = $postArray;
    } else {
        array_push($allPosts, $postArray);
    }
    $post->saveToFile($allPosts);
    $allPosts = $loadPosts->getFileContent();
}
require "HTML/body.php";
require "HTML/footer.php";