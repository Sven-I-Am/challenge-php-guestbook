<?php

class PostLoader
{
    private $allPosts;

    public function __construct(){
        $this->allPosts = $this->getFileContent();
    }

    public function getFileContent()
    {
        return json_decode(file_get_contents("messages.json"), true);
    }

    public function getAllPosts()
    {
        return $this->allPosts;
    }

    public function getTitle($post): string
    {
        return $post["message"]["title"];
    }

    public function getMessage($post): string
    {
        return $post["message"]["message"];
    }

    public function getName($post): string
    {
        return $post["message"]["name"];
    }

    public function getTimestamp($post): string
    {
        return $post["message"]["date"] . " at " . $post["message"]["time"];
    }

}