<?php

declare(strict_types=1);

namespace MobsLite\entities\neutral;

use MobsLite\entities\AbstractMob;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Wolf extends AbstractMob
{
    const TYPE_ID = EntityIds::WOLF;

    const HEALTH = 8;
    const MOVEMENT_SPEED = 0.3;

    const ENTITY_SIZE_HEIGHT = 0.85;
    const ENTITY_SIZE_WIDTH = 0.6;

    public function getXpDropAmount(): int
    {
        return mt_rand(0, 2);
    }
}
