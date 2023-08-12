<?php

declare(strict_types=1);

namespace MobsLite\entities\hostile;

use MobsLite\entities\AbstractMob;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\item\VanillaItems;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;
use pocketmine\player\Player;

class Slime extends AbstractMob
{
    const TYPE_ID = EntityIds::SLIME;

    const HEALTH = 4;
    const MOVEMENT_SPEED = 0.45;

    const ENTITY_SIZE_HEIGHT = 0.7;
    const ENTITY_SIZE_WIDTH = 0.6;

    public function getDrops(): array
    {
        $cause = $this->lastDamageCause;
        if ($cause instanceof EntityDamageByEntityEvent) {
            $damager = $cause->getDamager();
            if ($damager instanceof Player) {
                return [VanillaItems::SLIMEBALL()];
            }
        }
        return [];
    }

    public function getXpDropAmount(): int
    {
        return mt_rand(0, 2);
    }
}
