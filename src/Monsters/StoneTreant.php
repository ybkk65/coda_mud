<?php

namespace Youns\CodaMud\Monsters;

use Jugid\Staurie\Game\Monster;

class StoneTreant extends Monster {

    public function name() : string {
        return 'Tréants de Pierre';
    }

    public function description(): string { 
        return "Les tréants de pierre sont des tréants qui se déguisent en rochers et attaquent quiconque s'approche trop près. Ils sont généralement tués pour être utilisés comme bois de chauffage. Leurs graines sont comestibles et souvent servies sous forme de haricots frits au bar.";
    }

    public function level() : int {
        return 3;
    }

    public function health_points(): int { 
        return 25;
    }

    public function defense(): int { 
        return 15;
    }

    public function experience(): int { 
        return 35;
    }

    public function skills(): array { 
        return [
            'Charge' => 25,
        ];
    }
}