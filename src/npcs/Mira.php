<?php

namespace Youns\CodaMud\Npcs;

use Youns\CodaMud\Items\EpeeDeLOmbre;
use Jugid\Staurie\Game\Npc;
use Youns\CodaMud\Items\BouclierRunique;

class Mira extends Npc {

    public function name() : string {
        return 'Mira, la forgeronne';
    }

    public function description() : string {
        return 'Une démonesse musclée, couverte de suie et portant un tablier de cuir. Ses bras sont ornés de tatouages représentant des armes légendaires.';
    }

    public function speak() : string|array {
        return ['Ah, je vois que tu as déjà une Épée de Fer ! Parfait, avec ça, je peux t’aider à améliorer ton équipement. Je peux te forger quelque chose d’encore plus puissant. Tiens voici mes nouvelles inventions, l\'épée de l\'ombre, et le bouclier runique.'];
        $this->giveItem(new BouclierRunique());
        $this->giveItem(new EpeeDeLOmbre());
    }

}