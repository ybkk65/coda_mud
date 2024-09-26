<?php

namespace Src\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position;
use Src\Items\BouclierDeLaGarde;
use Src\Items\EpeeDeFer;
use Src\Monsters\SerpentDesPrairies;
use Src\Npcs\Galdur;

class Map01 extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(0,0);
    }

    public function name() : string {
        return 'Plaine des Exilés';
    }

    public function description() : string {
        return 'La Plaine des Exils est une vaste étendue stérile, marquée par des cendres et des débris d\'anciennes batailles. Le ciel y est souvent obscurci par des nuages menaçants, et un vent glacial souffle à travers les ruines des anciennes forteresses. Autrefois un lieu de refuge, elle est maintenant hantée par des échos de désespoir et des créatures sauvages.';
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        return [new Galdur()];
    }

    public function items() : array {
        return [new EpeeDeFer()];
        return [new BouclierDeLaGarde()];
    }

    public function monsters() : array {
        return [new SerpentDesPrairies()];
    }
}