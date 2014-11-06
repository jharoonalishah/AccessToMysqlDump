<?php
/**
 * Created by PhpStorm.
 * User: haroon
 * Date: 10/14/14
 * Time: 10:33 AM
 */

namespace Microsoft\Msaccess\Config;

use Microsoft\Msaccess\Exception\MsAccessConnectionException;

class OdbcConnection {
    private static $USER;
    private static $PASSWORD;
    private static $ODBC;
    private static $connection;

    /**
     * @param mixed $ODBC
     */
    public static function ODBC($ODBC)
    {
        self::$ODBC = $ODBC;
    }

    /**
     * @param mixed $PASSWORD
     */
    public static function PASSWORD($PASSWORD)
    {
        self::$PASSWORD = $PASSWORD;
    }

    /**
     * @return mixed
     */
    public static function getPASSWORD()
    {
        return self::$PASSWORD;
    }

    /**
     * @param mixed $USER
     */
    public static function USER($USER)
    {
        self::$USER = $USER;
    }

    /**
     * @return mixed
     */
    public static function getUSER()
    {
        return self::$USER;
    }

    /**
     * Connect to Access DB using ODBC Connection
     */
    public static function connect(){

        try{
            if(!self::$connection = odbc_connect(self::$ODBC, self::$USER, self::$PASSWORD)){
                throw new MsAccessConnectionException("Error Database Connection ! Please check ODBC or Email :<a href='mailto:jharoonalishah@gmail.com?Subject=ODBC Error'>Haroon</a>");
            }else{
                echo '<script>alert("Bingo! job well done.")</script>';
                return self::$connection;
            }
        }catch (MsAccessConnectionException $e){
            echo $e->errorMessage();
        }
    }
} 