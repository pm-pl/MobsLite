<?php

declare(strict_types=1);

namespace MobsLite\entities\passive;

use MobsLite\entities\AbstractMob;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class WanderingTrader extends AbstractMob
{
    const TYPE_ID = EntityIds::WANDERING_TRADER;

    const HEALTH = 20;
    const MOVEMENT_SPEED = 0.5;

    const ENTITY_SIZE_HEIGHT = 1.95;
    const ENTITY_SIZE_WIDTH = 0.6;
}
