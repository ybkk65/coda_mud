<?php

namespace Youns\CodaMud\Items;

use Jugid\Staurie\Game\Item_Equippable;

class EpeeDeLOmbre extends Item_Equippable {

    public function name() : string {
        return 'EpeeDeLOmbre';
    }

    public function description() : string {
        return 'Forgée à partir de métal noirci par la magie, l\'Épée de l\'Ombre est une arme légère mais mortelle. Sa lame absorbe la lumière, ce qui lui donne un aspect sinistre. Utilisée par les éclaireurs démoniaques, elle est connue pour frapper avec une précision redoutable. C\'est l\'arme idéale pour les aventuriers expérimentés cherchant un équilibre entre puissance et rapidité.';
    }

    public function body_part(): string { 
        return 'hands';
    }

    public function statistics(): array{
        return [
            'damage' => 25,
            // 'evasion_bonus' => 10 // Bonus d'esquive contre les attaques magiques
        ];
    }
}
