<?php

declare(strict_types=1);

namespace MobsLite\entities\passive;

use MobsLite\entities\AbstractMob;
use pocketmine\block\utils\DyeColor;
use pocketmine\block\VanillaBlocks;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\item\VanillaItems;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;
use pocketmine\player\Player;

class Sheep extends AbstractMob
{
    const TYPE_ID = EntityIds::SHEEP;

    const HEALTH = 8;
    const MOVEMENT_SPEED = 0.45;

    const ENTITY_SIZE_HEIGHT = 1.3;
    const ENTITY_SIZE_WIDTH = 0.9;

    public function getDrops(): array
    {
        $cause = $this->lastDamageCause;
        if ($cause instanceof EntityDamageByEntityEvent) {
            $damager = $cause->getDamager();
            if ($damager instanceof Player) {
                $colors = DyeColor::getAll();
                $randomColor = $colors[array_rand($colors)];
                return [VanillaBlocks::WOOL()->setColor($randomColor)->asItem(), VanillaItems::RAW_MUTTON()];
            }
        }
        return [];
    }

    public function getXpDropAmount(): int
    {
        return mt_rand(1, 2);
    }
}
