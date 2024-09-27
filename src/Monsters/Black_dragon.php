<?php

namespace Youns\CodaMud\Monsters;

use Jugid\Staurie\Game\Monster;

class Black_dragon extends Monster {

    public function name() : string {
        return 'black_dragon';
    }

    public function description(): string { 
        return "Les black dragons sont des monstres de type dragon capables de voler. Ils sont armés de fortes mâchoires et de griffes venimeuses";
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