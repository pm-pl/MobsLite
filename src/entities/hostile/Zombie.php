<?php

declare(strict_types=1);

namespace MobsLite\entities\hostile;

use MobsLite\entities\AbstractMob;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\item\VanillaItems;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;
use pocketmine\player\Player;

class Zombie extends AbstractMob
{
    const TYPE_ID = EntityIds::ZOMBIE;

    const HEALTH = 20;
    const MOVEMENT_SPEED = 0.23;

    const ENTITY_SIZE_HEIGHT = 1.95;
    const ENTITY_SIZE_WIDTH = 0.6;

    public function getDrops(): array
    {
        $cause = $this->lastDamageCause;
        if ($cause instanceof EntityDamageByEntityEvent) {
            $damager = $cause->getDamager();
            if ($damager instanceof Player) {
                return [VanillaItems::ROTTEN_FLESH()];
            }
        }
        return [];
    }

    public function getXpDropAmount(): int
    {
        return 5;
    }
}
