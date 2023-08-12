<?php

declare(strict_types=1);

namespace MobsLite\entities\hostile;

use MobsLite\entities\AbstractMob;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Ravager extends AbstractMob
{
    const TYPE_ID = EntityIds::RAVAGER;

    const HEALTH = 100;
    const MOVEMENT_SPEED = 0.4;

    const ENTITY_SIZE_HEIGHT = 2.2;
    const ENTITY_SIZE_WIDTH = 1.95;

    public function getXpDropAmount(): int
    {
        return 20;
    }
}
