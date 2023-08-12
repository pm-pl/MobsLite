<?php

declare(strict_types=1);

namespace MobsLite\entities\hostile;

use MobsLite\entities\AbstractMob;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\item\VanillaItems;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;
use pocketmine\player\Player;

class Guardian extends AbstractMob
{
    const TYPE_ID = EntityIds::GUARDIAN;

    const HEALTH = 30;
    const MOVEMENT_SPEED = 0.5;

    const ENTITY_SIZE_HEIGHT = 0.85;
    const ENTITY_SIZE_WIDTH = 0.85;

    public function getDrops(): array
    {
        $cause = $this->lastDamageCause;
        if ($cause instanceof EntityDamageByEntityEvent) {
            $damager = $cause->getDamager();
            if ($damager instanceof Player) {
                return [VanillaItems::PRISMARINE_SHARD()];
            }
        }
        return [];
    }

    public function getXpDropAmount(): int
    {
        return 10;
    }
}
