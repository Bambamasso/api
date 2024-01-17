<?php
class DB{
    private static $writeDBconnection;
    private static $readBDConnection;

    public static function connectWriteDB(){
        if(self::$writeDBconnection==null){
            self::$writeDBconnection=new PDO('mysql:host=localhost;dbname=tasksdb;charset=utf8','root','');
            self::$writeDBconnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$writeDBconnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }
        return self::$writeDBconnection;
    } 
    public static function connectionReadDB(){
         if(self::$writeDBconnection==null){
            self::$writeDBconnection=new PDO('mysql:host=localhost;dbname=tasksdb;charset=utf8','root','');
            self::$writeDBconnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$writeDBconnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }
        return self::$readBDConnection;
    }
}
?>