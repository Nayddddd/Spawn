<?php

namespace Nayd\Spawn;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase {
    public function onEnable(): void {
        $this->saveDefaultConfig();
        $commandMap = $this->getServer()->getCommandMap();
        $commandMap->register("", new Spawn($this));
    }
}
