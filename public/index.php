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

$app->get('/db', function($request, $response) {
  $db = new MyNamespace\DB(); 
  $db->select();
});

$app->run();
