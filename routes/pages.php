<?php

use \App\Http\Response;
use \App\Controller\Pages;


$router->get('/', [
  function () {
    return new Response(200, Pages\Home::dashborad());
  }
]);

$router->get('/sobre', [
  function () {
    return new Response(200, Pages\Sobre::dashborad());
  }
]);


$router->get('/outros/{ida}/{idb}', [
  function ($ida, $idb) {
    return new Response(200, Pages\Sobre::dashborad());
  }
]);
