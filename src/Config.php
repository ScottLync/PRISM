<?php

namespace App;

class Config
{
    public function __construct()
    {
        // To be implemented
    }

    public function getDefaults(): array
    {
        return [
            'prefix' => '!',
            'debugMode' => 15, // PRISM_DEBUG_ALL
            'logMode' => 7,
            'logFileMode' => 3,
            'relayIP' => 'isrelay.lfs.net',
            'relayPort' => 47474,
            'relayPPS' => 2,
            'dateFormat' => 'M jS Y',
            'timeFormat' => 'H:i:s',
            'logFormat' => 'm-d-y@H:i:s',
            'logNameFormat' => 'Ymd',
            'secToken' => 'X-0ZbIY)TN>.@sr}',
        ];
    }
}
