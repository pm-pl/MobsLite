<?php

declare(strict_types=1);

namespace MobsLite\entities\hostile;

use MobsLite\entities\AbstractMob;
use pocketmine\block\VanillaBlocks;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\item\VanillaItems;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;
use pocketmine\player\Player;

class Pillager extends AbstractMob
{
    const TYPE_ID = EntityIds::PILLAGER;

    const HEALTH = 24;
    const MOVEMENT_SPEED = 0.5;

    const ENTITY_SIZE_HEIGHT = 1.95;
    const ENTITY_SIZE_WIDTH = 0.6;

    public function getDrops(): array
    {
        $cause = $this->lastDamageCause;
        if ($cause instanceof EntityDamageByEntityEvent) {
            $damager = $cause->getDamager();
            if ($damager instanceof Player) {
                return [VanillaBlocks::BANNER()->asItem(), VanillaItems::EMERALD()];
            }
        }
        return [];
    }

    public function getXpDropAmount(): int
    {
        return 5;
    }
}
