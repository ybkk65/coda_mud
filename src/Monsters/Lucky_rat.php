<?php

namespace Youns\CodaMud\Monsters;

use Jugid\Staurie\Game\Monster;

class Lucky_rat extends Monster {

    public function name() : string {
        return 'Lucky_rat';
    }

    public function description(): string { 
        return "Les Lucky Rats sont une variante supérieure des Rats des plaines qui sont de plus grande taille. Les vêtements fabriqués à partir de leurs peaux résistent au poison et à l'acide";
    }

    public function level() : int {
        return 1;
    }

    public function health_points(): int { 
        return 10;
    }

    public function defense(): int { 
        return 2;
    }

    public function experience(): int { 
        return 12;
    }

    public function skills(): array { 
        return [
            'Charge' => 5,
        ];
    }
}