<?php
namespace game;

class game extends gameObjects
{
    private array $objectList;
    private int $countOfObjects = 0;

    public function __construct() {
        echo 'Game started</br>';
    }

    public function addObject(gameObjects $object)
    {
        $this->countOfObjects++;
        $this->objectList[$this->countOfObjects] = $object;
    }

    public function Game() {
        foreach($this->objectList as $o => $object) {
            $animal = str_replace('game\\', '', get_class($object));
            echo $o, " - ", $animal, "</br>";
        }
    }
}