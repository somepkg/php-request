<?php

require_once "vendor/autoload.php";

// // GET
// $data = Utils\Request::GET("https://httpbin.org/get");
// var_dump($data);

// // POST
// $data = Utils\Request::POST("https://httpbin.org/post", "name=test");
// var_dump($data);

// // POST JSON
// $data = Utils\Request::POSTJson("https://httpbin.org/post", ["name" => "test"]);
// var_dump($data);

// With Headers
// $data = Utils\Request::POSTJson("https://httpbin.org/post", ["name" => "test"], [
//     "Authorization: Bearer 123",
// ]);
// var_dump($data);
