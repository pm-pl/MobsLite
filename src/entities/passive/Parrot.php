<?php

declare(strict_types=1);

namespace MobsLite\entities\passive;

use MobsLite\entities\AbstractMob;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Parrot extends AbstractMob
{
    const TYPE_ID = EntityIds::PARROT;

    const HEALTH = 6;
    const MOVEMENT_SPEED = 1.2;
    const GRAVITY = false;

    const ENTITY_SIZE_HEIGHT = 0.9;
    const ENTITY_SIZE_WIDTH = 0.5;


}
