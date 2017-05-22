### OctoberCMS Yandex Share plugin

Display social buttons to share content.

This plugin adds integration with [Yandex Share](https://tech.yandex.ru/share/) service.

![banner](https://cdn.rawgit.com/web2easy/OctoberCMS-Yandex-Share-Plugin/0d846efb/assets/images/banner.jpg)

#### Available languages:

- English

#### Components

- Yandex share buttons

#### Social services

- [Blogger](https://www.blogger.com)
- [Delicious](https://www.delicious.com)
- [Digg](http://digg.com)
- [Evernote](https://evernote.com)
- [Facebook](https://www.facebook.com)
- [Google+](https://plus.google.com)
- [LinkedIn](https://www.linkedin.com)
- [Livejournal](www.livejournal.com)
- [MoiMir](https://mail.ru)
- [Ok (odnoklassniki)](https://ok.ru)
- [Pinterest](https://www.pinterest.com)
- [Pocket](https://getpocket.com)
- [Qzone](https://qzone.qq.com)
- [Reddit](https://www.reddit.com)
- [Renren](www.renren.com)
- [Sina Weibo](www.weibo.com)
- [Skype](https://www.skype.com)
- [Surfingbird](https://surfingbird.ru)
- [Telegram](https://telegram.org)
- [Tencent Weibo](http://t.qq.com)
- [Tumblr](https://www.tumblr.com)
- [Twitter](https://twitter.com)
- [Viber](https://www.viber.com)
- [Vk (vkontakte)](https://vk.com)
- [WhatsApp](https://www.whatsapp.com)
- [Yandex Collections](https://collections.yandex.ru)

### Quickstart guide:

1. Go to the 'System' tab in October, and install the plugin using the AlexLit.YandexShare code.

2. After installation has finished a new component will appear in under Octobers 'CMS > Components' tab. You have the option to add this to only one page, or add it to a layout making it appear on all pages that use the layout. Whichever you chose the instructions are the same.

3. Open the your selected page/layout, and add the component to it.

4. Add component code anywhere on the page/layout.

5. That's it. You now have a working YandexShare on your page. It has no outside dependencies, so you don't have to worry about anything else.

*Do not forget to add the "{% styles %}" and "{% scripts %}" tags to your template*

#### Options

- **Access token** - A token for removing the restriction of requests to receive a counter. Actual and works only for Facebook

- **Disable styles** - A sign that loading styles is disabled. If you add an attribute, social networks will be displayed as a text vertical list

- **Show counter** - A sign that the publications counter is displayed on the button social network

- **Copy button position** - "Copy" button position. The "Copy link" button can be displayed if you use the limit parameter

- **Description text** - Text to share

- **Direction** - Direction of the list of buttons

- **Hashtags** - Relevant and work only for Twitter. The string is indicated without the # sign. Several hashtags are specified comma-delimited, without a space

- **Image** - Image to share

- **Popup direction** - Opening direction of the pop-up

- **Popup position** - The location of the pop-up relative to the block container. The value of outer can be needed if, due to the specificity of the layout of your site, pop-up is cropped by neighboring page elements

- **Limit** - Number of social networks displayed as buttons. It is used if you need to integrate many social networks into the block, and also that the block occupies little space on the page. Those not included in the social network limit will be displayed in pop-up at the click of a button

- **Language** - Block language. The signatures of the social networks buttons are localized and the "Copy link" button

- **Buttons size** - Size of social network buttons

- **Title** - Headline to share

- **URL** - Link to share

[Official API documentation](https://tech.yandex.ru/share/doc/dg/add-docpage/)