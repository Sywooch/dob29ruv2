<?php
/**
 * User: Администратор
 * Date: 22.04.2017
 * Time: 21:19
 */

namespace common\utils;


class Utils
{
    /**
     * @param $publicDate
     * @param $modification_date
     * @return bool|string
     */
    public static function publicationDay( $publicDate, $modification_date )
    {
        $date = date( "d.m.Y", $publicDate );
        $now = date( "d.m.Y", time() );
        $yesterday = date( "d.m.Y", time() - 86400 );
        $modification_date = date( "d.m.Y", $modification_date );
        if ( $now == $date ){
            $date = 'сегодня';
        } else if ( $yesterday == $date ){
            $date = 'вчера';
        }
        if ( $now == $modification_date ){
            $date = 'сегодня';
        } else if ( $yesterday == $modification_date ){
            $date = 'вчера';
        }
        return $date;
    }

    /**
     * @param $string
     * @param $length
     * @return string
     */
    public static function getShortComment( $string, $length )
    {
        $s = strip_tags( html_entity_decode( $string ) );

        Utf8::strlen( $s )>$length ? $result = Utf8::substr( $s, 0, $length ) : $result = $s;

        return $result . '...';
    }
}