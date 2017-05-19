<?php namespace AlexLit\YandexShare\Components;

use Cms\Classes\ComponentBase;
use System\Classes\ApplicationException;

class Buttons extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Yandex Share',
            'description' => 'Yandex social share buttons'
        ];
    }

    public function defineProperties()
    {
        return [
            'counter' => [
                'title'   => 'Show counter',
                'default' => '0',
                'type'    => 'checkbox',
                'group'   => 'Options'
            ],
            'size' => [
                'title'   => 'Buttons size',
                'default' => '24px',
                'type'    => 'string',
                'group'   => 'Options'
            ],
            'border_radius' => [
                'title'   => 'Buttons border radius',
                'default' => '0%',
                'type'    => 'string',
                'group'   => 'Options'
            ],
            'pinterest_image' => [
                'title'       => 'Pinterest image',
                'default'     => '',
                'type'        => 'string',
                'placeholder' => 'https://site.com/image.jpg',
                'group'       => 'Options'
            ],
            'lang' => [
                'title'   => 'Language',
                'default' => '0',
                'type'    => 'dropdown',
                'options' => [
                    'hy' => 'Armenian',
                    'az' => 'Azerbaijani',
                    'be' => 'Belarusian',
                    'en' => 'English',
                    'ka' => 'Georgian',
                    'kk' => 'Kazakh',
                    'ro' => 'Romanian',
                    'ru' => 'Russian',
                    'tt' => 'Tatar',
                    'tr' => 'Turkish',
                    'uk' => 'Ukrainian',
                ],
                'default' => 'en',
                'group'   => 'Options'
            ],
            'collections' => [
                'title'   => 'Yandex Collections',
                'default' => '0',
                'type'    => 'checkbox',
                'group'   => 'Services'
            ],
            'vkontakte' => [
                'title'   => 'Vk',
                'default' => '0',
                'type'    => 'checkbox',
                'group'   => 'Services'
            ],
            'facebook' => [
                'title'   => 'Facebook',
                'default' => '1',
                'type'    => 'checkbox',
                'group'   => 'Services'
            ],
            'odnoklassniki' => [
                'title'   => 'Ok',
                'default' => '0',
                'type'    => 'checkbox',
                'group'   => 'Services'
            ],
            'moimir' => [
                'title'   => 'MoiMir',
                'default' => '0',
                'type'    => 'checkbox',
                'group'   => 'Services'
            ],
            'gplus' => [
                'title'   => 'Google+',
                'default' => '1',
                'type'    => 'checkbox',
                'group'   => 'Services'
            ],
            'pinterest' => [
                'title'   => 'Pinterest',
                'default' => '0',
                'type'    => 'checkbox',
                'group'   => 'Services'
            ],
            'twitter' => [
                'title'   => 'Twitter',
                'default' => '1',
                'type'    => 'checkbox',
                'group'   => 'Services'
            ],
            'blogger' => [
                'title'   => 'Blogger',
                'default' => '0',
                'type'    => 'checkbox',
                'group'   => 'Services'
            ],
            'delicious' => [
                'title'   => 'Delicious',
                'default' => '0',
                'type'    => 'checkbox',
                'group'   => 'Services'
            ],
            'digg' => [
                'title'   => 'Digg',
                'default' => '0',
                'type'    => 'checkbox',
                'group'   => 'Services'
            ],
            'reddit' => [
                'title'   => 'Reddit',
                'default' => '0',
                'type'    => 'checkbox',
                'group'   => 'Services'
            ],
            'evernote' => [
                'title'   => 'Evernote',
                'default' => '0',
                'type'    => 'checkbox',
                'group'   => 'Services'
            ],
            'linkedin' => [
                'title'   => 'LinkedIn',
                'default' => '0',
                'type'    => 'checkbox',
                'group'   => 'Services'
            ],
            'lj' => [
                'title'   => 'Livejournal',
                'default' => '0',
                'type'    => 'checkbox',
                'group'   => 'Services'
            ],
            'pocket' => [
                'title'   => 'Pocket',
                'default' => '0',
                'type'    => 'checkbox',
                'group'   => 'Services'
            ],
            'qzone' => [
                'title'   => 'Qzone',
                'default' => '0',
                'type'    => 'checkbox',
                'group'   => 'Services'
            ],
            'renren' => [
                'title'   => 'Renren',
                'default' => '0',
                'type'    => 'checkbox',
                'group'   => 'Services'
            ],
            'sinaWeibo' => [
                'title'   => 'Sina Weibo',
                'default' => '0',
                'type'    => 'checkbox',
                'group'   => 'Services'
            ],
            'surfingbird' => [
                'title'   => 'Surfingbird',
                'default' => '0',
                'type'    => 'checkbox',
                'group'   => 'Services'
            ],
            'tencentWeibo' => [
                'title'   => 'Tencent Weibo',
                'default' => '0',
                'type'    => 'checkbox',
                'group'   => 'Services'
            ],
            'tumblr' => [
                'title'   => 'Tumblr',
                'default' => '0',
                'type'    => 'checkbox',
                'group'   => 'Services'
            ],
            'viber' => [
                'title'   => 'Viber',
                'default' => '0',
                'type'    => 'checkbox',
                'group'   => 'Services'
            ],
            'whatsapp' => [
                'title'   => 'WhatsApp',
                'default' => '0',
                'type'    => 'checkbox',
                'group'   => 'Services'
            ],
            'skype' => [
                'title'   => 'Skype',
                'default' => '0',
                'type'    => 'checkbox',
                'group'   => 'Services'
            ],
            'telegram' => [
                'title'   => 'Telegram',
                'default' => '0',
                'type'    => 'checkbox',
                'group'   => 'Services'
            ]
        ];
    }

    public function onRun()
    {
        $this->addJS('//yastatic.net/share2/share.js');
    }

}

?>