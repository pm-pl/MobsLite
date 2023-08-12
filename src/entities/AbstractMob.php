<?php

declare(strict_types=1);

namespace MobsLite\entities;

use MobsLite\manager\MobBehaviour;
use pocketmine\entity\EntitySizeInfo;
use pocketmine\entity\Living;
use pocketmine\entity\Location;
use pocketmine\math\Vector3;
use pocketmine\nbt\tag\CompoundTag;

abstract class AbstractMob extends Living
{
    const TYPE_ID = "";

    const HEALTH = 10;
    const SPEED = 1.00;
    const CAN_CLIMB = false;
    const GRAVITY = true;

    const ENTITY_SIZE_HEIGHT = 2.5;
    const ENTITY_SIZE_WIDTH = 1.0;

    public int $attackDelay;
    public Vector3 $defaultLook;
    public Vector3 $destination;
    public int $timer;

    private MobBehaviour $mobBehaviour;

    public function __construct(Location $location, ?CompoundTag $nbt = null)
    {
        $this->mobBehaviour = new MobBehaviour();
        parent::__construct($location, $nbt);
    }

    public function initEntity(CompoundTag $nbt): void
    {
        $this->setHealth(self::HEALTH);
        $this->setMaxHealth(self::HEALTH);
        $this->setMovementSpeed(self::SPEED);
        $this->setCanClimb(self::CAN_CLIMB);
        $this->setHasGravity(self::GRAVITY);

        $this->setNoClientPredictions(false);
        $this->setCanSaveWithChunk(false);

        $this->attackDelay = 0;
        $this->defaultLook = new Vector3(0, 0, 0);
        $this->destination = new Vector3(0, 0, 0);
        $this->timer = -1;

        parent::initEntity($nbt);
    }

    public function getName(): string
    {
        $data = explode("\\", get_class($this));
        return end($data);
    }

    public static function getNetworkTypeId(): string
    {
        return static::TYPE_ID;
    }

    protected function getInitialSizeInfo(): EntitySizeInfo
    {
        return new EntitySizeInfo(self::ENTITY_SIZE_HEIGHT, self::ENTITY_SIZE_WIDTH);
    }

    public function knockBack(float $x, float $z, float $force = 0.4, ?float $verticalLimit = 0.4): void
    {
        if ($this->_isHostile()) {
            $this->timer = 20;
            $this->setMovementSpeed(1.00);
        } else {
            $this->timer = 0;
            $this->setMovementSpeed(2.00);
        }
        parent::knockBack($x, $z, 0.2);
    }

    public function calculateFallDamage(float $fallDistance): float
    {
        return 0;
    }

    public function entityBaseTick(int $tickDiff = 1): bool
    {
        $this->mobBehaviour->tick($this);
        return parent::entityBaseTick($tickDiff);
    }

    public function isSwimming(): bool
    {
        $swim = $this->_isSwimming();
        $ticks = $this->getAirSupplyTicks();
        $maxAirTicks = $this->getMaxAirSupplyTicks();
        if ($swim and !$this->isBreathing() and $ticks < ($maxAirTicks / 2)) {
            $this->setAirSupplyTicks($maxAirTicks);
        }
        return $swim;
    }

    /**
     * CUSTOM
     */
    public function _isFlying(): bool
    {
        $mobs = [
            "Allay", "Bat", "Parrot", "Bee", "Ghast", "Phantom"
        ];
        return in_array($this->getName(), $mobs);
    }

    public function _isSwimming(): bool
    {
        $mobs = [
            "Axolotl", "Frog", "GlowSquid", "Pufferfish", "Salmon", "Squid", "Tadpole", "TropicalFish", "Turtle"
        ];
        return in_array($this->getName(), $mobs);
    }

    public function _isHostile(): bool
    {
        $mobs = [
            "Blaze", "Creeper", "Drowned", "ElderGuardian", "Endermite", "Ghast", "Guardian", "Hoglin", "Husk", "MagmaCube", "Phantom", "PiglinBrute", "Pillager", "Ravager", "Silverfish", "Skeleton", "Slime", "Stray", "Vex", "Vindicator", "Warden", "Witch", "WitherSkeleton", "Zoglin", "Zombie", "ZombieVillager"
        ];
        return in_array($this->getName(), $mobs);
    }

    public function _catchesFire(): bool
    {
        $mobs = [
            "SkeletonHorse"
        ];
        return in_array($this->getName(), $mobs);
    }

    public function _isJumping(): bool
    {
        $mobs = [
            "Rabbit"
        ];
        return in_array($this->getName(), $mobs);
    }

    public function _isNether(): bool
    {
        $mobs = [
            "Strider"
        ];
        return in_array($this->getName(), $mobs);
    }

    public function _isSnow(): bool
    {
        $mobs = [
            "WanderingTrader"
        ];
        return in_array($this->getName(), $mobs);
    }

    /**
     * CUSTOM
     */

    public function setDefaultLook(Vector3 $defaultLook): void
    {
        $this->defaultLook = $defaultLook;
    }

    public function getDefaultLook(): Vector3
    {
        return $this->defaultLook;
    }

    public function setDestination(Vector3 $destination): void
    {
        $this->destination = $destination;
    }

    public function getDestination(): Vector3
    {
        return $this->destination;
    }

    public function setTimer(int $timer): void
    {
        $this->timer = $timer;
    }

    public function getTimer(): int
    {
        return $this->timer;
    }

    public function setAttackDelay(int $attackDelay): void
    {
        $this->attackDelay = $attackDelay;
    }

    public function getAttackDelay(): int
    {
        return $this->attackDelay;
    }
}