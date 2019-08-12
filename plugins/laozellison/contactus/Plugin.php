<?php namespace Laozellison\Contactus;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Laozellison\Contactus\Components\Contactus' => 'contact'
        ];
    }

    public function registerSettings()
    {
    }
}
