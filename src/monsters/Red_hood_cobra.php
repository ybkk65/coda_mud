<?php

namespace Youns\CodaMud\Monsters;

use Jugid\Staurie\Game\Monster;

class Red_hood_cobra extends Monster {

    public function name() : string {
        return 'Red_hood_cobra';
    }

    public function description(): string { 
        return "le 'Red Hood Cobra'est une variante plus puissante du 'White-Fang Cobra'. Ils sont plus grands et beaucoup plus agiles, avec suffisamment de réflexes pour esquiver les projectiles après leur lancement. Leurs écailles sont dures et résistantes à la magie du feu, tandis que leurs crocs sont énormes et pleins de venin mortel.";
    }

    public function level() : int {
        return 1;
    }

    public function health_points(): int { 
        return 70;
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