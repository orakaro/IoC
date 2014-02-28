<?php

/* For IoC class */
require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../vendor/autoload.php';

IoC::register('book_license', function($version){
  return Book::license($version);
});

class IoCBook {
  public static function license($version)
  {
    $b = IoC::resolve('book_license');
    return $b($version);
  }
}

