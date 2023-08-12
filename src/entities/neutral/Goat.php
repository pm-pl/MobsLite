<?php

declare(strict_types=1);

namespace MobsLite\entities\neutral;

use MobsLite\entities\AbstractMob;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\item\VanillaItems;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;
use pocketmine\player\Player;

class Goat extends AbstractMob
{
    const TYPE_ID = EntityIds::GOAT;

    const HEALTH = 10;
    const MOVEMENT_SPEED = 0.15;

    const ENTITY_SIZE_HEIGHT = 1.3;
    const ENTITY_SIZE_WIDTH = 0.9;

    public function getDrops(): array
    {
        $cause = $this->lastDamageCause;
        if ($cause instanceof EntityDamageByEntityEvent) {
            $damager = $cause->getDamager();
            if ($damager instanceof Player) {
                return [VanillaItems::LEATHER()];
            }
        }
        return [];
    }

    public function getXpDropAmount(): int
    {
        return mt_rand(1, 3);
    }
}
