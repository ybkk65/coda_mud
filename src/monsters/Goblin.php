<?php

namespace Youns\CodaMud\Monsters;

use Jugid\Staurie\Game\Monster;

class Goblin extends Monster {

    public function name() : string {
        return 'Goblin';
    }

    public function description(): string { 
        return "Les gobelins sont une espèce de monstre qui vivait principalement à la frontière entre les forêts et les plaines ouvertes. Ils sont de forme humanoïde et utilisent des armes rudimentaires, mais ne peuvent pas comprendre le langage humain.";
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