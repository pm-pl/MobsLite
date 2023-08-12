<?php

declare(strict_types=1);

namespace MobsLite\entities\passive;

use MobsLite\entities\AbstractMob;
use pocketmine\block\VanillaBlocks;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;
use pocketmine\player\Player;

class Turtle extends AbstractMob
{
    const TYPE_ID = EntityIds::TURTLE;

    const HEALTH = 30;
    const MOVEMENT_SPEED = 0.12;

    const ENTITY_SIZE_HEIGHT = 0.4;
    const ENTITY_SIZE_WIDTH = 1.2;

    public function getDrops(): array
    {
        $cause = $this->lastDamageCause;
        if ($cause instanceof EntityDamageByEntityEvent) {
            $damager = $cause->getDamager();
            if ($damager instanceof Player) {
                return [VanillaBlocks::SEA_PICKLE()->asItem()];
            }
        }
        return [];
    }

    public function getXpDropAmount(): int
    {
        return mt_rand(0, 2);
    }
}
