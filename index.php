<?php
require "HTML/header.php";
require "Classes/Post.php";
require "Classes/PostLoader.php";

$loadPosts = new PostLoader();
$allPosts = $loadPosts->getFileContent();


require "HTML/body.php";
require "HTML/footer.php";

if (isset($_POST)){
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


