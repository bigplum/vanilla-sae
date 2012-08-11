<?php if (!defined('APPLICATION')) exit();

// Conversations
$Configuration['Conversations']['Version'] = '2.0.18.4';

//
memcache_init();
$Configuration['Cache']['Enabled']                              = TRUE;
$Configuration['Cache']['Method']                               = 'Filecache';
$Configuration['Cache']['Filecache']['Store']                   = PATH_LOCAL_CACHE.'memcache';

// Database
$Configuration['Database']['Name'] = SAE_MYSQL_DB;
$Configuration['Database']['Host'] = SAE_MYSQL_HOST_M.":".SAE_MYSQL_PORT;
$Configuration['Database']['User'] = SAE_MYSQL_USER;
$Configuration['Database']['Password'] = SAE_MYSQL_PASS;

// EnabledApplications
$Configuration['EnabledApplications']['Conversations'] = 'conversations';
$Configuration['EnabledApplications']['Vanilla'] = 'vanilla';

// EnabledPlugins
$Configuration['EnabledPlugins']['GettingStarted'] = 'GettingStarted';
$Configuration['EnabledPlugins']['HtmLawed'] = 'HtmLawed';

// Garden
$Configuration['Garden']['Locale']                              = 'zh-CN';
//$Configuration['Garden']['Locale']                              = 'en-CA';
$Configuration['Garden']['LocaleCodeset']                       = 'UTF8';
$Configuration['Garden']['Title'] = 'test';
$Configuration['Garden']['Cookie']['Salt'] = 'F8PJWF42MC';
$Configuration['Garden']['Cookie']['Domain'] = '';

$Configuration['Garden']['Registration']['ConfirmEmail'] = '1';
$Configuration['Garden']['Registration']['Method'] = 'Captcha';
$Configuration['Garden']['Registration']['ConfirmEmailRole'] = '3';
$Configuration['Garden']['Registration']['CaptchaPrivateKey'] = '6LfW3tQSAAAAAFVBZGScSeZt69lOT71M_9jiSWc1';
$Configuration['Garden']['Registration']['CaptchaPublicKey'] = '6LfW3tQSAAAAACq6AiOD6eX1D2_5y7HV2zILZgqR';
$Configuration['Garden']['Registration']['InviteExpiration'] = '-1 week';
$Configuration['Garden']['Registration']['InviteRoles'] = 'a:5:{i:3;s:1:"0";i:4;s:1:"0";i:8;s:1:"0";i:32;s:1:"0";i:16;s:1:"0";}';

$Configuration['Garden']['Email']['SupportName'] = 'test';
$Configuration['Garden']['Version'] = '2.0.18.4';
$Configuration['Garden']['RewriteUrls'] = TRUE;
$Configuration['Garden']['CanProcessImages'] = TRUE;
$Configuration['Garden']['Installed'] = TRUE;
$Configuration['Garden']['Errors']['MasterView'] = 'deverror.master.php';
    
// Modules
$Configuration['Modules']['Vanilla']['Content'] = 'a:6:{i:0;s:13:"MessageModule";i:1;s:7:"Notices";i:2;s:21:"NewConversationModule";i:3;s:19:"NewDiscussionModule";i:4;s:7:"Content";i:5;s:3:"Ads";}';
$Configuration['Modules']['Conversations']['Content'] = 'a:6:{i:0;s:13:"MessageModule";i:1;s:7:"Notices";i:2;s:21:"NewConversationModule";i:3;s:19:"NewDiscussionModule";i:4;s:7:"Content";i:5;s:3:"Ads";}';

// Plugins
$Configuration['Plugins']['GettingStarted']['Dashboard'] = '1';
$Configuration['Plugins']['GettingStarted']['Discussion'] = '1';
$Configuration['Plugins']['GettingStarted']['Categories'] = '1';

// Routes
$Configuration['Routes']['DefaultController'] = 'discussions';

// Vanilla
$Configuration['Vanilla']['Version'] = '2.0.18.4';

$Configuration['EnabledLocales']['Chinese'] = 'zh-CN';
//$Configuration['EnabledLocales']['English'] = 'en-CA';
// Last edited by admin (127.0.0.1)2012-08-03 17:33:28
