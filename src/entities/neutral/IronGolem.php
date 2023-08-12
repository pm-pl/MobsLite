<?php

declare(strict_types=1);

namespace MobsLite\entities\neutral;

use MobsLite\entities\AbstractMob;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\item\VanillaItems;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;
use pocketmine\player\Player;

class IronGolem extends AbstractMob
{
    const TYPE_ID = EntityIds::IRON_GOLEM;

    const HEALTH = 100;
    const MOVEMENT_SPEED = 0.25;

    const ENTITY_SIZE_HEIGHT = 2.7;
    const ENTITY_SIZE_WIDTH = 1.4;

    public function getDrops(): array
    {
        $cause = $this->lastDamageCause;
        if ($cause instanceof EntityDamageByEntityEvent) {
            $damager = $cause->getDamager();
            if ($damager instanceof Player) {
                return [VanillaItems::IRON_INGOT()->setCount(mt_rand(1, 5))];
            }
        }
        return [];
    }
}
