<?php

declare(strict_types=1);

namespace MobsLite\entities\hostile;

use MobsLite\entities\AbstractMob;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\item\PotionType;
use pocketmine\item\VanillaItems;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;
use pocketmine\player\Player;

class Witch extends AbstractMob
{
    const TYPE_ID = EntityIds::WITCH;

    const HEALTH = 26;
    const MOVEMENT_SPEED = 0.25;

    const ENTITY_SIZE_HEIGHT = 1.95;
    const ENTITY_SIZE_WIDTH = 0.6;

    public function getDrops(): array
    {
        $cause = $this->lastDamageCause;
        if ($cause instanceof EntityDamageByEntityEvent) {
            $damager = $cause->getDamager();
            if ($damager instanceof Player) {
                return [VanillaItems::SPLASH_POTION()->setType(PotionType::LONG_POISON())];
            }
        }
        return [];
    }

    public function getXpDropAmount(): int
    {
        return 5;
    }
}
