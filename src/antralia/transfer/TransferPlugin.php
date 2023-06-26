<?php

/**
 *     _          _             _ _
 *    / \   _ __ | |_ _ __ __ _| (_) __ _
 *   / _ \ | '_ \| __| '__/ _` | | |/ _` |
 *  / ___ \| | | | |_| | | (_| | | | (_| |
 * /_/   \_\_| |_|\__|_|  \__,_|_|_|\__,_|
 *
 * @author Antralia (Lunarelly)
 * @link https://github.com/Antralia
 *
 */

declare(strict_types=1);

namespace antralia\transfer;

use pocketmine\event\EventPriority;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\plugin\PluginException;

use ReflectionException;

final class TransferPlugin extends PluginBase
{
    protected function onEnable(): void
    {
        try {
            $this->getServer()->getPluginManager()->registerEvent(PlayerJoinEvent::class, function (PlayerJoinEvent $event): void {
                $event->getPlayer()->transfer("antralia.net", 19132, "Transferring to Antralia Network");
            }, EventPriority::MONITOR, $this);
        } catch (ReflectionException $exception) {
            throw new PluginException($exception->getMessage());
        }
    }
}
