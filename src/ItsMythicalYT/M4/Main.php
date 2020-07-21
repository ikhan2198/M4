<?php

declare(strict_types=1);

namespace ItsMythicalYT/M4/Main;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class MainClass extends PluginBase{

	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
		switch($command->getName()){
			case "m4":
				$sender->sendMessage("M4 is a super cutie " . $sender->getName() . "!");

				return true;
			default:
				return false;
		}
	}
}
