<?php

declare(strict_types=1);

namespace MobsLite\entities\passive;

use MobsLite\entities\AbstractMob;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Frog extends AbstractMob
{
    const TYPE_ID = EntityIds::FROG;

    const HEALTH = 10;
    const MOVEMENT_SPEED = 1.0;

    const ENTITY_SIZE_HEIGHT = 0.4;
    const ENTITY_SIZE_WIDTH = 0.3;


}
