--TEST--
Test union with duplication from array
--SKIPIF--
<?php if (!extension_loaded("jsonpath")) print "skip"; ?>
--FILE--
<?php

$data = [
    "a",
];

$jsonPath = new \JsonPath\JsonPath();
$result = $jsonPath->find($data, "$[0,0]");

var_dump($result);
?>
--EXPECT--
array(2) {
  [0]=>
  string(1) "a"
  [1]=>
  string(1) "a"
}
