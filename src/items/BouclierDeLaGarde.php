<?php

namespace Youns\CodaMud\Items;

use Jugid\Staurie\Game\Item_Equippable;

class BouclierDeLaGarde extends Item_Equippable {

    public function name() : string {
        return 'BouclierDeLaGarde';
    }

    public function description() : string {
        return 'Le Bouclier de la Garde est un bouclier simple, fait de bois renforcé et recouvert d\'une couche de métal. Sa surface est ornée d\'un symbole représentant une lance croisée avec une épée, symbole de protection et de bravoure. Bien qu\'il ne soit pas particulièrement extravagant, ce bouclier est connu pour sa solidité et sa fiabilité sur le champ de bataille.';

    }

    public function body_part(): string { 
        return 'bouclier';
    }

    public function statistics(): array{
        return [
            'defense'=> 5
        ];
    }
}