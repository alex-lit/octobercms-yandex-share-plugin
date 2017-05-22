<?php namespace AlexLit\YandexShare\Components;

use Cms\Classes\ComponentBase;
use System\Classes\ApplicationException;

class Buttons extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Yandex Share',
            'description' => 'Social share buttons'
        ];
    }

    public function defineProperties()
    {
        return [
            'access_token' => [
                'title'       => 'Access token',
                'default'     => '',
                'type'        => 'string',
                'description' => 'A token for removing the restriction of requests to receive a counter. Actual and works only for Facebook',
                'group'       => 'Options'
            ],
            'bare' => [
                'title'       => 'Disable styles',
                'default'     => '0',
                'type'        => 'checkbox',
                'description' => 'A sign that loading styles is disabled. If you add an attribute, social networks will be displayed as a text vertical list',
                'group'       => 'Options'
            ],
            'counter' => [
                'title'       => 'Show counter',
                'default'     => '0',
                'type'        => 'checkbox',
                'description' => 'A sign that the publications counter is displayed on the button social network',
                'group'       => 'Options'
            ],
            'copy' => [
                'title'   => 'Copy button position',
                'type'    => 'dropdown',
                'options' => [
                    'first'  => 'First',
                    'last'   => 'Last',
                    'hidden' => 'Hidden'
                ],
                'default'     => 'last',
                'description' => '"Copy" button position. The "Copy link" button can be displayed if you use the limit parameter',
                'group'       => 'Options'
            ],
            'description' => [
                'title'       => 'Description text',
                'default'     => '',
                'type'        => 'text',
                'description' => 'Text to share',
                'group'   => 'Options'
            ],
            'direction' => [
                'title'   => 'Direction',
                'type'    => 'dropdown',
                'options' => [
                    'horizontal' => 'Horizontal',
                    'vertical'   => 'Vertical'
                ],
                'default'     => 'horizontal',
                'description' => 'Direction of the list of buttons',
                'group'       => 'Options'
            ],
            'hashtags' => [
                'title'       => 'Hashtags',
                'default'     => '',
                'type'        => 'text',
                'description' => 'Relevant and work only for Twitter. The string is indicated without the # sign. Several hashtags are specified comma-delimited, without a space',
                'group'   => 'Options'
            ],
            'image' => [
                'title'       => 'Image',
                'default'     => '',
                'type'        => 'string',
                'placeholder' => 'https://site.com/image.jpg',
                'description' => 'Image to share',
                'group'       => 'Options'
            ],
            'popup_direction' => [
                'title'   => 'Popup direction',
                'type'    => 'dropdown',
                'options' => [
                    'bottom' => 'Bottom',
                    'top' => 'Top'
                ],
                'default' => 'bottom',
                'description' => 'Opening direction of the pop-up',
                'group'   => 'Options'
            ],
            'popup_position' => [
                'title'   => 'Popup position',
                'type'    => 'dropdown',
                'options' => [
                    'inner' => 'Inner',
                    'outer' => 'Outer'
                ],
                'default'     => 'inner',
                'description' => 'The location of the pop-up relative to the block container. The value of outer can be needed if, due to the specificity of the layout of your site, pop-up is cropped by neighboring page elements',
                'group'       => 'Options'
            ],
            'limit' => [
                'title'       => 'Limit',
                'default'     => '',
                'type'        => 'string',
                'description' => 'Number of social networks displayed as buttons. It is used if you need to integrate many social networks into the block, and also that the block occupies little space on the page. Those not included in the social network limit will be displayed in pop-up at the click of a button',
                'group'       => 'Options'
            ],
            'lang' => [
                'title'   => 'Language',
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
                'default'     => 'en',
                'description' => 'Block language. The signatures of the social networks buttons are localized and the "Copy link" button',
                'group'       => 'Options'
            ],
            'size' => [
                'title'       => 'Buttons size',
                'type'        => 'dropdown',
                'options' => [
                    's' => 'Small',
                    'm' => 'Medium'
                ],
                'default'     => 'm',
                'description' => 'Size of social network buttons',
                'group'       => 'Options'
            ],
            'title' => [
                'title'       => 'Title',
                'default'     => '',
                'type'        => 'text',
                'description' => 'Headline to share',
                'group'       => 'Options'
            ],
            'url' => [
                'title'       => 'URL',
                'default'     => '',
                'type'        => 'string',
                'description' => 'Link to share',
                'group'       => 'Options'
            ],

            // Services
            'collections' => [
                'title'   => 'Yandex Collections',
                'default' => '0',
                'type'    => 'checkbox',
                'group'   => 'Services'
            ],
            'vkontakte' => [
                'title'   => 'Vk (vkontakte)',
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
                'title'   => 'Ok (odnoklassniki)',
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