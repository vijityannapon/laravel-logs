<?php 

namespace Vijityannapon\Logs\Adapters;

use Vijityannapon\Logs\LoggerInterface;

class Stackdriver implements LoggerInterface {

    public function emergency($message, array $context = array()) 
    {
        die('Stackdriver Info');
    }

    public function alert($message, array $context = array()) 
    {
        die('Stackdriver Warning');
    }

    public function critical($message, array $context = array()) 
    {
        # code...
    }

    public function error($message, array $context = array()) 
    {


        # code...
    }

    public function warning($message, array $context = array())
    {
        # code...
    }

    public function notice($message, array $context = array()) 
    {
        # code...
    }

    public function info($message, array $context = array()) 
    {
        # code...
    }

    public function debug($message, array $context = array()) 
    {
        # code...
    }

    public function log($level, $message, array $context = array())
    {
        # code...
    }


}