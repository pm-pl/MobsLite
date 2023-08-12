<?php

declare(strict_types=1);

namespace MobsLite\entities\neutral;

use MobsLite\entities\AbstractMob;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class TraderLlama extends AbstractMob
{
    const TYPE_ID = EntityIds::TRADER_LLAMA;

    const HEALTH = 30;
    const MOVEMENT_SPEED = 0.2;

    const ENTITY_SIZE_HEIGHT = 1.87;
    const ENTITY_SIZE_WIDTH = 0.9;
}
