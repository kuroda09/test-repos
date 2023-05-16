<?php
$con = mysqli_connect("localhost","root","","hotel") or die(mysql_error());

class DB {
    public $con;
    public function __construct(){
    }

    public static function getData($sql){
        $con = mysqli_connect("localhost","root","","hotel") or die(mysql_error());
        $proc = $con->query($sql);
        $data = [];
        foreach ($proc as $key => $value) {
            $data[$key] = $value;
        }
        return $data;
    }

    public static function _query($sql){
        $con = mysqli_connect("localhost","root","","hotel") or die(mysql_error());
        $proc = mysqli_query($con,$sql);
        return $proc;
    }
}