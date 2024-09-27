<?php
namespace Youns\CodaMud\Maps ;


use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Jugid\Staurie\Example\Npcs\Cain;
use Jugid\Staurie\Example\Items\Sword;
use Jugid\Staurie\Example\Monsters\Bouftou;

class Map25 extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(8,3);
    }

    public function name() : string {
        return "Cité Déchue 3";
    }

    public function description() : string {
        return "La cité autrefois glorieuse continue de battre au rythme des activités de ses habitants, même si ses jours de prospérité sont révolus. Les bâtisses de pierre, bien que marquées par les ravages du temps, abritent encore des marchés animés où les marchands, vêtus de haillons, proposent des produits rares et exotiques. Les ruelles pavées, envahies par la végétation, bruissent des conversations et des rires des citoyens, bien que leurs visages portent les traces d'une fatigue et d'une résignation anciennes. Des enfants courent entre les étals, tandis que les gardes, bien que mal équipés, veillent à maintenir l'ordre dans cette cité où le désespoir et l'espoir coexistent étrangement.";
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