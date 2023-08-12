<?php

declare(strict_types=1);

namespace MobsLite\entities\passive;

use MobsLite\entities\AbstractMob;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class SkeletonHorse extends AbstractMob
{
    const TYPE_ID = EntityIds::SKELETON_HORSE;

    const HEALTH = 15;
    const MOVEMENT_SPEED = 0.2;

    const ENTITY_SIZE_HEIGHT = 1.6;
    const ENTITY_SIZE_WIDTH = 0.79;


}
