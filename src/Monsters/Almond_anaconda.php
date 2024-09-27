<?php

namespace Youns\CodaMud\Monsters;

use Jugid\Staurie\Game\Monster;

class Almond_anaconda extends Monster {

    public function name() : string {
        return 'Almond_anaconda';
    }

    public function description(): string { 
        return "Les Anacondas sont des monstres serpents qui voyagent en groupes de trois à cinq. Ils tirent leur nom du motif distinctif en forme d'amande sur leur corps, qui mesurait généralement environ 3 mètres de long. Leurs crocs sont pleins de venin mortel et ils se déplacent avec une grande agilité";
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