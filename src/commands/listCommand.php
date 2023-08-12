<?php

declare(strict_types=1);

namespace MobsLite\commands;

use MobsLite\manager\MobUtility;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;

class listCommand extends Command
{
    private MobUtility $tools;

    public function __construct()
    {
        parent::__construct("mlist", "§bMobsLite §8» §7List all Mobs that can spawn");
        $this->setPermission("mobslite.list");

        $this->tools = new MobUtility();
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args): void
    {
        if ($sender instanceof Player) {
            $this->tools->listMobs($sender);
        }
    }
}