<?php
namespace Mynamespace;
use PDO;

class DB {
  public $db_ini; 
  public $pdo; 

  function __construct() {
    $db_ini = parse_ini_file("db.ini");
    print_r($db_ini);
    $database = 'mysql:host=' . $db_ini["hostname"] . ';dbname='. $db_ini["dbname"] .';charset=utf8';
    print_r($database);
    $pdo = new PDO($database,$db_ini["dbuser"], $db_ini["dbpass"]);
  }

  function select() {
    //$stmt = $pdo->prepare("select * from hoge");
    ////$stmt->bindValue(1, "value");
    //$stmt->execute();
    //foreach($stmt as $loop) {
    //  echo $loop;
    //}
  }
}


