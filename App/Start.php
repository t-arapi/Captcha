<?php
defined('CMS_TA') or die;
// loader System class
require __DIR__ . '/../System/Loader/autoloader.php';
// load App class
Loader\Loader::autoload(dirname(__DIR__));

Session\Storage::fillo();

$app = new Core\Shperndares;
// url qe duhen
$app->add('/','App\Sito\Components\Base\Home');
$app->add('/user/login(/@a(/@b(/@c(/@d(/@e(/@f))))))','App\Sito\Components\User\Controllers\Login');
$app->add('/user/logout','App\Sito\Components\User\Controllers\Logout');
$app->add('/user/register','App\Sito\Components\User\Controllers\Register');
$app->add('/user/profile','App\Sito\Components\User\Controllers\Profile');
$app->add('/user/recovery','App\Sito\Components\User\Controllers\Recovery');
$app->add('/user/reset/@email/@code','App\Sito\Components\User\Controllers\Reset');
$app->add('/user/activate/@email/@code','App\Sito\Components\User\Controllers\Activate');
$app->add('/kalendar(/@viti(/@muaji(/@dita)))','App\Sito\Components\Kalendar\Controllers\Kalendar');
$app->add('/video(/@category(/@item(/@id)))','App\Sito\Components\Media\Controllers\Video');
//--ADMIN--/////////////////////////
$app->add('/admin','App\Admin\Components\Base\Home');
//--Config
$app->add('/admin/config/sito','App\Admin\Components\Config\Controllers\Config');
$app->add('/admin/config/options','App\Admin\Components\Config\Controllers\Options');
//--Users
$app->add('/admin/users/users(/@faqja:[0-9]+)','App\Admin\Components\Users\Controllers\Users');
$app->add('/admin/users/user(/@id:[0-9]+)','App\Admin\Components\Users\Controllers\User');
$app->add('/admin/users/groups(/@faqja:[0-9]+)','App\Admin\Components\Users\Controllers\Groups');
$app->add('/admin/users/group(/@id:[0-9]+)','App\Admin\Components\Users\Controllers\Group');
$app->add('/admin/users/levels(/@faqja:[0-9]+)','App\Admin\Components\Users\Controllers\Levels');
$app->add('/admin/users/level(/@id:[0-9]+)','App\Admin\Components\Users\Controllers\Level');
// Media
$app->add('/admin/media/categories(/@faqja:[0-9]+)','App\Admin\Components\Media\Controllers\Categories');
$app->add('/admin/media/category(/@id:[0-9]+)','App\Admin\Components\Media\Controllers\Category');
$app->add('/admin/media/options','App\Admin\Components\Media\Controllers\Options');
