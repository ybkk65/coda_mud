<?php
namespace Youns\CodaMud\Maps ;


use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Jugid\Staurie\Example\Npcs\Cain;
use Jugid\Staurie\Example\Items\Sword;
use Jugid\Staurie\Example\Monsters\Bouftou;

class Map1 extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(0,0);
    }

    public function name() : string {
        return ' map';
    }

    public function description() : string {
        return 'youns1';
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