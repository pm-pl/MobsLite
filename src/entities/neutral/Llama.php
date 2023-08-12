<?php

declare(strict_types=1);

namespace MobsLite\entities\neutral;

use MobsLite\entities\AbstractMob;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Llama extends AbstractMob
{
    const TYPE_ID = EntityIds::LLAMA;

    const HEALTH = 15;
    const MOVEMENT_SPEED = 0.2;

    const ENTITY_SIZE_HEIGHT = 1.87;
    const ENTITY_SIZE_WIDTH = 0.9;
}
