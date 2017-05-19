<?php namespace AlexLit\YandexShare;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'Yandex Share',
            'description' => 'Yandex social share buttons',
            'author'      => 'Alexey Litovchenko',
            'icon'        => 'icon-yahoo',
            'homepage'    => 'https://web2easy.ru'
        ];
    }

    public function registerComponents()
    {
        return [
           '\AlexLit\YandexShare\Components\Buttons' => 'yandexShare'
        ];
    }
}