<?php

namespace Youns\CodaMud\Monsters;

use Jugid\Staurie\Game\Monster;

class Gyroraptor extends Monster {

    public function name() : string {
        return 'Gyroraptors';
    }

    public function description(): string { 
        return "Les gyroraptors sont des petits lézards bipèdes ressemblant à des vélociraptors qui apparaissent en groupes et se régalent de cadavres d'animaux.";
    }

    public function level() : int {
        return 1;
    }

    public function health_points(): int { 
        return 10;
    }

    public function defense(): int { 
        return 5;
    }

    public function experience(): int { 
        return 13;
    }

    public function skills(): array { 
        return [
            'Charge' => 20,
        ];
    }
}