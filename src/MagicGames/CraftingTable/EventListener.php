<?php

namespace crafting_table;



use pocketmine\event\player\PlayerInteractEvent;

use pocketmine\event\Listener;

use pocketmine\Item;

use pocketmine\block\crafting_table;

use A\Main;

Class EventListener implements Listener{



    private $plugin;



    public function __construct(Main $plugin){

        $this->plugin = $plugin;

    }



    public function onInteract(PlayerInteractEvent $ev){

        if($ev->getAction() !== PlayerInteractEvent::RIGHT_CLICK_BLOCK) return;

        if($ev->getBlock() instanceof crafting_table){

            $ev->setCancelled();

            $this->plugin->openForm($ev->getPlayer());

        }

    }

}
