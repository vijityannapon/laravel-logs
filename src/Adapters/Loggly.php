<?php 

namespace Vijityannapon\Logs\Adapters;

use Vijityannapon\Logs\LoggerInterface;
use Log;

class Loggly implements LoggerInterface {

    public function __construct()
    {
        $config = config('logs.loggly');
        $key    = ($config['key']) ? $config['key'] : '';
        $tag    = ($config['tag']) ? $config['tag'] : '';

        $handler = new \Monolog\Handler\LogglyHandler($key.'/tag/'.$tag); 
        $logger = Log::getMonolog(); 
        $logger->pushHandler($handler); 
    }

    public function emergency($message, array $context = array()) 
    {
        Log::emergency($message, $context);
    }

    public function alert($message, array $context = array()) 
    {
        Log::alert($message, $context);
    }

    public function critical($message, array $context = array()) 
    {
        Log::critical($message, $context);
    }

    public function error($message, array $context = array()) 
    {
        Log::error($message, $context);
    }

    public function warning($message, array $context = array())
    {
        Log::warning($message, $context);
    }

    public function notice($message, array $context = array()) 
    {
        Log::notice($message, $context);
    }

    public function info($message, array $context = array()) 
    {
        Log::info($message, $context);
    }

    public function debug($message, array $context = array()) 
    {
        Log::debug($message, $context);
    }

    public function log($level, $message, array $context = array())
    {
        Log::log($message, $context);
    }


}