<?php

var_dump($_POST)

$work = new Worj($_POST);

$work->create();

echo json_encode($work);
