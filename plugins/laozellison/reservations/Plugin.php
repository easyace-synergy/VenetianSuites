<?php namespace Laozellison\Reservations;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
                'Laozellison\Reservations\Components\Reservations' => 'reservationform'
        ];
    }

    public function registerSettings()
    {
    }
}
