<?php 

namespace Vijityannapon\Logs\Adapters;

use Vijityannapon\Logs\LoggerInterface;

class Loggly implements LoggerInterface {

    public function emergency() 
    {
        die('Loggly Info');
    }

    public function alert() 
    {
        die('Loggly Warning');
    }

    public function critical($value='')
    {
        # code...
    }

    public function error($value='')
    {
        # code...
    }

    public function warning($value='')
    {
        # code...
    }

    public function notice($value='')
    {
        # code...
    }

    public function info($value='')
    {
        # code...
    }

    public function debug($value='')
    {
        # code...
    }

    public function log($value='')
    {
        # code...
    }

}