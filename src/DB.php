<?php
namespace MyNamespace;
use PDO;

class DB {
  private $pdo; 

  function __construct() {
    $db_ini = parse_ini_file("db.ini");
    print_r($db_ini);
    $database = 'mysql:host=' . $db_ini["hostname"] . ';dbname='. $db_ini["dbname"] .';charset=utf8';
    print_r($database);
    try {
      $this->pdo = new PDO($database,$db_ini["dbuser"], $db_ini["dbpass"]);
      print_r("get connection");
    } catch (PDOException $e) {
      print_r($e->getMessage());
      throw new PDOException(__FILE__ . __LINE__);
    } catch (Exception $e) {
      print_r($e->getMessage());
      throw new Exception(__FILE__ . __LINE__);
    }
  }

  function select() {
    $stmt = $this->pdo->prepare("select * from hoge");
    //$stmt->bindValue(1, "value");
    $stmt->execute();
    foreach($stmt as $loop) {
      print_r($loop);
    }
  }
}


