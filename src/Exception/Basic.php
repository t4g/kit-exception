<?php
/**
 * Created by PhpStorm.
 * User: soap
 * Date: 18/11/2013
 * Time: 06:00
 */

namespace Exception;


class Basic {

    function __constructor($message){
       return $this->_lamda($message);
    }

    function _lamda($m){
        return function ($m, $e=array(__FILE__,__NAMESPACE__,__CLASS__,__METHOD__)) use __CLASS__ {
                $trace = debug_backtrace();
                trigger_error(
                    $m.
                    'Undefined state, '.$e[1].'----'.__CLASS__.': ' . __METHOD__ .
                    ' in ' . $trace[0]['file'] .
                    ' on line ' . $trace[0]['line'],
                    E_USER_NOTICE);
                return null;
            };
    }

} 