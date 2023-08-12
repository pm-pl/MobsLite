<?php

declare(strict_types=1);

namespace MobsLite\entities\passive;

use MobsLite\entities\AbstractMob;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Tadpole extends AbstractMob
{
    const TYPE_ID = EntityIds::TADPOLE;

    const HEALTH = 1;
    const MOVEMENT_SPEED = 1.0;

    const ENTITY_SIZE_HEIGHT = 0.11;
    const ENTITY_SIZE_WIDTH = 0.11;


}
