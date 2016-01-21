<?php
/**
 * Classe che contiene una lista di variabili di configurazione
 *
 *
 */
 class Settings
 {
    private static $appPath;
    const debug = false;
    
    public static $user = "boniniAlessandro";
    public static $password = "formica465";
    public static $host = "localhost";
    public static $db = "amm14_boniniAlessandro";
   // public static $db = "shopamm";

    public static function getApplicationPath() 
    {
        if (!isset(self::$appPath)) 
        {
            switch ($_SERVER['HTTP_HOST']) {
                case 'localhost':
                    self::$appPath = 'http://' . $_SERVER['HTTP_HOST'] . '/shopamm/';
                    break;
                case 'spano.sc.unica.it':
                    // configurazione pubblica
                    self::$appPath = 'http://' . $_SERVER['HTTP_HOST'] . '/amm2014/boniniAlessandro/';
                    break;
                default:
                    self::$appPath = '';
                    break;
            }
        }
        
        return self::$appPath;
    }
}
?>
