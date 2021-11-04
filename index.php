<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "HTML/header.php";
require "Classes/Post.php";
require "Classes/PostLoader.php";
$nrOfPosts = 20;
$error = "";
$loadPosts = new PostLoader();
if ($loadPosts->getAllPosts() != NULL){
    $allPosts = $loadPosts->getFileContent();
} else {
    $allPosts =[];
}

if (!empty($_POST)){
    if (!empty($_POST["title"])){
        $title = $_POST["title"];
    } else {
        $error .= "<li>Please fill in a title</li>";
    }
    if (!empty($_POST["message"])) {
        $message = $_POST["message"];
    } else {
        $error .= "<li>Please fill in a message</li>";
    }
    if (!empty($_POST["name"])){
        $name = $_POST["name"];
    } else {
        $error .= "<li>Please fill in your name</li>";
    }
    $nrOfPosts = $_POST["nrOfPosts"];
    $date=date("d.m.Y");
    $time=date("H:i:s");
    if ($error==""){
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
}

require "HTML/body.php";
require "HTML/footer.php";