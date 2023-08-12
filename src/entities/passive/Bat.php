<?php

declare(strict_types=1);

namespace MobsLite\entities\passive;

use MobsLite\entities\AbstractMob;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Bat extends AbstractMob
{
    const TYPE_ID = EntityIds::BAT;

    const HEALTH = 6;
    const MOVEMENT_SPEED = 0.8;
    const GRAVITY = false;

    const ENTITY_SIZE_HEIGHT = 0.5;
    const ENTITY_SIZE_WIDTH = 0.9;


}
