<?php

declare(strict_types=1);

namespace MobsLite\entities\neutral;

use MobsLite\entities\AbstractMob;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\item\VanillaItems;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;
use pocketmine\player\Player;

class Enderman extends AbstractMob
{
    const TYPE_ID = EntityIds::ENDERMAN;

    const HEALTH = 40;
    const MOVEMENT_SPEED = 0.3;

    const ENTITY_SIZE_HEIGHT = 2.9;
    const ENTITY_SIZE_WIDTH = 0.6;

    public function getDrops(): array
    {
        $cause = $this->lastDamageCause;
        if ($cause instanceof EntityDamageByEntityEvent) {
            $damager = $cause->getDamager();
            if ($damager instanceof Player) {
                return [VanillaItems::ENDER_PEARL()->setCount(mt_rand(0, 1))];
            }
        }
        return [];
    }

    public function getXpDropAmount(): int
    {
        return 5;
    }
}
