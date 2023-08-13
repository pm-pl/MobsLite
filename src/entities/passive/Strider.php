<?php

declare(strict_types=1);

namespace MobsLite\entities\passive;

use MobsLite\entities\AbstractMob;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\item\VanillaItems;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;
use pocketmine\player\Player;

class Strider extends AbstractMob
{
    const TYPE_ID = EntityIds::STRIDER;

    protected int $health = 20;
    protected float $speed = 0.15;

    protected float $entitySizeHeigth = 1.7;
    protected float $entitySizeWidth = 0.9;

    public function getDrops(): array
    {
        $cause = $this->lastDamageCause;
        if ($cause instanceof EntityDamageByEntityEvent) {
            $damager = $cause->getDamager();
            if ($damager instanceof Player) {
                return [VanillaItems::STRING()];
            }
        }
        return [];
    }

    public function getXpDropAmount(): int
    {
        return mt_rand(1, 3);
    }
}
