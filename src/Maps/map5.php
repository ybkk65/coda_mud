<?php
namespace Youns\CodaMud\Maps ;


use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Jugid\Staurie\Example\Npcs\Cain;
use Jugid\Staurie\Example\Items\Sword;
use Jugid\Staurie\Example\Monsters\Bouftou;

class Map5 extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(2,2);
    }

    public function name() : string {
        return "Plaine de l'Exil 4";
    }

    public function description() : string {
        return  "
        Une vaste étendue désolée, où le vent souffle sans répit, soulevant la poussière et les rares brins d'herbe jaunie. Le sol craquelé, marqué par les traces de ceux qui y ont été bannis, s'étend à perte de vue sous un ciel grisâtre, comme si le soleil lui-même refusait d’y briller. Aucun abri ne protège des éléments impitoyables, et les murmures du vent portent les échos lointains de voix oubliées. Ici, le désespoir s’installe doucement, et la solitude devient la seule compagne de ceux qui osent traverser cette terre maudite.";
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