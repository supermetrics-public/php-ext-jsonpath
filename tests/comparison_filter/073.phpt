--TEST--
Test filter expression with value true
--SKIPIF--
<?php if (!extension_loaded("jsonpath")) print "skip"; ?>
--FILE--
<?php

$data = [
    1,
    3,
    "nice",
    true,
    null,
    false,
    [],
    [],
    -1,
    0,
    "",
];

$jsonPath = new JsonPath();
$result = $jsonPath->find($data, "$[?(true)]");

var_dump($result);
?>
--EXPECTF--
Fatal error: Uncaught RuntimeException: Invalid expression. in %s
Stack trace:
%s
%s
%s
