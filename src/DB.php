<?php
namespace MyNamespace;
use PDO;

class DB {
  private $pdo; 

  function __construct() {
    $db_ini = parse_ini_file("db.ini");
    $database = 'mysql:host=' . $db_ini["hostname"] . ';dbname='. $db_ini["dbname"] .';charset=utf8';
    try {
      $this->pdo = new PDO($database,$db_ini["dbuser"], $db_ini["dbpass"]);
    } catch (PDOException $e) {
      print_r($e->getMessage());
      throw new PDOException(__FILE__ . __LINE__);
    } catch (Exception $e) {
      print_r($e->getMessage());
      throw new Exception(__FILE__ . __LINE__);
    }
  }

  function select($table) {
    // http://php.net/manual/ja/pdostatement.bindvalue.php
    var_dump($table);
    $sql = 'SELECT * FROM :table';
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':table', $table, PDO::PARAM_STR); 
    //$sql = 'SELECT * FROM ' . $table;
    //$stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    // http://qiita.com/YusukeHigaki/items/417878d14c8127106858
    $result = $stmt->fetchAll(PDO::FETCH_CLASS);
    return $result;
  }
}


