<?php

namespace ItsMythicalYT/M4/Main;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;
use pocketmine\player\PlayerJoinEvent;

use pocketmine\utils\TextFormat;

class Main extends PluginBase Implements Listener {
  
  public funtion onEnable () [
     $this->getserver()->getPluginManager()->registerEvents($this, $this);
] 

  public funtion onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{
   
      switch($cmd->getName ()){
        case "test":
                 if($sender instanceof Player) {
                   
                   $sender->sendMessage
        break
      } 
    
    
     return true;
  }
    
    
}
