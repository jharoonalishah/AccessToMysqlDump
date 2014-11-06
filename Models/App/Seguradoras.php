<?php
/**
 * Created by PhpStorm.
 * User: haroon
 * Date: 10/14/14
 * Time: 10:23 AM
 */

namespace Models\App;

use Models\Core\SchemaModel;

class Seguradoras extends SchemaModel {
    private static $table = "seguradoras";
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
        `codseg`, `descricao`, `razao`, `cnpj`, `obs`, `tipocalculo`, `ordem`, `codigosusep`
        ";
    }

}