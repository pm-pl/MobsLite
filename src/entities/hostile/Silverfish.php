<?php

declare(strict_types=1);

namespace MobsLite\entities\hostile;

use MobsLite\entities\AbstractMob;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Silverfish extends AbstractMob
{
    const TYPE_ID = EntityIds::SILVERFISH;

    const HEALTH = 8;
    const MOVEMENT_SPEED = 0.4;

    const ENTITY_SIZE_HEIGHT = 0.3;
    const ENTITY_SIZE_WIDTH = 0.4;

    public function getXpDropAmount(): int
    {
        return 5;
    }
}
