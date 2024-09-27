<?php

namespace Youns\CodaMud\Monsters;

use Jugid\Staurie\Game\Monster;

class AcidWolf extends Monster {

    public function name() : string {
        return 'Loup Acide';
    }

    public function description(): string { 
        return 'Les Loups Acides sont des gros monstres carnivores mesurant plus de 3 metres de long et peuvent cracher une salive très acide.';
    }

    public function level() : int {
        return 1;
    }

    public function health_points(): int { 
        return 20;
    }

    public function defense(): int { 
        return 3;
    }

    public function experience(): int { 
        return 30;
    }

    public function skills(): array { 
        return [
            'Charge' => 15,
        ];
    }
}