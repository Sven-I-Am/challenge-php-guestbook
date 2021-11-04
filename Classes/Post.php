<?php

class Post
{
    private string $title;
    private string $message;
    private string $name;
    private string $date;
    private string $time;
    private array $profanities;

    public function __construct(string $title, string $message, string $name, string $date, string $time)
    {
        $this->title = $this->protect($title);
        $this->title = $this->checkProfanities($title);
        $this->message = $this->protect($message);
        $this->message = $this->checkProfanities($message);
        $this->name = $this->protect($name);
        $this->name = $this->checkProfanities($name);
        $this->date = $date;
        $this->time = $time;
    }

    public function setArray(): array
    {
        return ["message"=>["title"=>$this->title, "message"=>$this->message, "name"=>$this->name, "date"=>$this->date, "time"=>$this->time]];
    }

    public function saveToFile($array)
    {
        file_put_contents("messages.json", json_encode($array));
    }

    private function protect(string $toCheck): string
    {
        return htmlSpecialchars($toCheck, ENT_NOQUOTES, 'UTF-8');
    }

    private function setProfanities ()
    {
        return $this->profanities = ['fuck', 'shit', 'bitch', 'cunt', 'trut', 'homo', 'fagget', 'fag', 'sissy', 'tranny', 'dike', 'lesbo'];
    }

    public function checkProfanities(string $toCheck)
    {
        $new = [];
        $seperated = explode(" ", $toCheck);
        foreach ($seperated as $word){
            foreach ($this->setProfanities() as $profanity){
                if(str_contains(strtolower($word), $profanity )){
                    $word = str_replace($this->setProfanities(), '****', strtolower($word));
                }
            }
            array_push($new, $word);
        }
        return implode(" ", $new);
    }
}