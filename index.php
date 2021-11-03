<?php
require "HTML/header.php";
require "HTML/body.php";
require "HTML/footer.php";
require "Classes/Post.php";
require "Classes/PostLoader.php";

if (isset($_POST)){
    $title = $_POST["title"];
    $message=$_POST["message"];
    $name = $_POST["name"];
    $date=date("d.m.Y");
    $time=date("H:i:s");

    $post = new Post($title, $message, $name, $date, $time);
}


