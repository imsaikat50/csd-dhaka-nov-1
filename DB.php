<?php
/**
 * Created by PhpStorm.
 * User: mizan
 * Date: 11/11/17
 * Time: 11:10 AM
 */

class DB
{

    public static  $obj;

    private function __construct()
    {
        echo "creating a new object \n";
    }

    public static function getInstance()
    {
        if(is_null(self::$obj))
        {
            self::$obj = new DB();
        }

        return self::$obj;
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }


    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
        throw new Exception("nothing to create from string");
    }

}

$db1 = DB::getInstance();
$db2 = DB::getInstance();


var_dump($db1);
var_dump($db2);