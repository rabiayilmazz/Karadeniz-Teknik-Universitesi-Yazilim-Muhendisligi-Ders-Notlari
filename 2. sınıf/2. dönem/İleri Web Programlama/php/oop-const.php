<?php

class File {
    const DIRECTORY = __DIR__;
    public function getDirectory()
    {
        //return self::DIRECTORY;
    }
}

class Folder extends File {
    public function getDirectory()
    {
        return parent::DIRECTORY;
    }
}

//$file = new File;
//echo $file->getDirectory();

//echo File::DIRECTORY;

$folder = new Folder;
echo $folder->getDirectory();