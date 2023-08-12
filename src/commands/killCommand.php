<?php

declare(strict_types=1);

namespace MobsLite\commands;

use MobsLite\manager\MobUtility;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;

class killCommand extends Command
{
    private MobUtility $tools;

    public function __construct()
    {
        parent::__construct("mkill", "§bMobsLite §8» §7Kill all Entities");
        $this->setPermission("mobslite.kill");

        $this->tools = new MobUtility();
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args): void
    {
        if ($sender instanceof Player) {
            $this->tools->killMobs($sender);
        }
    }
}