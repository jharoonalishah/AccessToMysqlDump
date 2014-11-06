<?php
/**
 * Created by PhpStorm.
 * User: haroon
 * Date: 10/14/14
 * Time: 12:24 PM
 */

namespace Microsoft\Msaccess\Exception;


class MsAccessConnectionException extends \Exception{

    public function __construct($message, $code = 0, \Exception $previous = null) {
        // make sure everything is assigned properly
        parent::__construct($message, $code, $previous);
    }

    // custom string representation of object
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }

    public function errorMessage() {
        echo "Connection Error : [Line #] " . $this->getLine() . " [File] ". $this->getFile() . " - " . $this->getMessage();
    }
} 