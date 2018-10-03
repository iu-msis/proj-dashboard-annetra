<?php
// Change the working directory to this file.
chdir(__DIR__);
set_include_path (__DIR__);

var_dump($_POST);

if($_SERVER['REQUEST_METHOD'] == 'POST'
&& stripos($_SERVER['CONTENT_TYPE'],'application/json') !== false) {
  $_POST = json_decode(file_get_contents('php://input',true));
  var_dump($_POST);
}

require 'environment.php';
/** MODELS **/
require 'models/Work.php';
require 'models/Team.php';
