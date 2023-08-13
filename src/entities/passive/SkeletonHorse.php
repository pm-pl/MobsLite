<?php

declare(strict_types=1);

namespace MobsLite\entities\passive;

use MobsLite\entities\AbstractMob;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SkeletonHorse extends AbstractMob
{
    const TYPE_ID = EntityIds::SKELETON_HORSE;

    protected int $health = 15;
    protected float $speed = 0.2;

    protected float $entitySizeHeigth = 1.6;
    protected float $entitySizeWidth = 0.79;


}
