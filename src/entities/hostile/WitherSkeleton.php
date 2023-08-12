<?php

declare(strict_types=1);

namespace MobsLite\entities\hostile;

use MobsLite\entities\AbstractMob;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\item\VanillaItems;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;
use pocketmine\player\Player;

class WitherSkeleton extends AbstractMob
{
    const TYPE_ID = EntityIds::WITHER_SKELETON;

    const HEALTH = 20;
    const MOVEMENT_SPEED = 0.25;

    const ENTITY_SIZE_HEIGHT = 2.4;
    const ENTITY_SIZE_WIDTH = 0.7;

    public function getDrops(): array
    {
        $cause = $this->lastDamageCause;
        if ($cause instanceof EntityDamageByEntityEvent) {
            $damager = $cause->getDamager();
            if ($damager instanceof Player) {
                return [VanillaItems::COAL(), VanillaItems::BONE()];
            }
        }
        return [];
    }

    public function getXpDropAmount(): int
    {
        return mt_rand(1, 3);
    }
}