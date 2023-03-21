<?php namespace Depcore\Coupons;

use Backend;
use System\Classes\PluginBase;

/**
 * Plugin Information File
 *
 * @link https://docs.octobercms.com/3.x/extend/system/plugins.html
 */
class Plugin extends PluginBase
{
    /**
     * pluginDetails about this plugin.
     */
    public function pluginDetails()
    {
        return [
            'name' => 'Coupons',
            'description' => 'No description provided yet...',
            'author' => 'Depcore',
            'icon' => 'icon-leaf'
        ];
    }

    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
        //
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
        //
    }


    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions()
    {
        return [
            'depcore.coupons.change_used_status' => [
                'tab' => 'Coupons',
                'label' => 'Some permission'
            ],
        ];
    }
    
    public function registerNavigation()
    {

        return [
            'coupons' => [
                'label' => 'Coupons',
                'url' => Backend::url('depcore/coupons/coupons'),
                'icon' => 'icon-leaf',
                'permissions' => ['depcore.coupons.*'],
                'order' => 500,
            ],
        ];
    }
}
