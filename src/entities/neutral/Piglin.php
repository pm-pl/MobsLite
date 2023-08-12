<?php

declare(strict_types=1);

namespace MobsLite\entities\neutral;

use MobsLite\entities\AbstractMob;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\item\VanillaItems;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;
use pocketmine\player\Player;

class Piglin extends AbstractMob
{
    const TYPE_ID = EntityIds::PIGLIN;

    const HEALTH = 16;
    const MOVEMENT_SPEED = 0.35;

    const ENTITY_SIZE_HEIGHT = 1.95;
    const ENTITY_SIZE_WIDTH = 0.6;

    public function getDrops(): array
    {
        $cause = $this->lastDamageCause;
        if ($cause instanceof EntityDamageByEntityEvent) {
            $damager = $cause->getDamager();
            if ($damager instanceof Player) {
                return [VanillaItems::GOLD_NUGGET()->setCount(mt_rand(0, 3)), VanillaItems::GOLD_INGOT()->setCount(mt_rand(0, 3))];
            }
        }
        return [];
    }

    public function getXpDropAmount(): int
    {
        return 5;
    }
}