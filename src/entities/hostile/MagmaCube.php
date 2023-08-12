<?php

declare(strict_types=1);

namespace MobsLite\entities\hostile;

use MobsLite\entities\AbstractMob;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\item\VanillaItems;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;
use pocketmine\player\Player;

class MagmaCube extends AbstractMob
{
    const TYPE_ID = EntityIds::MAGMA_CUBE;

    const HEALTH = 8;
    const MOVEMENT_SPEED = 0.4;

    const ENTITY_SIZE_HEIGHT = 0.8;
    const ENTITY_SIZE_WIDTH = 0.8;

    public function getDrops(): array
    {
        $cause = $this->lastDamageCause;
        if ($cause instanceof EntityDamageByEntityEvent) {
            $damager = $cause->getDamager();
            if ($damager instanceof Player) {
                return [VanillaItems::MAGMA_CREAM()];
            }
        }
        return [];
    }

    public function getXpDropAmount(): int
    {
        return mt_rand(0, 4);
    }
}
