=== eShop Languages ===
Contributors: RavanH, elfin
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&amp;business=ravanhagen%40gmail%2ecom&amp;item_name=eShop%20Languages&amp;item_number=1%2e0&amp;no_shipping=0&amp;tax=0&amp;bn=PP%2dDonationsBF&amp;charset=UTF%2d8
Tags: eshop, translation, language
Requires at least: 2.7
Tested up to: 3.5
Stable tag: 1.0

Simple extension to eShop, providing translation files.

== Description ==

This simple plugin extends eShop with translation files. It does not need configuration. Just activate it on any site that has its language set to other than English and this plugin will try to provide eShop with the appropriate translation. That is, if it has a translation in your language available.

Translations in this files are done by other WordPress and eShop users and generously shared with the community. More translations will be added as soon as they become available.

= Currently included translations =

- **Czech** * Author: [Jiří Štencek](http://www.c3studio.cz) * eShop version: 6.2.10
- **Dutch** * Author: [Walter Akkermans](http://www.skislotje.nl/) * eShop version: 6.3.1
- **French** * Author: [Laurent Grabielle](http://www.eco2net.com/) * eShop version: 6.3.8
- **German** * Author: [Peter Mueller](http://service.c-major.de/) * eShop version: 6.2.10
- **Hungarian** * Author: [Viktor Farkas](http://wpsuli.info/wordpress-honlap-keszites/a-legjobb-webaruhaz-bovitmenyek/) * eShop version 6
- **Italian** * Author: [Federico Porri](http://ThriftyItaly.com/) * eShop version: 6.?
- **Russian** Author: [Reverie](http://cpp.in.ua/) * eShop version: 6.2.8
- **Spanish** * Author: [Frans Rehl](http://tendencia-social.cl/2012/09/24/ayuda-con-eshop-en-espanol/) * eShop version: 6.3

*Replaced but still included MO versions:*

- **Dutch** * Author: [R.A. van Hagen](http://status301.net) (eShop version 6.2.8)
- **French** * Author: [R.A. van Hagen](http://status301.net) (eShop version 6.2.8)

**Included POT based on eShop version 6.3.9**


= New translations =

If you have a recent translation for eShop available, and it is not already included on this plugin, please contact me at [Status301](http://status301.net/contact/). If approved, your translation will be included in the next version and your name will be proudly listed above. 

With all the thanks of the WordPress and eShop user community, of course! :)


== Installation ==

Either [Install now](http://coveredwebservices.com/wp-plugin-install/?plugin=eshop-languages) _or_ use the slick search and install feature (Plugins > Add New and search for "eshop languages") in your WP2.7+ admin section _or_ follow these basic steps:

1. Download archive and unpack.
1. Upload the /eshop-languages/ folder and its content to the /plugins/ folder. 
1. Activate plugin on the Plug-ins page


== Frequently Asked Questions ==

= My language is not included. Does it not exist? =

It might, it might not. Search the internet or start on the [eShop support forums](http://quirm.net/forum/forum.php?id=14) and if you find a recent translation and the translator is willing to share it, please let me know. I'll include it in this plugin. 

If not, please consider doing your own tranlation and sharing it with the rest of the WordPress and eShop user community. Contact me at [Status301](http://status301.net/contact/) or post it on [eShop support forums](http://quirm.net/forum/topic.php?id=2512) :) 

= How can I contribute? =

Any new or updated translation is much appreciated. Below are the basic steps you need to take to create one:

1. Install PoEdit on your computer.
1. Go to this plugins directory.
1. If there is no .po file that corresponds with your language yet, create a new empty file called eshop-xx_XX.po replacing the xx with your language code and XX with your country code.
1. Open the .po file of your language with PoEdit. 
1. Go to Edit > Preferences and on the tab Editor check the option to compile a .mo database on save automatically. Close with OK.
1. Go to Catalog > Settings and set your name, e-mail address, language and country. Close with OK.
1. Go to Catalog > Update from POT-file and select the main eshop.pot file. Then accept all new and removed translation strings with OK.
1. Now go ahead and start translating all the texts listed in PoEdit.
1. When done, go to File > Save to Save.
1. Upload the automatically created eshop-xx_XX.mo database file (where xx_XX should now be your language and country code) to the plugins directory on your WordPress site.
1. After verifying the translation works on your site, send the .mo file and - if you're willing to share it - your original .po file to ravanhagen at gmail dot com and don't forget to tell me how and with what link you would like to be mentioned in the credits!

Thanks for sharing your translation :)


== Changelog ==

= 0.2 =

Date: 2013-04-08

* First version with Czech, Dutch, Spanish, Russian, Italian, German, Hungarian and French translations
