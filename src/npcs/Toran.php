<?php

namespace Youns\CodaMud\Npcs;

use Jugid\Staurie\Game\Npc;
use Youns\CodaMud\Items\AnneauDeLImmortalité;

class Toran extends Npc {

    public function name() : string {
        return 'Toran, le guerrier déchu';
    }

    public function description() : string {
        return 'Un vieux démon brisé, porte une armure rouillée et des cicatrices. Son regard éteint trahit un passé glorieux perdu.';
    }

    public function speak() : string|array {
        return ['Dans une salle sombre et humide, tu aperçois Torak, assis contre un mur de pierre, ses yeux fixés sur le sol. Son armure est déchirée et rouillée, et il tient à peine son épée dans ses mains tremblantes. Pourtant, quelque chose dans son regard montre qu\'il n\'a pas totalement abandonné.',
    'Approche, étranger... Je sens que le poids de la défaite pèse aussi sur tes épaules. Moi, Torak, j’ai perdu tout honneur. Mais toi, tu peux encore te racheter. Dans la prochaine salle, un être infâme rôde, celui qui m\'a volé ma dignité. C\'est à toi de finir ce que j\'ai commencé. Affronte-le et obtiens la victoire qui m\'a échappé'];
        $this->giveItem(new AnneauDeLImmortalité());
    }

}