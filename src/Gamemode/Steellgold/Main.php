<?php

namespace Gamemode\Steellgold;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;

class Main extends PluginBase implements Listener{

    public function onEnable(){
        $this->getLogger()->info("Gamemode Enable");
    }

    public function onCommand(CommandSender $player, Command $command, String $label, array $args) : bool {
       switch($command->getName()){


        case 'gm0':
            $player->addTitle("§6Gamemode", "§fSurvial.");
            $player->setGamemode(0);
            $player->setHealth(20);
            $player->setFood(20);
            return true;
        break; // gamemode 0


        case 'gm1':
            $player->addTitle("§6Gamemode", "§fCreative");
            $player->setGamemode(1);
            return true;
        break; // gamemode 1


        case 'gm2':
            $player->addTitle("§6Gamemode", "§fAdventure");
            $player->setGamemode(2);
            $player->setHealth(1);
            $player->setFood(1);
            return true;
        break; // gamemode 2


        case 'gm3':
            $player->addTitle("§6Gamemode", "§fSpectator");
            $player->setGamemode(3);
            return true;
        break; // gamemode 3

        

        }
        return true;
    }


    public function onDisable(){
        $this->getLogger()->info("§cEklenti kapatıldı :)");
    }


}
