<?php
date_default_timezone_set("Asia/Tashkent");
//session_start();
class DataConnection
{
    public static $servername = "localhost";
    public static $username = "root";
    public static $password = "";
    public static $db;
    public static $dns = 'mysql:host=localhost;dbname=perfect';


    public static function get()
    {

        if (is_null(self::$db)) {
            self::$db = new PDO(self::$dns, self::$username, self::$password);
        }
        return self::$db;
    }


}

//echo DataConnection::get() ? 'yes' : 'no';




?>