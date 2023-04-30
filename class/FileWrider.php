<?php
class FileWrider
{
    public $fileName, $file;


function __construct($fileName)
{
    $this->fileName=$fileName;
    $this->file=fopen($fileName,"w");
}

    public function wride(string $text)
    {
    fwrite($this->file,$text);
    }
    function __destruct()
    {
        fclose($this->file);
    }
}
