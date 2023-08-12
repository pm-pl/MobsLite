<?php

declare(strict_types=1);

namespace MobsLite\entities\passive;

use MobsLite\entities\AbstractMob;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;

class Sniffer extends AbstractMob
{
    /**
     * @TODO
     */
    const TYPE_ID = EntityIds::SNIFFER;

    const HEALTH = 30;
    const MOVEMENT_SPEED = 0.2;

    const ENTITY_SIZE_HEIGHT = 1.3;
    const ENTITY_SIZE_WIDTH = 0.9;


    public function getXpDropAmount(): int
    {
        return mt_rand(1, 3);
    }
}
