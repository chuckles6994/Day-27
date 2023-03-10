<?php

class Song 
{
    public ?int $id = null;
    public ?string $name = null;
    public ?string $author = null;
    public ?int $length = null;
    public ?string $album = null;

    // return length in m:ss format:
    public function getLengthFormatted() :string
    {
        return
        floor($this->length /60)
        .':'
        . ($this -> length % 60<10 ? '0':'')
        . $this -> length % 60;

    }
}