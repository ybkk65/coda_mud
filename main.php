<?php

use Jugid\Staurie\Component\Character\MainCharacter;
use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\Introduction\Introduction;
use Jugid\Staurie\Component\Inventory\Inventory;
use Jugid\Staurie\Component\Level\Level;
use Jugid\Staurie\Component\Map\Map;
use Jugid\Staurie\Component\Menu\Menu;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Jugid\Staurie\Component\Save\Save;
use Jugid\Staurie\Staurie;

require_once __DIR__.'/vendor/autoload.php'; //A REMPLACER

$staurie = new Staurie('The Teleport Incident');
$staurie->register([
    Console::class, 
    PrettyPrinter::class, 
    MainCharacter::class, 
    Inventory::class, 
    Level::class
]);

$container = $staurie->getContainer();

$menu = $container->registerComponent(Menu::class);
$menu->configuration([
    'text'=> 'Bienvenue dans The Teleport Incident !',
    'labels'=> [
        'new_game' => 'Entrer dans le monde fantastique et dangereux de Mushoku Tensei',
        'quit'=> 'Quitter le jeu',
    ]
]);


$map = $container->registerComponent(Map::class);
$map->configuration([
    'directory'=>__DIR__.'/src/maps',
    'namespace'=>'Youns\CodaMud\Maps', 
    'navigation'=>true,
    'map_enable'=>true,
    'compass_enable'=>true
]);

$introduction = $container->registerComponent(Introduction::class);
$introduction->configuration([
    'text'=>[
        'Bienvenuuuuuuuuuuuuuuueeee dans The Teleport Incident \n',
        'Vous allez découvrir l\'histoire de Kaelan, un jeune aventurier novice qui a été surpris par l\'incident de la téléportation, un tragique évènement magique qui a téléporté au quatres coins du monde beaucoup de personnes.',
        'Un bon nombre d\'entre elles ont été téléportées sur le continent démoniaque, la terre des démons, un lieu hostile parsemé de monstres et de dangers en tout genres en dehors des villes de démons, seuls lieux où certaines races de démons cohabitent en paix avec les humains.',
        'Rare sont les humains qui s\'en sont sortis vivants, et les plus malchanceux ont été réduits en escalavage par des démons perfides',
        'Voici que Kaelan à son tour se voit téléporté sur ce continent impitoyable, et doit faire de son mieux pour espérer retrouver un jour les siens...'
    ],
    'title'=>'Chapter 1 : La Plaine de l\'exil',
    'scrolling'=>false
]);

$staurie->run(); //LANCE LE JEU