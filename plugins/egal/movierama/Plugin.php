<?php

namespace Egal\Movierama;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    /**
    * Returns information about the plugin
    */
    public function pluginDetails()
    {
        return [
            'name' => 'Movierama Plugin',
            'description' => 'Social sharing platform for sharing and voting movies',
            'author' => 'Egal user',
            'icon' => 'icon-leaf'
        ];
    }

    /**
    * Registers any front-end components used by this plugin
    */
    public function registerComponents()
    {
        return [
            '\Egal\Movierama\Components\Movies' => 'movies'
        ];
    }
    
}




