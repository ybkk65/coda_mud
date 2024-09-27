<?php

namespace Youns\CodaMud\Items;

use Jugid\Staurie\Game\Item_Equippable;

class CuirasseDeBrume extends Item_Equippable {

    public function name() : string {
        return 'CuirasseDeBrume';
    }

    public function description() : string {
        return 'La Cuirasse de Brume est forgée dans un métal argenté enchâssé de gemmes anciennes. Elle est entourée d\'une légère brume protectrice qui réduit la visibilité des attaques ennemies. Cette armure est prisée par ceux qui préfèrent la défense subtile à l\'offensive pure.';
    }

    public function body_part(): string { 
        return 'torse';
    }

    public function statistics(): array{
        return [
            'defense' => 20,
            // 'evasion_bonus' => 5 // Augmente légèrement l'esquive des attaques physiques
        ];
    }
}

