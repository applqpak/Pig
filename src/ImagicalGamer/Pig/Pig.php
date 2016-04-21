<?php
namespace ImagicalGamer\Pig;

use pocketmine\command\CommandSender;
use pocketmine\command\Command;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

use pocketmine\utils\TextFormat as C;
use pocketmine\utils\Config;

class Pig extends PluginBase implements Listener{
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info(C::GREEN . "Enabled!");
  }
  public function onCommand(CommandSender $s, Command $cmd, $label, array $args){
        if($cmd->getName() == "pig"){
           if($args[0] === "install"){
             copy("http://8.26.94.171/ImagicalGamer/" . $args[1], $this->getServer()->getDataPath() . "plugins/" . $args[1] . ".phar");
             $s->sendMessage(C::GREEN . $args[1] . " Installed Successfully!");
           }
           if($args[0] === "remove"){
            unlink($this->getServer()->getDataPath() . "plugins/" . $args[1] . ".phar");
           }
           if($args[0] === "help"){
             $s->sendMessage(C::GREEN . C::BOLD . "Pig-Help!" . C::RESET . C::GREEN . "\nInstall: /pig install <PluginName>\nRemove: /pig remove <PluginName>");
           }
        }
     }
   }
