<?php
/**
 * Created by PhpStorm.
 * User: haroon
 * Date: 10/14/14
 * Time: 10:23 AM
 */

namespace Models\App;

use Models\Core\SchemaModel;

class Clientes extends SchemaModel {
    private static $table = "clientes";
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
        return " `codcli`,
                `nome`,
                `cpf`,
                `cnpj`,
                `pessoa`,
                `tipodoc`,
                `numdoc`,
                `datadoc`,
                `orgaodoc`,
                `nascimento`,
                `obs`,
                `contato`,
                `sexo`,
                `ecivil`,
                `status`,
                `produtor`,
                `datacadastro`,
                `numerocnh`,
                `validadecnh`,
                `categoriacnh`,
                `primeiracnh`,
                `profissao`,
                `ramoatividade`,
                `renda`,
                `codigocliente`";
    }

}