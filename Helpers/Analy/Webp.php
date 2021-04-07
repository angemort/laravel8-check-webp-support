<?php
//app/Helpers/Analy/Webp.php
namespace App\Helpers\Analy;
 
use Illuminate\Support\Str;
 
class Webp {
    /**
     * @return boolean
     */
    public static function get_client() {
        return Str::contains( $_SERVER['HTTP_ACCEPT'], 'image/webp') !== false || Str::contains($_SERVER['HTTP_USER_AGENT'], ' Chrome/') !== false ? true : false;
    }
}