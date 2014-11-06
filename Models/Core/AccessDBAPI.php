<?php
/**
 * Created by PhpStorm.
 * User: haroon
 * Date: 10/14/14
 * Time: 1:10 PM
 */

namespace Models\Core;


class AccessDBAPI {

    private static $result = null;

    function __construct(){}

    //$res = odbc_exec($conn, "select * from clientes");

    public static function select($con, $class){

        $resource = odbc_exec($con, "SELECT * FROM " . $class::getTable());
        self::$result = odbc_fetch_array($resource);

        self::mysqlDump($class, $resource);
        //echo $class::dbFields();
    }

    public static function mysqlDump($class, $res){

        $sql = "INSERT INTO ".$class::getTable(). "(".$class::dbFields().") VALUES ";
        //$tmpDBFields = explode(",",str_replace('`','', $class::dbFields()));

        $values = '';

        while( $row = odbc_fetch_array($res) ) {
            $values .= "(";
            foreach($row as $key => $value){
                $values .= "'$value',";
            }
            $values = substr($values, 0, -1);
            $values .= "),";

        }

        $values = substr($values, 0, -1);
        echo $sql . $values;
    }
}