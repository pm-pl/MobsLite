<?php

declare(strict_types=1);

namespace MobsLite\entities\neutral;

use MobsLite\entities\AbstractMob;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\item\VanillaItems;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;
use pocketmine\player\Player;

class CaveSpider extends AbstractMob
{
    const TYPE_ID = EntityIds::CAVE_SPIDER;

    const HEALTH = 12;
    const MOVEMENT_SPEED = 0.5;

    const ENTITY_SIZE_HEIGHT = 0.5;
    const ENTITY_SIZE_WIDTH = 0.7;

    const CAN_CLIMB = true;
    const CAN_CLIMB_WALLS = true;

    public function getDrops(): array
    {
        $cause = $this->lastDamageCause;
        if ($cause instanceof EntityDamageByEntityEvent) {
            $damager = $cause->getDamager();
            if ($damager instanceof Player) {
                return [VanillaItems::STRING(), VanillaItems::SPIDER_EYE()->setCount(mt_rand(0, 1))];
            }
        }
        return [];
    }

    public function getXpDropAmount(): int
    {
        return mt_rand(0, 2);
    }
}
