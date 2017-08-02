<?php 

namespace Vijityannapon\Logs;

use Vijityannapon\Logs\LoggerInterface;

class Monolog implements LoggerInterface {

    public function emergency() 
    {
        die('Monolog emergency');
    }

    public function alert() 
    {
        die('Monolog alert');
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