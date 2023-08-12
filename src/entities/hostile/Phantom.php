<?php

declare(strict_types=1);

namespace MobsLite\entities\hostile;

use MobsLite\entities\AbstractMob;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Phantom extends AbstractMob
{
    const TYPE_ID = EntityIds::PHANTOM;

    const HEALTH = 20;
    const MOVEMENT_SPEED = 0.6;

    const ENTITY_SIZE_HEIGHT = 0.5;
    const ENTITY_SIZE_WIDTH = 0.9;

    public function getXpDropAmount(): int
    {
        return 5;
    }
}
