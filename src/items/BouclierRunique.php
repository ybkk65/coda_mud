<?php

namespace Youns\CodaMud\Items;

use Jugid\Staurie\Game\Item_Equippable;

class BouclierRunique extends Item_Equippable {

    public function name() : string {
        return 'BouclierRunique';
    }

    public function description() : string {
        return 'Le Bouclier Runique est recouvert de mystérieuses runes anciennes. Ces gravures magiques lui confèrent une résistance exceptionnelle aux attaques physiques et magiques. Utilisé autrefois par les anciens guerriers démoniaques, il est aussi robuste qu\'il est énigmatique.';
    }

    public function body_part(): string { 
        return 'shield';
    }

    public function statistics(): array{
        return [
            'defense' => 20,
            'magic_resistance' => 15 // Réduit les dégâts magiques de 15%
        ];
    }
}

