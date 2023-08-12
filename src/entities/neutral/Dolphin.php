<?php

declare(strict_types=1);

namespace MobsLite\entities\neutral;

use MobsLite\entities\AbstractMob;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Dolphin extends AbstractMob
{
    const TYPE_ID = EntityIds::DOLPHIN;

    const HEALTH = 10;
    const MOVEMENT_SPEED = 1.2;

    const ENTITY_SIZE_HEIGHT = 0.9;
    const ENTITY_SIZE_WIDTH = 0.6;
}
