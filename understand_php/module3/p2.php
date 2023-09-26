<?php

[
    'scheme' => $scheme,
    'host' => $host,
    'path'=>$path
 ] = parse_url('https://www.phptutorial.net/');

var_dump($scheme, $host, $path);

$person = ['John', 'Doe', 23];

[$firstName, , $age] = $person;

echo $age;

$x = 10;
$y = 20;

[$x, $y] = [$y, $x];

echo $x;
echo $y;