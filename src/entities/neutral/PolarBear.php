<?php

declare(strict_types=1);

namespace MobsLite\entities\neutral;

use MobsLite\entities\AbstractMob;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class PolarBear extends AbstractMob
{
    const TYPE_ID = EntityIds::POLAR_BEAR;

    const HEALTH = 30;
    const MOVEMENT_SPEED = 0.25;

    const ENTITY_SIZE_HEIGHT = 1.4;
    const ENTITY_SIZE_WIDTH = 1.3;
}
