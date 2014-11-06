<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));
define('MICROSOFT', ROOT . DS . 'Microsoft');
define('CORE', ROOT . DS . 'Models' . DS . 'Core');

include(MICROSOFT . DS . 'Msaccess' . DS .'Exception' . DS . 'MsAccessConnectionException.php');
include(MICROSOFT . DS . 'Msaccess' . DS .'Config' . DS . 'OdbcConnection.php');
include(CORE . DS . 'AccessDBAPI.php');
include(CORE . DS . 'SchemaModel.php');

/**
 * Model & Schema Inclusion--------------------------------
 */
foreach (glob("Models/App/*.php") as $filename)
{
    include $filename;
}
//----------------------------------------------------------
$msODBC = new \Microsoft\Msaccess\Config\OdbcConnection();
$msAccessDB = new \Models\Core\AccessDBAPI();

/**
 * CONNECTION TO MS ACCESS----------------------------
 */
$msODBC::ODBC('MsAccessConnection');
$msODBC::USER('sa');
$msODBC::PASSWORD('seg@pass');

$odbc = $msODBC::connect();
/*
 * ---------------------------------------------------
 */

/**
 * Dump Clientes table
 * @params  1 : connection object
 * @params  2 : Model Class name created in Models folder. Every DB table
 *              must have a Model file and corresponding Schema file in Tables/Schema folder
 */
$msAccessDB::select($odbc, \Models\App\Clientes::name());

/**
 * Dump Enderecoscliente table
 * @params  1 : connection object
 * @params  2 : Model Class name created in Models folder. Every DB table
 *              must have a Model file and corresponding Schema file in Tables/Schema folder
 */
echo '<p />';
$msAccessDB::select($odbc, \Models\App\Enderecoscliente::name());

/**
 * Dump Segpasta table
 * @params  1 : connection object
 * @params  2 : Model Class name created in Models folder. Every DB table
 *              must have a Model file and corresponding Schema file in Tables/Schema folder
 */
echo '<p />';
$msAccessDB::select($odbc, \Models\App\Segpasta::name());


/**
 * Dump Seguradoras table
 * @params  1 : connection object
 * @params  2 : Model Class name created in Models folder. Every DB table
 *              must have a Model file and corresponding Schema file in Tables/Schema folder
 */
echo '<p />';
$msAccessDB::select($odbc, \Models\App\Seguradoras::name());

/**
 * Dump Segitensauto table
 * @params  1 : connection object
 * @params  2 : Model Class name created in Models folder. Every DB table
 *              must have a Model file and corresponding Schema file in Tables/Schema folder
 */
echo '<p />';
$msAccessDB::select($odbc, \Models\App\Segitensauto::name());
