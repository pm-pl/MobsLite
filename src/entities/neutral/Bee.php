<?php

declare(strict_types=1);

namespace MobsLite\entities\neutral;

use MobsLite\entities\AbstractMob;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Bee extends AbstractMob
{
    const TYPE_ID = EntityIds::BEE;

    const HEALTH = 10;
    const MOVEMENT_SPEED = 0.6;

    const ENTITY_SIZE_HEIGHT = 0.7;
    const ENTITY_SIZE_WIDTH = 0.6;

    const CAN_CLIMB_WALLS = true;
    const GRAVITY = false;
}