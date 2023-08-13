<?php

declare(strict_types=1);

namespace MobsLite\entities\hostile;

use MobsLite\entities\AbstractMob;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\item\VanillaItems;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;
use pocketmine\player\Player;

class Hoglin extends AbstractMob
{
    const TYPE_ID = EntityIds::HOGLIN;

    protected int $health = 40;
    protected float $speed = 0.3;

    protected float $entitySizeHeigth = 1.39;
    protected float $entitySizeWidth = 0.9;

    public function getDrops(): array
    {
        $cause = $this->lastDamageCause;
        if ($cause instanceof EntityDamageByEntityEvent) {
            $damager = $cause->getDamager();
            if ($damager instanceof Player) {
                return [VanillaItems::RAW_PORKCHOP()];
            }
        }
        return [];
    }

    public function getXpDropAmount(): int
    {
        return mt_rand(0, 2);
    }
}
