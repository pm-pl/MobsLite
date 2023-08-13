<?php

declare(strict_types=1);

namespace MobsLite;

use MobsLite\commands\killCommand;
use MobsLite\commands\listCommand;
use MobsLite\commands\summonCommand;
use MobsLite\entities\EntityClassMapper;
use pocketmine\plugin\PluginBase;

class MobsLite extends PluginBase
{
    public function onEnable(): void
    {
        $this->registerEntities();
        $this->registerTask();
        $this->registerCommands();
    }

    public function registerEntities(): void
    {
        $registration = new EntityClassMapper();
        $registration->registerEntities();
    }

    public function registerTask(): void
    {
        $task = new SpawnTask($this);
        $this->getScheduler()->scheduleRepeatingTask($task, 300);
    }

    public function registerCommands(): void
    {
        $commands = [
            "kill" => new killCommand($this),
            "summon" => new summonCommand($this),
            "list" => new listCommand($this)
        ];

        $commandMap = $this->getServer()->getCommandMap();
        foreach ($commands as $prefix => $class) {
            $commandMap->register($prefix, $class);
        }
    }
}
