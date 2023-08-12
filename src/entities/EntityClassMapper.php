<?php

declare(strict_types=1);

namespace MobsLite\entities;

use MobsLite\entities\hostile\Blaze;
use MobsLite\entities\hostile\Creeper;
use MobsLite\entities\hostile\Drowned;
use MobsLite\entities\hostile\ElderGuardian;
use MobsLite\entities\hostile\Endermite;
use MobsLite\entities\hostile\Ghast;
use MobsLite\entities\hostile\Guardian;
use MobsLite\entities\hostile\Hoglin;
use MobsLite\entities\hostile\Husk;
use MobsLite\entities\hostile\MagmaCube;
use MobsLite\entities\hostile\Phantom;
use MobsLite\entities\hostile\PiglinBrute;
use MobsLite\entities\hostile\Pillager;
use MobsLite\entities\hostile\Ravager;
use MobsLite\entities\hostile\Silverfish;
use MobsLite\entities\hostile\Skeleton;
use MobsLite\entities\hostile\Slime;
use MobsLite\entities\hostile\Stray;
use MobsLite\entities\hostile\Vex;
use MobsLite\entities\hostile\Vindicator;
use MobsLite\entities\hostile\Warden;
use MobsLite\entities\hostile\Witch;
use MobsLite\entities\hostile\WitherSkeleton;
use MobsLite\entities\hostile\Zoglin;
use MobsLite\entities\hostile\Zombie;
use MobsLite\entities\hostile\ZombieVillager;
use MobsLite\entities\neutral\Bee;
use MobsLite\entities\neutral\CaveSpider;
use MobsLite\entities\neutral\Dolphin;
use MobsLite\entities\neutral\Enderman;
use MobsLite\entities\neutral\Goat;
use MobsLite\entities\neutral\IronGolem;
use MobsLite\entities\neutral\Llama;
use MobsLite\entities\neutral\Panda;
use MobsLite\entities\neutral\Piglin;
use MobsLite\entities\neutral\PolarBear;
use MobsLite\entities\neutral\Spider;
use MobsLite\entities\neutral\TraderLlama;
use MobsLite\entities\neutral\Wolf;
use MobsLite\entities\passive\Allay;
use MobsLite\entities\passive\Axolotl;
use MobsLite\entities\passive\Bat;
use MobsLite\entities\passive\Camel;
use MobsLite\entities\passive\Cat;
use MobsLite\entities\passive\Chicken;
use MobsLite\entities\passive\Cod;
use MobsLite\entities\passive\Cow;
use MobsLite\entities\passive\Donkey;
use MobsLite\entities\passive\Fox;
use MobsLite\entities\passive\Frog;
use MobsLite\entities\passive\GlowSquid;
use MobsLite\entities\passive\Horse;
use MobsLite\entities\passive\Mooshroom;
use MobsLite\entities\passive\Mule;
use MobsLite\entities\passive\Ocelot;
use MobsLite\entities\passive\Parrot;
use MobsLite\entities\passive\Pig;
use MobsLite\entities\passive\PufferFish;
use MobsLite\entities\passive\Rabbit;
use MobsLite\entities\passive\Salmon;
use MobsLite\entities\passive\Sheep;
use MobsLite\entities\passive\SkeletonHorse;
use MobsLite\entities\passive\Sniffer;
use MobsLite\entities\passive\SnowGolem;
use MobsLite\entities\passive\Squid;
use MobsLite\entities\passive\Strider;
use MobsLite\entities\passive\Tadpole;
use MobsLite\entities\passive\TropicalFish;
use MobsLite\entities\passive\Turtle;
use MobsLite\entities\passive\Villager;
use MobsLite\entities\passive\WanderingTrader;
use pocketmine\entity\EntityDataHelper;
use pocketmine\entity\EntityFactory;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\world\World;

class EntityClassMapper
{
    public function registerEntities(): void
    {
        $entityFactory = EntityFactory::getInstance();
        foreach (self::getClasses() as $entityName => $typeClass) {
            $entityFactory->register($typeClass, function (World $world, CompoundTag $nbt) use ($typeClass): AbstractMob {
                return new $typeClass(EntityDataHelper::parseLocation($nbt, $world), $nbt);
            }, [$entityName]);
        }
    }

    public function getClasses(): array
    {
        return [
            "Allay" => Allay::class,
            "Axolotl" => Axolotl::class,
            "Bat" => Bat::class,
            "Bee" => Bee::class,
            "Blaze" => Blaze::class,
            "Camel" => Camel::class,
            "Cat" => Cat::class,
            "CaveSpider" => CaveSpider::class,
            "Chicken" => Chicken::class,
            "Cod" => Cod::class,
            "Cow" => Cow::class,
            "Creeper" => Creeper::class,
            "Dolphin" => Dolphin::class,
            "Donkey" => Donkey::class,
            "Drowned" => Drowned::class,
            "ElderGuardian" => ElderGuardian::class,
            "Enderman" => Enderman::class,
            "Endermite" => Endermite::class,
            "Fox" => Fox::class,
            "Frog" => Frog::class,
            "GlowSquid" => GlowSquid::class,
            "Goat" => Goat::class,
            "Ghast" => Ghast::class,
            "Guardian" => Guardian::class,
            "Horse" => Horse::class,
            "Husk" => Husk::class,
            "Hoglin" => Hoglin::class,
            "IronGolem" => IronGolem::class,
            "Llama" => Llama::class,
            "MagmaCube" => MagmaCube::class,
            "Mooshroom" => Mooshroom::class,
            "Mule" => Mule::class,
            "Ocelot" => Ocelot::class,
            "Panda" => Panda::class,
            "Parrot" => Parrot::class,
            "Phantom" => Phantom::class,
            "Pig" => Pig::class,
            "Pillager" => Pillager::class,
            "Piglin" => Piglin::class,
            "PiglinBrute" => PiglinBrute::class,
            "PolarBear" => PolarBear::class,
            "PufferFish" => PufferFish::class,
            "Rabbit" => Rabbit::class,
            "Ravager" => Ravager::class,
            "Salmon" => Salmon::class,
            "Sheep" => Sheep::class,
            "Silverfish" => Silverfish::class,
            "Skeleton" => Skeleton::class,
            "SkeletonHorse" => SkeletonHorse::class,
            "Slime" => Slime::class,
            "Sniffer" => Sniffer::class,
            "SnowGolem" => SnowGolem::class,
            "Spider" => Spider::class,
            "Squid" => Squid::class,
            "Strider" => Strider::class,
            "Stray" => Stray::class,
            "Tadpole" => Tadpole::class,
            "TraderLlama" => TraderLlama::class,
            "TropicalFish" => TropicalFish::class,
            "Turtle" => Turtle::class,
            "Villager" => Villager::class,
            "Vindicator" => Vindicator::class,
            "Vex" => Vex::class,
            "WanderingWitch" => WanderingTrader::class,
            "Warden" => Warden::class,
            "Witch" => Witch::class,
            "Wolf" => Wolf::class,
            "WitherSkeleton" => WitherSkeleton::class,
            "Zombie" => Zombie::class,
            "ZombieVillager" => ZombieVillager::class,
            "Zoglin" => Zoglin::class
        ];
    }
}
