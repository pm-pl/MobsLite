<?php

declare(strict_types=1);

namespace MobsLite\entities\passive;

use MobsLite\entities\AbstractMob;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\item\VanillaItems;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;
use pocketmine\player\Player;

class Chicken extends AbstractMob
{
    const TYPE_ID = EntityIds::CHICKEN;

    const HEALTH = 4;
    const MOVEMENT_SPEED = 0.25;

    const ENTITY_SIZE_HEIGHT = 0.7;
    const ENTITY_SIZE_WIDTH = 0.4;

    public function getDrops(): array
    {
        $cause = $this->lastDamageCause;
        if ($cause instanceof EntityDamageByEntityEvent) {
            $damager = $cause->getDamager();
            if ($damager instanceof Player) {
                return [VanillaItems::FEATHER(), VanillaItems::RAW_CHICKEN(), VanillaItems::EGG()->setCount(mt_rand(0, 1))];
            }
        }
        return [];
    }

    public function getXpDropAmount(): int
    {
        return mt_rand(1, 3);
    }
}