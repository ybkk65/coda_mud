<?php

namespace Youns\CodaMud\Monsters;

use Jugid\Staurie\Game\Monster;

class PaxCoyote extends Monster {

    public function name() : string {
        return 'Pax Coyote';
    }

    public function description(): string { 
        return "Les Pax Coyotes sont des monstres canins d'environ 2 mètres de long, trainant en meutes. Tous les nouveaux coyotes étant sous le contrôle total de leur chef. Si ce chef tombait au combat, un autre coyote prendrait instantanément sa position. Leur force réside principalement dans leur nombre, mais leur parfaite coordination et leur discipline les rendent véritablement dangereux.";
    }

    public function level() : int {
        return 2;
    }

    public function health_points(): int { 
        return 15;
    }

    public function defense(): int { 
        return 15;
    }

    public function experience(): int { 
        return 25;
    }

    public function skills(): array { 
        return [
            'Charge' => 20,
        ];
    }
}