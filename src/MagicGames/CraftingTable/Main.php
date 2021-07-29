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
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;

use libs\muqsit\invmenu\InvMenu;
use libs\muqsit\invmenu\InvMenuHandler;
use muqsit\invmenu\transaction\InvMenuTransaction;
use muqsit\invmenu\transaction\InvMenuTransactionResult;

class Main extends PluginBase implements Listener{
  public function onEnable(){
     if (!InvMenuHandler::isRegistered()) {
       InvMenuHandler::register($this);
     }
     $this->getServer()->getPluginManager()->registerEvents($this, $this);
     $this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
     $this->getLogger()->info("§aPlugin Made For MagicGames");
    //NOOP
  }
}
  public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args): bool {
    switch($cmd->getName()){
			case "table":
			}
	  return true;
  }
  public function table($player) {
    $menu = InvMenu::create(InvMenu::TYPE_HOPPER);
    $menu->readonly();
    $menu->setName("CRAFTING TABLE");
    $inv = $menu->getInventory();
    $inv->setItem(0, Item::get(160, 15, 1)->setCustomName("§r"));
    $inv->setItem(1, Item::get(58, 15, 1)->setCustomName("§r§l§eCRAFTING TABLE\n\n§r§7(Right-Click)"));
    $inv->setItem(2, Item::get(160, 15, 1)->setCustomName("§r"));
    $inv->setItem(3, Item::get(340, 15, 1)->setCustomName("§r§l§eCUSTOM RECIPE\n\n§r§7(Right-Click)"));
    $inv->setItem(4, Item::get(160, 15, 1)->setCustomName("§r"));
  }
  public function menu1(Player $sender, Item $item)

	{

	      $hand = $sender->getInventory()->getItemInHand()->getCustomName();
        $inventory = $this->mainmenu->getInventory();
        $config = new Config($this->getDataFolder()."config.yml", Config::YAML);
	}
	if($item->getCustomName() === "§r§l§eCUSTOM RECIPE\n\n§r§7(Right-Click)"){
        $sender->removeWindow($inventory);
                    $this->getServer()->dispatchCommand($sender, $config->get("recipe"));
                    $sender->getLevel()->broadcastLevelSoundEvent($sender->add(0, $sender->eyeHeight, 0), LevelSoundEventPacket::SOUND_CHEST_OPEN);