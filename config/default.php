<?php


/* DATABASE SETTİNGS */

try {
    //$db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8;", DB_USERNAME, DB_PASSWORD);
    // $db = new PDO("mysql:host=".DB_HOST.";dbname".DB_NAME.";charset=utf8;",DB_USERNAME,DB_PASSWORD);
    $db = new PDO("mysql:host=localhost;dbname=blog_db;charset=utf8;","root","");
    $db->query("SET CHARACTER SET UTF8");
    $db->query("SET NAMES UTF8");

}catch (PDOException $hata){

    echo $hata->getMessage();
}


$ayarlar = $db->prepare("SELECT * FROM ayar");
$ayarlar->execute();
$arow = $ayarlar->fetch(PDO::FETCH_OBJ);

define("DB_HOST","localhost");
define("DB_NAME","blog_db");
define("DB_USERNAME","root");
define("DB_PASSWORD","");

define('SITE_URL','http://localhost/MyBlogWebsite');

/* Assets Settings*/
define('CSS_PATH',SITE_URL.'/assets/site/css');
define('JS_PATH',SITE_URL.'/assets/site/js');
define('IMG_PATH',SITE_URL.'/assets/site/img');
define('PDF',SITE_URL.'/assets/site/pdf');

/* USER LOGIN */
define('USER_LOGIN',SITE_URL.'/components/auth/login.php');

/* CK EDITOR */
define('CK_EDITOR_PATH',SITE_URL.'/assets/admin/ckeditor');

/* CK FINDER */
define('CK_FINDER_PATH',SITE_URL.'/assets/admin/ckfinder');
