<?php

namespace MagicGames\CraftingTable;

use pocketmine\plugin\PluginBase;

use pocketmine\event\Listener;

use pocketmine\utils\TextFormat;

use pocketmine\network\mcpe\protocol\LevelSoundEventPacket;
use pocketmine\network\mcpe\protocol\LevelSoundEventPacketV2;
use pocketmine\level\sound\AnvilUseSound;
use pocketmine\level\sound\PopSound;

use pocketmine\item\Item;
use pocketmine\item\Tool;
use pocketmine\item\Armor;

use pocketmine\Server;
use pocketmine\Player;

use libs\muqsit\invmenu\InvMenu;
use libs\muqsit\invmenu\InvMenuHandler;
use muqsit\invmenu\transaction\InvMenuTransaction;
use muqsit\invmenu\transaction\InvMenuTransactionResult;

class Main extends PluginBase {
  public function onEnable(){
     if (!InvMenuHandler::isRegistered()) {
       InvMenuHandler::register($this);
     }
    //NOOP
  }
  public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args): bool {
 
    if($cmd->getName() === "craftingtable"){
			if($sender instanceof Player){
				$this->recipes($sender);
      } else {
        $sender->sendMessage("Please use this command ingame");
			}
		}
	  return true;
  }
}