<?php

namespace Youns\CodaMud\Items;

use Jugid\Staurie\Game\Item_Equippable;

class EpeeDeFer extends Item_Equippable {

    public function name() : string {
        return 'Épée de Fer';
    }

    public function description() : string {
        return 'L\'Épée de Fer est une arme bien équilibrée, forgée dans un acier solide. Sa lame d\'un mètre est polie et affûtée, capable de percer les armures légères. La garde ornée et le pommeau décoré d\'un symbole de feu ajoutent à son allure.';

    }

    public function body_part(): string { 
        return 'hands';
    }

    public function statistics(): array{
        return [
            'attack'=> 10
        ];
    }
}