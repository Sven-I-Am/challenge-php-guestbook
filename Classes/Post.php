<?php

class Post
{
    private string $title;
    private string $message;
    private string $name;
    private string $date;
    private string $time;

    public function __construct(string $title, string $message, string $name, string $date, string $time)
    {
        $this->title = $title;
        $this->message = $message;
        $this->name = $name;
        $this->date = $date;
        $this->time = $time;
    }

}