<?php

declare(strict_types=1);

namespace MobsLite\entities\hostile;

use MobsLite\entities\AbstractMob;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class PiglinBrute extends AbstractMob
{
    const TYPE_ID = EntityIds::PIGLIN_BRUTE;

    const HEALTH = 50;
    const MOVEMENT_SPEED = 0.25;

    const ENTITY_SIZE_HEIGHT = 1.95;
    const ENTITY_SIZE_WIDTH = 0.6;
}
