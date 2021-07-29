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

class Main extends PluginBase {

  public function onEnable(){
    //NOOP
  }
}
