<?php

namespace Youns\CodaMud\Monsters;

use Jugid\Staurie\Game\Monster;

class LeafTiger extends Monster {

    public function name() : string {
        return 'Tigres de Foret';
    }

    public function description(): string { 
        return "Les Tigres de Foret sont des monstres verts ressemblant à des tigres avec des rayures brunes, leur permettant de se camoufler dans la forêt. Ils se déplacent généralement en groupe";
    }

    public function level() : int {
        return 2;
    }

    public function health_points(): int { 
        return 25;
    }

    public function defense(): int { 
        return 15;
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