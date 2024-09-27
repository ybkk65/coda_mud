<?php

namespace Youns\CodaMud\Npcs;

use Jugid\Staurie\Game\Npc;
use Youns\CodaMud\Items\ArmureDuDragonAncestral;
use Youns\CodaMud\Items\BouclierDuJugementEternel;
use Youns\CodaMud\Items\EpeeCeleste;

class Kiran extends Npc {

    public function name() : string {
        return 'Kiran, le chasseur de démon';
    }

    public function description() : string {
        return 'Un démon agile avec des oreilles pointues et une armure portant les pouvoirs des dragons. Il porte une grande épée et a l\'air toujours sur le qui-vive.';
    }

    public function speak() : string|array {
        return ['En te baladant dans la forêt voisine, tu tombes sur une scène tragique. Le corps sans vie de Kiran, le légendaire chasseur de démons, repose contre un arbre, son arbalète brisée à ses côtés. Ses vêtements sont déchirés, et des traces de lutte marquent le sol autour de lui. Ses yeux, toujours ouverts, fixent le ciel, témoignant de son dernier combat contre les démons qu\'il traquait.',
    'Tu t\'approches du corps de Kiran. Le chasseur de démons n\'a pas survécu à sa dernière bataille, laissant derrière lui ses possessions. Tu remarques un bouclier de haut niveau, son armure légendaire portant les signes de nombreuses batailles mais encore utilisable, et sa fameuse épée, un peu endommagée mais toujours fonctionnelle. Sans dire un mot, tu récupères ses affaires. Kiran n\'aura pas besoin de ses outils de chasse là où il est parti.'];
        $this->giveItem(new BouclierDuJugementEternel());
        $this->giveItem(new ArmureDuDragonAncestral());
        $this->giveItem(new EpeeCeleste());
    }
}