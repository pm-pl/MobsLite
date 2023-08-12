<?php

declare(strict_types=1);

namespace MobsLite\entities\passive;

use MobsLite\entities\AbstractMob;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Ocelot extends AbstractMob
{
    const TYPE_ID = EntityIds::OCELOT;

    const HEALTH = 10;
    const MOVEMENT_SPEED = 0.8;

    const ENTITY_SIZE_HEIGHT = 0.7;
    const ENTITY_SIZE_WIDTH = 0.6;


}
