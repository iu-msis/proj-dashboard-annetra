<?php

//Get task_id
$taskId = $_GET['taskId'] ?? 0;

//Fetch all the work for that task id
$work = Work::getByTaskId($taskId);

//Convert to json and printf
echo json_encode($work);

 ?>
