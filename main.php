<?php

use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\Menu\Menu;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Jugid\Staurie\Component\Map\Map;
use Jugid\Staurie\Component\Character\MainCharacter;
use Jugid\Staurie\Component\Introduction\Introduction;
use Jugid\Staurie\Component\Inventory\Inventory;
use Jugid\Staurie\Component\Level\Level;
use Jugid\Staurie\Component\Save\Save;
use Jugid\Staurie\Staurie;


require_once __DIR__.'/vendor/autoload.php';

$staurie = new Staurie('The Teleport Incident');

$staurie->register([Console::class, PrettyPrinter::class, Menu::class, MainCharacter::class, 
Inventory::class, 
Level::class]);

$container = $staurie->getContainer();
$map = $container->registerComponent(Map::class);
$map->configuration([
    'directory'=>__DIR__.'/src/maps',
    'namespace'=>'Youns\CodaMud\maps', 
    'navigation'=>true,
    'map_enable'=>true,
    'compass_enable'=>true,
    'x_start'=> 1,
    'y_start'=> 3,
]);


$menu = $container->registerComponent(Menu::class);
$menu->configuration([
    'text'=> 'Bienvenue dans The Teleport Incident !',
    'labels'=> [
        'new_game' => 'Entrer dans le monde fantastique et dangereux de Mushoku Tensei',
        'quit'=> 'Quitter le jeu',
    ]
]);


$introduction = $container->registerComponent(Introduction::class);
$introduction->configuration([
    'text'=>[
        "Bienvenue dans The Teleport Incident\n",
        'Vous allez decouvrir l\'histoire de Kaelan, un jeune aventurier novice qui a ete surpris par l\'incident de la teleportation, un tragique evenement magique qui a teleporte au quatres coins du monde beaucoup de personnes.',
        'Un bon nombre d\'entre elles ont ete teleportees sur le continent demoniaque, la terre des demons, un lieu hostile parseme de monstres et de dangers en tout genres en dehors des villes de demons, seuls lieux ou certaines races de demons cohabitent en paix avec les humains.',
        'Rare sont les humains qui s\'en sont sortis vivants, et les plus malchanceux ont ete reduits en escalavage par des demons perfides',
        'Voici que Kaelan a son tour se voit teleporte sur ce continent impitoyable, et doit faire de son mieux pour esperer retrouver un jour les siens...'
    ],
    'title'=>'Chapter 1 : La Plaine de l\'exil',
    'scrolling'=>true,
    'scrolling_speed'=>'10',
]);




$staurie->run(); 
