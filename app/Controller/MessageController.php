<?php

namespace Project\Controller;

use Project\Db\QueryBuilder;

class MessageController
{
    public function indexFunction()
    {
      $query = new QueryBuilder();
      $getMessage = $query->select('msg');
      $rev = array_reverse($getMessage);
      require './app/views/index.php';
    }

    public function insertDB()
    {
      $dataEnv = \date(YmdHis);
      $query = new QueryBuilder();
      $name = $_POST['name'];
      $mensagem = $_POST['msg'];
      $dbInsert['name'] = $name;
      $dbInsert['msgEnv'] = $mensagem;
      $dbInsert['data'] = $dataEnv;
      $query->insert('msg', $dbInsert);
      header('location: / ');
    }
}
