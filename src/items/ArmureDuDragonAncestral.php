<?php

namespace Youns\CodaMud\Items;

use Jugid\Staurie\Game\Item_Equippable;

class ArmureDuDragonAncestral extends Item_Equippable {

    public function name() : string {
        return 'ArmureDuDragonAncestral';
    }

    public function description() : string {
        return 'Fabriquée à partir des écailles d\'un dragon ancestral disparu, cette armure est presque impénétrable. Elle dégage une aura de puissance qui renforce la résistance du porteur face aux attaques élémentaires.';

    }

    public function body_part(): string { 
        return 'armure';
    }

    public function statistics(): array{
        return [
            'defense'=> 70
        ];
    }
}