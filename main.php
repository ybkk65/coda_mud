<?php
use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\Menu\Menu;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Jugid\Staurie\Component\Character\MainCharacter;
use Jugid\Staurie\Component\Introduction\Introduction;
use Jugid\Staurie\Staurie;

require_once __DIR__.'/vendor/autoload.php'; //A REMPLACER

$staurie = new Staurie('My game');

$staurie->register([Console::class, PrettyPrinter::class, Menu::class, MainCharacter::class]);

$container = $staurie->getContainer();

$introduction = $container->registerComponent(Introduction::class);
$introduction->configuration([
    'title'=> "Le continent demoniaque",
    'text' => "Chapitre 1 - L'incident de deplacement",
]);

$staurie->run(); //LANCE LE JEU