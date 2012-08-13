[vanilla](http://vanillaforums.org/) forum for SAE
===============

Install
---------
1. uploading code files into SAE svn

2. create a SAE mysql database with db name: `app_vanillasae` and import the sql file `sql.dump` in project folder to the database

3. open a SAE memcache instance

4. the default administrator is admin/admin

Locales
---------

Chinese locale has been installed as the default language.

For English please change following lines:

    $Configuration['EnabledLocales']['Chinese'] = 'zh-CN';
    $Configuration['Garden']['Locale']                              = 'zh-CN';

to

    $Configuration['EnabledLocales']['English'] = 'en-CA';
    $Configuration['Garden']['Locale']                              = 'en-CA';
