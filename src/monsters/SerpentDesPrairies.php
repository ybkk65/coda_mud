<?php

namespace Youns\CodaMud\Monsters;

use Jugid\Staurie\Game\Monster;

class SerpentDesPrairies extends Monster {

    public function name() : string {
        return 'SerpentDesPrairies';
    }

    public function description(): string { 
        return 'Un serpent long et sinueux, mesurant environ deux mètres de long, avec une peau écailleuse d\'un vert vif mêlé de motifs jaunes. Ses yeux sont perçants et d\'un jaune brillant, et il se déplace avec une agilité étonnante dans l\'herbe haute. Sa langue fourchue se dresse souvent dans l\'air, détectant les vibrations autour de lui.';
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