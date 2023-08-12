<?php

declare(strict_types=1);

namespace MobsLite\entities\passive;

use MobsLite\entities\AbstractMob;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Horse extends AbstractMob
{
    const TYPE_ID = EntityIds::HORSE;

    const HEALTH = 15;
    const MOVEMENT_SPEED = 1.0;

    const ENTITY_SIZE_HEIGHT = 1.6;
    const ENTITY_SIZE_WIDTH = 1.4;


}
