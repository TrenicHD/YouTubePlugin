<?php
/*##################################################
Plugin by TrenicHD
YT ; https://www.youtube.com/channel/UCkH1MkgKy72wGbX8x4mt2yA
GitHub; https://github.com/TrenicHD
Discord; [Dev] TrenicHD#4300
##################################################*/
namespace TrenicHD;




use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\command\defaults\SetWorldSpawnCommand;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;
use bansystem\command\BanCommand;
use bansystem\command\BanIPCommand;
use bansystem\command\BanListCommand;
use bansystem\command\BlockCommand;
use bansystem\command\BlockIPCommand;
use bansystem\command\BlockListCommand;
use bansystem\command\KickCommand;
use bansystem\command\MuteCommand;
use bansystem\command\MuteIPCommand;
use bansystem\command\MuteListCommand;
use bansystem\command\PardonCommand;
use bansystem\command\PardonIPCommand;
use bansystem\command\TempBanCommand;
use bansystem\command\TempBanIPCommand;
use bansystem\command\TempBlockCommand;
use bansystem\command\TempBlockIPCommand;
use bansystem\command\TempMuteCommand;
use bansystem\command\TempMuteIPCommand;
use bansystem\command\UnbanCommand;
use bansystem\command\UnbanIPCommand;
use bansystem\command\UnblockCommand;
use bansystem\command\UnblockIPCommand;
use bansystem\command\UnmuteCommand;
use bansystem\command\UnmuteIPCommand;
use bansystem\listener\PlayerChatListener;
use bansystem\listener\PlayerCommandPreproccessListener;
use bansystem\listener\PlayerPreLoginListener;
use pocketmine\event\Listener;
use pocketmine\permission\Permission;
use pocketmine\plugin\Plugin;
use function pocketmine\server;
use SheepFix\CooldownTask;

class Main extends PluginBase
{

    public function onEnable()
    {
        $this->getLogger()->info(TextFormat::GREEN . "YTPlugin Aktiv! by TrenicHD");
    }

    public function onDisable()
    {
        $this->getLogger()->info(TextFormat::RED . "Plugin Deaktiviert!");
    }

    public function onCommand(CommandSender $player, Command $cmd, string $label, array $args): bool{
        switch ($cmd->getName()) {
            case "yt":
                if ($player instanceof Player) {
                    if ($player->hasPermission("YT.use")) {
                        $player->sendMessage(TextFormat::GRAY . "=======================");
                        $player->sendMessage(TextFormat::LIGHT_PURPLE . "YT = 100 Abos");
                        $player->sendMessage(TextFormat::GRAY . "=======================");

                    }
                }
                break;
        }
        return true;
    }

}