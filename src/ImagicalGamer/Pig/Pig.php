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
  public function getInfo(){
    $info = (C::GREEN . C::BOLD . "Info" . C::RESET . C::GREEN . "\n/pig install <name>\n/pig search <name>");
    return $info;
  }
  public function getFile(){
    $file = ($this->getServer()->getDataPath() . "plugins/");
    return $file;
  }
    public function onCommand(CommandSender $s, Command $cmd, $label, array $args){
        if($cmd->getName() == "pig"){
          if(empty($args)){
          $info = $this->plugin->getInfo();
          $s->sendMessage($info);
          }
           if($args[1] === "install"){
             $file = $this->plugin->getFile();
             copy("http://8.26.94.171/ImagicalGamer/" . $args[1] . ".phar", $file);
           }
}
}
}
