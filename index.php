<?php

function customAutoload(string $classN)
{
    $path = str_replace('game\\', DIRECTORY_SEPARATOR, $classN);
    require_once __DIR__ . "/src/$path.php";
}

spl_autoload_register('customAutoload');

$game = new \game\game();
$player = new \game\Player("Hop");
$car = new \game\Car("BMW");
$enemies = new \game\Enemies("Zombie");

$player->action();
$car->action();
$enemies->action();

$game->addObject($player);
$game->addObject($car);
$game->addObject($enemies);
$game->Game();