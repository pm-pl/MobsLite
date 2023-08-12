<?php

declare(strict_types=1);

namespace MobsLite\entities\hostile;

use MobsLite\entities\AbstractMob;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Warden extends AbstractMob
{
    const TYPE_ID = EntityIds::WARDEN;

    const HEALTH = 500;
    const MOVEMENT_SPEED = 0.3;

    const ENTITY_SIZE_HEIGHT = 2.9;
    const ENTITY_SIZE_WIDTH = 0.9;

    public function getXpDropAmount(): int
    {
        return 15;
    }
}
