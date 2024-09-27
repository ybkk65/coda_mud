<?php

namespace Youns\CodaMud\Monsters;

use Jugid\Staurie\Game\Monster;

class GreatTortoise extends Monster {

    public function name() : string {
        return 'Tortues Géantes';
    }

    public function description(): string { 
        return 'Les Tortues Géantes sont souvent trouvées dans les plaines du Continent du Démon. Elles mesurent souvent 8 mètres de long, et les plus grandes mesurent environ 23 mètres. Leur alimentation est assez commune, et elles ne sont pas particulièrement dangereuses.';
    }

    public function level() : int {
        return 1;
    }

    public function health_points(): int { 
        return 50;
    }

    public function defense(): int { 
        return 10;
    }

    public function experience(): int { 
        return 1;
    }

    public function skills(): array { 
        return [
            'Charge' => 1,
        ];
    }
}