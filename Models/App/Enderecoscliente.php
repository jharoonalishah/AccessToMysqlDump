<?php
/**
 * Created by PhpStorm.
 * User: haroon
 * Date: 10/14/14
 * Time: 10:23 AM
 */

namespace Models\App;

use Models\Core\SchemaModel;

class Enderecoscliente extends SchemaModel {
    private static $table = "enderecoscliente";
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
        `chave`,
        `codcli`,
        `codtipoendereco`,
        `cep`,
        `tipologradouro`,
        `logradouro`,
        `numero`,
        `complemento`,
        `bairro`,
        `cidade`,
        `estado`,
        `padrao`";
    }

}