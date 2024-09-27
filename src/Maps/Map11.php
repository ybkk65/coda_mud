<?php
namespace Youns\CodaMud\Maps ;


use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Jugid\Staurie\Example\Npcs\Cain;
use Jugid\Staurie\Example\Items\Sword;
use Jugid\Staurie\Example\Monsters\Bouftou;

class Map11 extends Blueprint {

    private Position $position;

    public function __construct()
    {
        $this->position = new Position(4,6);
    }

    public function name() : string {
        return "Forêt Maudite 3";
    }

    public function description() : string {
        return "Une forêt dense, où la lumière peine à percer l'épaisse canopée des arbres noueux et torturés. Chaque pas est étouffé par un tapis d'humus moisi, et les cris des créatures invisibles résonnent dans l'air humide. Les racines des arbres semblent se tordre comme des serpents, prêtes à entraver les voyageurs imprudents. Des rumeurs parlent d’esprits piégés et de bêtes monstrueuses qui hantent ces bois depuis des siècles. Le parfum de la pourriture et du bois mort s'accroche aux vêtements, et l'obscurité omniprésente dévore peu à peu toute trace de rationalité.";
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