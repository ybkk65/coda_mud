<?php
namespace Youns\CodaMud\Maps ;


use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Jugid\Staurie\Example\Npcs\Cain;
use Jugid\Staurie\Example\Items\Sword;
use Jugid\Staurie\Example\Monsters\Bouftou;

class Map22 extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(7,1);
    }

    public function name() : string {
        return "Montagnes de l'Oubli 7";
    }

    public function description() : string {
        return "Des pics tranchants qui s'élèvent vers les cieux, tels des dagues de pierre prêtes à percer le ciel. Les chemins sinueux sont dangereux, bordés par des précipices vertigineux où le moindre faux pas pourrait entraîner une chute fatale. La neige éternelle recouvre les hauteurs, et le vent glacial qui descend des sommets emporte avec lui les souvenirs de ceux qui ont tenté d’atteindre l’impossible. La rumeur court que ces montagnes effacent la mémoire de quiconque y pénètre trop profondément, laissant les voyageurs se perdre à jamais dans l’oubli.";
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        return [new Cain()];
    }

    public function items() : array {
        return [new Sword()];
    }

    public function monsters() : array {
        return [new Bouftou()];
    }
}