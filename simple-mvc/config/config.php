<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/* SITE LOCATION */

$site_location = "simple-mvc/";

/* DATE (Y-m-d H:i:s) */

date_default_timezone_set('UTC');
define("NOW", gmdate("Y-m-d H:i:s"));

/* DIR_ROOT */

define("DIR_ROOT", $site_location);

/* URL PREFIX (http, https) */

define("URL_PREFIX", "http://");

/* DIRPAGE */

define("DIRPAGE", URL_PREFIX.$_SERVER['HTTP_HOST']."/".$site_location);

/* DIRREQ */

if(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/')
{
        define("DIRREQ", $_SERVER['DOCUMENT_ROOT'].$site_location);

    }else{

        define("DIRREQ", $_SERVER['DOCUMENT_ROOT']."/".$site_location);
}

/* PAGE_URL */

define("PAGE_URL", URL_PREFIX.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

/* DIRIMG */

define("DIRIMG", DIRPAGE."public/assets/img/");

/* DIRCSS */

define("DIRCSS", DIRPAGE."public/assets/css/");

/* DIRJS */

define("DIRJS", DIRPAGE."public/assets/js/");

/* DIRFONTS */

define("DIRFONTS", DIRPAGE."public/assets/fonts/");

/* DB SETTINGS  */

// define("HOST", "");
// define("DB",   "");
// define("USER", "");
// define("PASS", "");
