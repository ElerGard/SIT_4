<?php

namespace game;

class gameObjects
{
    private string $name;

    public function getName()
    {
        return $this->name;
    }
    public function __construct(string $_name)
    {
        $this->name = $_name;
    }
}