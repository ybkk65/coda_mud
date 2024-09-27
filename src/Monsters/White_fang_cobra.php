<?php

namespace Youns\CodaMud\Monsters;

use Jugid\Staurie\Game\Monster;

class White_fang_cobra extends Monster {

    public function name() : string {
        return 'White_fang_cobra';
    }

    public function description(): string { 
        return "Les 'white fang cobra'sont des monstres serpents venimeux. Ils sont agiles et couverts d'écailles résistantes à la magie";
    }

    public function level() : int {
        return 1;
    }

    public function health_points(): int { 
        return 60;
    }

    public function defense(): int { 
        return 4;
    }

    public function experience(): int { 
        return 12;
    }

    public function skills(): array { 
        return [
            'Charge' => 20,
        ];
    }
}