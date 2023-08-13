<?php

declare(strict_types=1);

namespace MobsLite\entities\passive;

use MobsLite\entities\AbstractMob;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Horse extends AbstractMob
{
    const TYPE_ID = EntityIds::HORSE;

    protected int $health = 15;
    protected float $speed = 1.0;

    protected float $entitySizeHeigth = 1.6;
    protected float $entitySizeWidth = 1.4;


}
