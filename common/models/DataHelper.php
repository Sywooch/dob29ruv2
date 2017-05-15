<?php
/**
 * User: Администратор
 * Date: 15.05.2017
 * Time: 1:04
 */

namespace common\models;


class DataHelper
{
    /**
     * Возвращает тип объявления
     *
     * @param $arg
     * @return string
     */
    public static function getAdvertType( $arg )
    {
        $type = '';

        switch ( $arg ) {
            case 1:
                $type = 'Продам';
                break;
            case 2:
                $type = 'Сдам';
                break;
            case 3:
                $type = 'Сниму';
                break;
            case 4:
                $type = 'Предлагаю';
                break;
            case 5:
                $type = 'Воспользуюсь';
                break;
            case 6:
                $type = 'Ищу';
                break;
            case 7:
                $type = 'Отдам';
                break;
            case 8:
                $type = 'Приму в дар';
                break;
            case 9:
                $type = 'Обменяю';
                break;
        }

        return $type;
    }

    /**
     * Возвращает название города
     *
     * @param $arg
     * @return string
     */
    public static function getCity( $arg )
    {
        $city = '';

        switch ( $arg ) {
            case 6:
                $city = 'Архангельск';
                break;
            case 394:
                $city = 'Северодвинск';
                break;
            case 396:
                $city = 'Новодвинск';
                break;
            case 397:
                $city = 'Котлас';
                break;
            case 398:
                $city = 'Вельск';
                break;
            case 401:
                $city = 'Каргополь';
                break;
            case 402:
                $city = 'Коноша';
                break;
            case 403:
                $city = 'Коряжма';
                break;
            case 404:
                $city = 'Мезень';
                break;
            case 405:
                $city = 'Мирный';
                break;
            case 406:
                $city = 'Няндома';
                break;
            case 408:
                $city = 'Онега';
                break;
            case 409:
                $city = 'Пинега';
                break;
            case 410:
                $city = 'Плесецк';
                break;
            case 413:
                $city = 'Шенкурск';
                break;
            case 414:
                $city = 'Другой';
                break;
        }

        return $city;
    }

}