<?php

namespace Src\Npcs;

use Src\Items\BouclierDeLaGarde;
use Src\Items\EpeeDeFer;
use Src\Npcs;

class Galdur extends Npcs {

    public function name() : string {
        return 'Galdur';
    }

    public function description() : string {
        return 'Un vieux démon à la retraite, ancien garde ';
    }

    public function speak() : string|array {
        return ['Ah, un nouvel aventurier émerge des brumes du destin. Je suis Galdur, le Sage des Ombres. Bien que mon corps soit fatigué, mon esprit demeure vif. J\'ai observé le monde pendant des siècles, et je sais que les chemins que tu emprunteras seront parsemés de dangers.', 'Si tu cherches à survivre dans ce monde, tu auras besoin d\'équipement. Je peux te confier des objets qui ont porté chance à de nombreux héros au fil des âges. Voici ce que j\'ai à t\'offrir :'];
        $this->giveItem(new BouclierDeLaGarde());
        $this->giveItem(new EpeeDeFer());
    }

}