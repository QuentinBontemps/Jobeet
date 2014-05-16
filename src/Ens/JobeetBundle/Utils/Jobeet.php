<?php
/**
 * Created by PhpStorm.
 * User: quentin
 * Date: 13/05/14
 * Time: 19:52
 */

namespace Ens\JobeetBundle\Utils;
class Jobeet
{
    static public function slugify($text){
//        $text = preg_replace('/\W+/', '-', $text);
        $text = preg_replace('#[^\\pL\d]+#u', '-', $text);
        $text = trim($text, '-');

        if (function_exists('iconv'))
            $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        $text = strtolower($text);

        if(empty($text)) $text = 'n-a';
        return $text;
    }
}