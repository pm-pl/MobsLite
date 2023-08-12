<?php

declare(strict_types=1);

namespace MobsLite\entities\hostile;

use MobsLite\entities\AbstractMob;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\item\VanillaItems;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;
use pocketmine\player\Player;

class Ghast extends AbstractMob
{
    const TYPE_ID = EntityIds::GHAST;

    const HEALTH = 10;
    const MOVEMENT_SPEED = 0.001;

    const ENTITY_SIZE_HEIGHT = 4.0;
    const ENTITY_SIZE_WIDTH = 4.0;

    const GRAVITY = false;

    public function getDrops(): array
    {
        $cause = $this->lastDamageCause;
        if ($cause instanceof EntityDamageByEntityEvent) {
            $damager = $cause->getDamager();
            if ($damager instanceof Player) {
                return [VanillaItems::GHAST_TEAR(), VanillaItems::GUNPOWDER()];
            }
        }
        return [];
    }

    public function getXpDropAmount(): int
    {
        return 5;
    }
}