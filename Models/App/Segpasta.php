<?php
/**
 * Created by PhpStorm.
 * User: haroon
 * Date: 10/14/14
 * Time: 10:23 AM
 */

namespace Models\App;

use Models\Core\SchemaModel;

class Segpasta extends SchemaModel {
    private static $table = "seg_pasta";
    private static $name;

    /**
     * @return Class name
     */
    public static function name(){
        return self::$name = get_class();
    }
    /**
     * @return string
     */
    public static function getTable()
    {
        return self::$table;
    }

    public static function dbFields(){
        return "
        `chavepasta`, `codramo`, `codcli`
        ";
    }

}