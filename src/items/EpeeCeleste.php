<?php

namespace Youns\CodaMud\Items;

use Jugid\Staurie\Game\Item_Equippable;

class EpeeCeleste extends Item_Equippable {

    public function name() : string {
        return 'EpeeCeleste';
    }

    public function description() : string {
        return 'Forgée dans les flammes éternelles des cieux, cette épée est imprégnée d\'un éclat mystique qui éblouit les ennemis. L\'épée est si tranchante qu\'elle peut fendre l\'air lui-même, infligeant des dégâts considérables aux créatures démoniaques.';
    }

    public function body_part(): string { 
        return 'hands';
    }

    public function statistics(): array{
        return [
            'attack' => 70,
            //Chance de coup critique : +10% (+75% dmg)
        ];
    }
}

