<?php

namespace Youns\CodaMud\Items;

use Jugid\Staurie\Game\Item_Equippable;

class AnneauDeLImmortalité extends Item_Equippable {

    public function name() : string {
        return 'AnneauDeLImmortalité';
    }

    public function description() : string {
        return 'Forgé par des maîtres artisans démons, cet anneau rend son porteur quasi invincible en augmentant sa vie. L\'anneau émet une lumière rouge lorsque ses pouvoirs sont activés.';

    }

    public function body_part(): string { 
        return 'ring';
    }

    public function statistics(): array{
        return [
            'vie'=> 100
        ];
    }
}