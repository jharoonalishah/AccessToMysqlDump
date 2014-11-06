<?php
/**
 * Created by PhpStorm.
 * User: haroon
 * Date: 10/14/14
 * Time: 10:23 AM
 */

namespace Models\App;

use Models\Core\SchemaModel;

class Segitensauto extends SchemaModel {
    private static $table = "seg_itensauto";
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
        `chaveitem`,
        `chaveproposta`,
        `nitem`,
        `descr`,
        `anofab`,
        `anomod`,
        `portas`,
        `placa`,
        `chassi`,
        `combustivel`,
        `cor`,
        `uso`,
        `passageiros`,
        `bonus`,
        `tipofranquia`,
        `vlfranquia`,
        `kitgas`,
        `rastreador`,
        `chavequest`,
        `obsitem`,
        `licenciamento`,
        `finalplaca`,
        `renavam`,
        `ci`,
        `codigofipe`,
        `valorfipe`,
        `zerovf`,
        `blindadovf`
        ";
    }

}