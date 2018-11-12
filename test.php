<?php

var_dump('scream.enabled default: ' . ini_get('scream.enabled'));

ini_set('scream.enabled', 1);
var_dump('scream.enabled supported: ' . ini_get('scream.enabled'));

$id = ftok(__FILE__, 's');
var_dump('id: ' . $id);
var_dump(@shmop_open($id, 'a', 0, 0));
