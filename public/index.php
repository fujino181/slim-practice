<?php
require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\App;

$app->get('/', function($request, $response) {
  echo 'Hello World!';
});

$app->get('/json', function($request, $response) {
  $json = [
    "hoge" => "fuga",
    "foo" => "bar",
  ];

  return $response->withJson($json);
});

$app->get('/db', function($request, $response) use ($app) {
  $db = new MyNamespace\DB(); 
  $table = $_GET['table'];
  $result = $db->select($table);

  return $response->withStatus(200)->withJson($result);
});

$app->run();
