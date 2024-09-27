<?php

namespace Youns\CodaMud\Monsters;

use Jugid\Staurie\Game\Monster;

class Executioner extends Monster {

    public function name() : string {
        return 'executioner';
    }

    public function description(): string { 
        return "L'executioner est un type de monstre humanoïde formé à partir des restes zombifiés de quelqu'un qui avait été un aventurier dans sa vie. Ils sont équipés d'énormes épées et d'armures de plaques épaisses qui se dissoudraient dans l'air lorsqu'ils seraient vaincus. Le poids de leur équipement les empêchait de se déplacer trop rapidement, mais ils sont extrêmement robustes et manient leur arme avec une finesse surprenante.";
    }

    public function level() : int {
        return 1;
    }

    public function health_points(): int { 
        return 30;
    }

    public function defense(): int { 
        return 2;
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