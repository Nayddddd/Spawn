<?php

namespace Nayd\Spawn;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\world\Position;
use pocketmine\plugin\PluginBase;

class Spawn extends Command {

    private PluginBase $plugin;

    public function __construct(PluginBase $plugin) {
        parent::__construct("spawn", "Se téléporter au spawn", "/spawn", ["hub"]);
        $this->setPermission("spawn.nayd");
        $this->plugin = $plugin;
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args): bool {
        if (!$sender instanceof Player) {
            return false;
        }

        $config = $this->plugin->getConfig()->get("spawn");
        $worldName = $config["world"];
        $x = $config["x"];
        $y = $config["y"];
        $z = $config["z"];
        $teleportMessage = $config["teleport_message"];

        $world = Server::getInstance()->getWorldManager()->getWorldByName($worldName);
        if ($world === null) {
            $sender->sendMessage("Le monde spécifié n'existe pas !");
            return false;
        }

        $position = new Position($x, $y, $z, $world);
        $sender->teleport($position);
        $sender->sendMessage($teleportMessage);

        return true;
    }
}
