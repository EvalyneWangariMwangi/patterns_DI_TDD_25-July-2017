<?php
class Singleton 
{ 
    protected static $instance = null; 
    protected function __construct() 
    { 
        
    } 
    protected function __clone() 
    { 
        
    } 
 
    public static function getInstance() 
    { 
        if (!isset(static::$instance)) { 
            echo "Creating Instance \n";
            static::$instance = new static; 
        } 
        echo "Returning instance \n";
        return static::$instance; 
    } 
} 

//class singleton has one instance which provides an access point to the class singleton
Singleton::getInstance();
Singleton::getInstance();
Singleton::getInstance();
?>