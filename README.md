# php-request

A simple PHP request package

## Install

```bash
composer require somepkg/request
```

## Usage

```php
request_once "path/to/request/vendor/autoload.php";
```

### Simple get

```php
$data = Utils\Request::GET("https://httpbin.org/get");
var_dump($data);
```

### Simple post

```php
$data = Utils\Request::POST("https://httpbin.org/post", "name=test");
var_dump($data);
```

### Post Json

```php
$data = Utils\Request::POSTJson("https://httpbin.org/post", ["name" => "test"]);
var_dump($data);
```

### With Headers

```php
$data = Utils\Request::POSTJson("https://httpbin.org/post", ["name" => "test"], [
    "Authorization: Bearer 123",
]);
var_dump($data);
```