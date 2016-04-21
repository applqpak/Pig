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
}
