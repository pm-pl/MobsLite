<?php

declare(strict_types=1);

namespace MobsLite\entities\passive;

use MobsLite\entities\AbstractMob;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\item\VanillaItems;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;
use pocketmine\player\Player;

class PufferFish extends AbstractMob
{
    const TYPE_ID = EntityIds::PUFFERFISH;

    const HEALTH = 3;
    const MOVEMENT_SPEED = 1.0;

    const ENTITY_SIZE_HEIGHT = 0.7;
    const ENTITY_SIZE_WIDTH = 0.7;

    public function getDrops(): array
    {
        $cause = $this->lastDamageCause;
        if ($cause instanceof EntityDamageByEntityEvent) {
            $damager = $cause->getDamager();
            if ($damager instanceof Player) {
                return [VanillaItems::PUFFERFISH()];
            }
        }
        return [];
    }

    public function getXpDropAmount(): int
    {
        return mt_rand(1, 3);
    }
}
