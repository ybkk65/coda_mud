<?php

namespace Youns\CodaMud\Monsters;

use Jugid\Staurie\Game\Monster;

class Blue_dragon extends Monster {

    public function name() : string {
        return 'Blue_dragon';
    }

    public function description(): string { 
        return "Les dragons bleus sont des monstres de type dragon qui volent à travers le monde et ne reviennent dans leur chaîne de montagnes que lorsqu'ils pondent ou élevent leurs petits, comme les oiseaux migrateurs. La différence est qu'ils reviennent une fois tous les 10 ans";
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