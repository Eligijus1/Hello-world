<?php
$data = [];
$data[] = ['a','b','c'];
$data[] = ['d','e','f'];
$data[] = ['g','h','i'];
$data[] = [];
print_r($data);
print_r(array_merge(... $data));
