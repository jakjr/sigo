<?php namespace Sigo\Support;

use App;

class Shortcut
{

    public static function render()
    {
        $shortcuts = require __DIR__.'/../../shortcut.php';

        if ( (! is_array($shortcuts)) || (! count($shortcuts)) ) {
            return false;
        }

        $return = '';
        foreach ($shortcuts as $shortcut) {
            $url = key($shortcut);
            $icon = current($shortcut);
            $return .= "<li class='dropdown'><a href='{$url}'><i class='{$icon} x-bigger text-nav-icon'></i></a></li>";
        }

        return $return;
    }
} 