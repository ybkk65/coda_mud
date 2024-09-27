<?php

namespace Youns\CodaMud\Items;

use Jugid\Staurie\Game\Item_Equippable;

class BouclierDuJugementEternel extends Item_Equippable {

    public function name() : string {
        return 'BouclierDuJugementEternel';
    }

    public function description() : string {
        return 'Ce bouclier légendaire, orné de symboles anciens, est dit capable de refléter la lumière des cieux. Utilisé par les héros lors de guerres anciennes, il inspire la crainte et le respect.';

    }

    public function body_part(): string { 
        return 'bouclier';
    }

    public function statistics(): array{
        return [
            'defense'=> 60
        ];
    }
}