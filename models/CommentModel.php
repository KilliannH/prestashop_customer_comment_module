<?php
/**
 * Created by PhpStorm.
 * User: killiann
 * Date: 14/03/19
 * Time: 13:10
 */

class CommentModel extends ObjectModel {
    public $id_comment; // INT PRIMARY KEY AUTO INCREMENT
    public $comment; // TEXT
    public $date_add; // DATE
    public $id_customer; // INT
    public $rate; // INT

    public static $definition = array(
        'table' => "comments",
        'primary' => 'id_comment',
        'fields' => array(
        'id_comment' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
        'comment' => array('type' => self::TYPE_STRING, 'validate' => 'isString'),
        'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
        'id_customer' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true),
        'rate' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => false)
    ));
}
