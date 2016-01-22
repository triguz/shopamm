<?php

include_once './Settings.php';

// Gives database data
class database
{
    
    private function __construct()
    {
        
    }
    
    private static $_singleton;
   
    // Returns the singleton for the database connection
    public static function getInstance()
    {
        if(!isset(self::$_singleton))
            self::$_singleton = new database();
        
        return self::$_singleton;
    }
    
    // Returns a datavase connection
    public function databaseConnection()
    {
        $mysqli = new mysqli();
        $mysqli->connect(Settings::$host, Settings::$user,
        Settings::$password, Settings::$db);
        
        if($mysqli->errno != 0)
            return null;
        else
            return $mysqli;
    }
    
    public static function chiudiDB()
{
if(self::$_instance != null)
{
self::$_instance->close();
}
}
}

?>
