<?php
// Write a function that provides change directory (cd) function for an abstract file system.

class Path{

    public $currentPath;

    function __construct($path){
        $this->currentPath = $path;
    }

    public function cd($newPath){

        $dirs = explode('/', $this->currentPath);
        $newDirs = explode('/', $newPath);

        $newPathArr = [];

        foreach ($newDirs as $newDir) {
            if ($newDir === '..') {
                array_pop($dirs);
            } else {
                $newPathArr[] = $newDir;
            }
        }

        $newPathArr = array_merge($dirs, $newPathArr);
        $this->currentPath = implode('/', $newPathArr);
    }
}

$path = new Path('/a/b/c/d');
$path->cd('../x');
echo $path->currentPath;
// should display '/a/b/c/x'.
