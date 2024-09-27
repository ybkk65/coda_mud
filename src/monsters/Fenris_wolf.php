<?php

namespace Youns\CodaMud\Monsters;

use Jugid\Staurie\Game\Monster;

class Fenris_wolf extends Monster {

    public function name() : string {
        return 'fenris_wolf';
    }

    public function description(): string { 
        return "Les Fenris Wolves sont des loups géants à six pattes avec une fourrure noire, des crocs géants et deux queues enflammées. C'est un type de monstre qui réside généralement dans les régions montagneuses du continent démoniaque. Ils sont très intelligents et agiles, capables d'identifier et de contrer efficacement les tactiques utilisées par leurs adversaires";
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