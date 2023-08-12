<?php

declare(strict_types=1);

namespace MobsLite\entities\hostile;

use MobsLite\entities\AbstractMob;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Vex extends AbstractMob
{
    const TYPE_ID = EntityIds::VEX;

    const HEALTH = 14;
    const MOVEMENT_SPEED = 0.8;

    const ENTITY_SIZE_HEIGHT = 0.4;
    const ENTITY_SIZE_WIDTH = 0.2;

    public function getXpDropAmount(): int
    {
        return mt_rand(3, 5);
    }
}
