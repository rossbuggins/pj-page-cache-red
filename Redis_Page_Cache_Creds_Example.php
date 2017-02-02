<?php
/**
 * Created by PhpStorm.
 * User: RossWilliamBuggins
 * Date: 02/02/2017
 * Time: 10:55
 */

//Rename this file to be Redis_Page_Cache_Creds.php and store credentials in it.
class Redis_Page_Cache_Creds {

    public static function Creds() {
        Redis_Page_Cache::$redis_host = '127.0.0.1';
        Redis_Page_Cache::$redis_port = 6379;
        Redis_Page_Cache: $redis_db = 0;
        Redis_Page_Cache::$redis_auth = '';

    }
}