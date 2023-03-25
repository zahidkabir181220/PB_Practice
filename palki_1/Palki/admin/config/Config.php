<?php 
class Config{
    protected $con;
    public function __construct(){
        //define("HOSTNAME","localhost");
        //define("USERNAME","root");
        //define("PASSWORD","");
        //define("DBNAME","Palki");
        $this->con=new mysqli("localhost","root","","Palki");
    }
}
?>